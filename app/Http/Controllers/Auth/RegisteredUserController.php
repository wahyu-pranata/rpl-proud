<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Faculty;
use App\Models\Major;
use App\Models\StudentDetails;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        switch (auth()->user()->organizationDetails()->value('organization_level'))
        {
            case 'university':
                $queriedUsers = User::where('type', '=', 'student')->get();
                return view('data_mhs', [
                    'queriedUsers' => $queriedUsers,
                    'faculties' => Faculty::all(),
                    'majors' => Major::all(),
                ]);

            case 'faculty':
                Session::flash('faculty_id', auth()->user()->id);
                $queriedUsers = User::where('type', '=', 'student')
                ->where('faculty_id', '=', auth()->user()->id)
                ->get();
                return view('data_mhs', data: [
                    'queriedUsers' => $queriedUsers,
                    'majors' => Major::where('faculty_id', '=', auth()->user()->faculty_id)->get()
                ]);

            case 'major':
                $queriedUsers = User::where('type', '=', 'student')
                ->where('major_id', '=', auth()->user()->id)
                ->get();
                return view('data_mhs', ['queriedUsers' => $queriedUsers]);
        }
    }

    /**
     * Display queried/searched users.
     */
    public function search(Request $request)
    {


        switch (auth()->user()->organizationDetails()->value('organization_level'))
        {
            case 'university':
                $queriedUsers = User::when($request->faculty_id, function ($query, $facultyId) {
                    $query->where('faculty_id', '=', $facultyId);
                })->when($request->major_id, function ($query, $majorId) {
                    $query->where('major_id', '=', $majorId);
                })->when($request->search_term, function ($query, $searchTerm) {
                    $query->where('name', 'LIKE', '%'.$searchTerm.'%');
                })->where('type', '=', 'student')
                ->get();

                Session::flash('faculty_id', $request->faculty_id);
                Session::flash('major_id', $request->major_id);
                Session::flash('search_term', $request->search_term);

                return view('data_mhs', [
                    'queriedUsers' => $queriedUsers,
                    'faculties' => Faculty::all(),
                    'majors' => Major::all(),
                ]);

            case 'faculty':
                $queriedUsers = User::where('faculty_id', '=', auth()->user()->faculty_id)
                ->when($request->major_id, function ($query, $majorId) {
                    $query->where('major_id', '=', $majorId);
                })->when($request->search_term, function ($query, $searchTerm) {
                    $query->where('name', 'LIKE', '%'.$searchTerm.'%');
                })->where('type', '=', 'student')
                ->get();

                Session::flash('faculty_id', auth()->user()->faculty_id);
                Session::flash('major_id', $request->major_id);
                Session::flash('search_term', $request->search_term);

                return view('data_mhs', [
                    'queriedUsers' => $queriedUsers,
                    'majors' => Major::where('faculty_id', '=', auth()->user()->faculty_id)->get()
                ]);

            case 'major':
                $queriedUsers = User::where('faculty_id', '=', auth()->user()->faculty_id)
                ->where('major_id', '=', auth()->user()->major_id)
                ->when($request->search_term, function ($query, $searchTerm) {
                    $query->where('name', 'LIKE', '%'.$searchTerm.'%');
                })->where('type', '=', 'student')
                ->get();

                Session::flash('faculty_id', auth()->user()->faculty_id);
                Session::flash('major_id', auth()->user()->major_id);
                Session::flash('search_term', $request->search_term);

                return view('data_mhs', ['queriedUsers' => $queriedUsers]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $faculties = Faculty::orderBy('name')->get(['id', 'name'])->where('name', '!=', 'Any');
        $majors = Major::orderBy('name')->get(['id', 'name', 'faculty_id'])->where('name', '!=', 'Any');
        return view('auth.register', [
            'faculties' => $faculties,
            'majors' => $majors,
        ]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class, 'ends_with:@student.unud.ac.id'],
            'nim' => ['required', 'string', 'max:255'],
            'student_proof' => ['required', 'file', 'extensions:pdf'],
            'password' => ['required', Rules\Password::defaults()], // add 'confirmed' if you want password confirmation
            'phone' => ['required'],
            'faculty_id' => [
                'required',
                Rule::exists('faculties', 'id')->whereNot('name', 'Any'),
            ],
            'major_id' => [
                'required',
                Rule::exists('majors', 'id')->where('faculty_id', $request->faculty_id)
            ],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'faculty_id' => $request->faculty_id,
            'major_id' => $request->major_id,
        ]);

        StudentDetails::create([
            'nim' => $request->nim,
            'student_proof' => $request->file('student_proof')->storeAs('student_proofs', 'student_proof-' . $request->nim . '.pdf'),
            'verified_by_major' => false,
            'user_id' => $user->id,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }

    /**
     * Update the specified resource in storage.
     */
    public function verifyStudentProof(Request $request, string $id)
    {
        $affected = User::where('id', '=', $id)
        ->update(['verified_by_major' => true]);

        return redirect()->back();
    }

    public function unverifyStudentProof(Request $request, string $id)
    {
        $affected = User::where('id', '=', $id)
        ->update(['verified_by_major' => false]);

        return redirect()->back();
    }
}
