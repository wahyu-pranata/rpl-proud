<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\MessageAttachment;
use App\Models\User;
use App\Models\Message;
use App\Models\StudentDetails;
use Illuminate\Auth\Events\Registered;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class MessageController extends Controller
{
    public function storeBroadcast(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'body' => ['required', 'string'],
            'attachments' => ['nullable'],
            'attachments.*' => ['nullable'],
        ]);

        if ($user->type == "organization") {

            try {
                $createdMessage = Message::create([
                    'target_level' => $user->organizationDetails()->value('organization_level'),
                    'type' => 'broadcast',
                    'title' => $request->title,
                    'body' => $request->body,
                    'user_id' => $user->id,
                ]);

                if ($request->file('attachments')) {
                    $i = 0;
                    $attachments = $request->file('attachments');
                    foreach ($attachments as $attachment) {
                        MessageAttachment::create([
                            'path' => $attachment->store('message_attachments'),
                            'message_id' => $createdMessage->id,
                        ]);

                        $i += 1;
                    }
                }

                return 201;

            } catch ( QueryException $queryException) {
                dd($queryException->getMessage());
            }
        }

        return 400;
    }

    public function storeInvitation($request)
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
