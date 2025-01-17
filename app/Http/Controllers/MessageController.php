<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Invitation;
use App\Models\MessageAttachment;
use App\Models\User;
use App\Models\Message;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function storeBroadcast(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'body' => ['required', 'string'],
            'attachments' => ['nullable'],
            'attachments.*' => ['file', 'nullable'],
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
        $user = Auth::user();
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'body' => ['required', 'string'],
            'attachments' => ['nullable'],
            'attachments.*' => ['file', 'nullable'],
            'event_id' => ['required'],
            'target_user_email' => ['required', 'email'],
        ]);

        if ($user->type == "organization") {
            try {
                $createdMessage = Message::create([
                    'target_level' => $user->organizationDetails()->value('organization_level'),
                    'type' => 'broadcast',
                    'title' => $request->title,
                    'body' => $request->body,
                    'user_id' => $user->id,
                    'event_id' => $request->event_id
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

                Invitation::create([
                    'status' => 'pending',
                    'target_user_id' => User::where('email', '=', $request->target_user_email),
                    'message_id' => $createdMessage->id,
                    'event_division_id' => $request->event_division_id,
                    'event_id' => $request->event_id,
                ]);

                return 201;

            } catch ( QueryException $queryException) {
                dd($queryException->getMessage());
            }
        }

        return 400;
    }
}
