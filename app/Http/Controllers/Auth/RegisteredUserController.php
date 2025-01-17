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
use Illuminate\Support\Facades\Storage;

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
                $queriedUsers = User::join('student_details', 'users.id', '=', 'student_details.user_id')
                ->select('users.*', 'student_details.nim', 'student_details.student_proof', 'student_details.verified_by_major')
                ->where('type', '=', 'student')
                ->get();
                return view('data_mhs', [
                    'queriedUsers' => $queriedUsers,
                    'faculties' => Faculty::all(),
                    'majors' => Major::all(),
                ]);

            case 'faculty':
                Session::flash('faculty_id', auth()->user()->id);
                $queriedUsers = User::join('student_details', 'users.id', '=', 'student_details.user_id')
                ->select('users.*', 'student_details.nim', 'student_details.student_proof', 'student_details.verified_by_major')
                ->where('users.type', '=', 'student')
                ->where('users.faculty_id', '=', auth()->user()->faculty_id)
                ->get();

                return view('data_mhs', data: [
                    'queriedUsers' => $queriedUsers,
                    'majors' => Major::where('faculty_id', '=', auth()->user()->faculty_id)->get()
                ]);

            case 'major':
                $queriedUsers = User::join('student_details', 'users.id', '=', 'student_details.user_id')
                ->select('users.*', 'student_details.nim', 'student_details.student_proof', 'student_details.verified_by_major')
                ->where('major_id', '=', auth()->user()->major_id)
                ->where('type', '=', 'student')
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
                $queriedUsers = User::join('student_details', 'users.id', '=', 'student_details.user_id')
                ->select('users.*', 'student_details.nim', 'student_details.student_proof', 'student_details.verified_by_major')
                ->when($request->faculty_id, function ($query, $facultyId) {
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
                    'currentTab' => $request->tab,
                ]);

            case 'faculty':
                $queriedUsers = User::join('student_details', 'users.id', '=', 'student_details.user_id')
                ->select('users.*', 'student_details.nim', 'student_details.student_proof', 'student_details.verified_by_major')
                ->where('users.faculty_id', '=', auth()->user()->faculty_id)
                ->when($request->major_id, function ($query, $majorId) {
                    $query->where('users.major_id', '=', $majorId);
                })->when($request->search_term, function ($query, $searchTerm) {
                    $query->where('users.name', 'LIKE', '%'.$searchTerm.'%');
                })->where('users.type', '=', 'student')
                ->get();

                Session::flash('faculty_id', auth()->user()->faculty_id);
                Session::flash('major_id', $request->major_id);
                Session::flash('search_term', $request->search_term);

                return view('data_mhs', [
                    'queriedUsers' => $queriedUsers,
                    'currentTab' => $request->tab,
                    'majors' => Major::where('faculty_id', '=', auth()->user()->faculty_id)->get()
                ]);

            case 'major':
                $queriedUsers = User::join('student_details', 'users.id', '=', 'student_details.user_id')
                ->select('users.*', 'student_details.nim', 'student_details.student_proof', 'student_details.verified_by_major')
                ->where('users.faculty_id', '=', auth()->user()->faculty_id)
                ->where('users.major_id', '=', auth()->user()->major_id)
                ->when($request->search_term, function ($query, $searchTerm) {
                    $query->where('users.name', 'LIKE', '%'.$searchTerm.'%');
                })->where('users.type', '=', 'student')
                ->get();

                Session::flash('faculty_id', auth()->user()->faculty_id);
                Session::flash('major_id', auth()->user()->major_id);
                Session::flash('search_term', $request->search_term);

                return view('data_mhs', [
                    'queriedUsers' => $queriedUsers,
                    'currentTab' => $request->tab,
                ]);
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
        $studentDetails = StudentDetails::where('user_id', '=', $id);
        $affected = $studentDetails->update(['verified_by_major' => 'verified']);

        return back(303);
    }

    public function rejectStudentProof(Request $request, string $id)
    {
        $studentDetails = StudentDetails::where('user_id', '=', $id);
        $affected = $studentDetails->update(['verified_by_major' => 'rejected']);

        return back(303);
    }


    /**
     * Download student details
     */
    public function downloadStudentDetails(Request $request, $id)
    {
        $student = User::where('id', '=', $request->route('id'))->first();
        if (Auth::user()->major_id == $student->major_id) {
            $studentDetails = StudentDetails::where('user_id', '=', $id);
            return Storage::download($studentDetails->value('student_proof'));
        } else {
            abort(403, "Access denied");
            return redirect('errors/403');
        }
    }
}
