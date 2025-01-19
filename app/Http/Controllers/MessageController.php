<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EventUser;
use App\Models\Invitation;
use App\Models\MessageAttachment;
use App\Models\User;
use App\Models\Role;
use App\Models\Message;
use Illuminate\Database\Eloquent\Builder;
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

    public function storeInvitation(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'body' => ['required', 'string'],
            'attachments' => ['nullable'],
            'attachments.*' => ['file', 'nullable'],
            'target_user_email' => ['required', 'email'],
            'event_division_id' => ['required', 'integer'],
            'role_name' => ['required', 'string'],
        ]);

        if ($user->type == "organization") {
            try {
                $createdMessage = Message::create([
                    'target_level' => 'individual',
                    'type' => 'invitation',
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

                // Cek panitia koor/inti sebelumnya. Kalau ada, hapus dari tabel event_users
                $roleId = Role::where('name', '=', $request->role_name)->value('id');

                $oldEventUser = EventUser::where('event_id', '=', $request->event_id)
                ->whereHas('eventDivisions', function (Builder $query) use ($request) {
                    $query->where('event_divisions.id', '=', $request->event_division_id);
                })
                ->whereHas('roles', function (Builder $query) use ($roleId) {
                    $query->where('roles.id', '=', $roleId);
                });

                if ($oldEventUser->exists()) {
                    $oldEventUser->first()->delete();
                }

                // Check for old invitations
                $oldInvitation = Invitation::where('role_id', '=', $roleId)
                ->where('event_id', '=', $request->event_id)
                ->where('event_division_id', '=', $request->event_division_id);

                if ($oldInvitation->exists()) {
                    $oldInvitation->first()->delete();
                }

                Invitation::create([
                    'status' => 'pending',
                    'target_user_id' => User::where('email', '=', $request->target_user_email)->value('id'),
                    'message_id' => $createdMessage->id,
                    'event_id' => $request->event_id,
                    'event_division_id' => $request->event_division_id,
                    'role_id' => $roleId,
                ]);

                return 201;

            } catch ( QueryException $queryException) {
                dd($queryException->getMessage());
            }
        }

        return 400;
    }


}
