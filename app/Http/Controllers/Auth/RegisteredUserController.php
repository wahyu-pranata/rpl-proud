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
use Illuminate\Validation\Rules;
use Illuminate\Validation\Rule;
use Illuminate\View\View;
use Storage;

class RegisteredUserController extends Controller
{
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
}
