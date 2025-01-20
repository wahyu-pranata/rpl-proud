<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventDivision;
use App\Models\EventTimeline;
use App\Models\EventUser;
use App\Models\Invitation;
use App\Models\Role;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'group_chat_link' => ['required', 'string'],
            'description' => ['required', 'string'],
            'start_date' => ['required', 'date'],
            'end_date' => ['required', 'date'],
            'agenda_names' => ['required'],
            'agenda_names.*' => ['required', 'string'],
            'agenda_dates' => ['required'],
            'agenda_dates.*' => ['required', 'date'],
            'event_divisions' => ['required'],
            'event_divisions.*' => ['required', 'string'],
            'image_link' => ['required', 'file'],
            'job_description' => ['required', 'file'],
        ]);

        if ($user->type == "organization") {
            try {
                $createdEvent = Event::create([
                    'name' => $request->name,
                    'group_chat_link' => $request->group_chat_link,
                    'description' => $request->description,
                    'start_date' => $request->start_date,
                    'end_date' => $request->end_date,
                    'image_link' => $request->file('image_link')->store('event_posters'),
                    'job_description' => $request->file('job_description')->store('job_descriptions'),
                    'faculty_id' => $user->faculty_id,
                    'major_id' => $user->major_id,
                ]);

                foreach ($request->agenda_names as $index => $agenda_name) {
                    EventTimeline::create([
                        'name' => $agenda_name,
                        'date' => $request->agenda_dates[$index],
                        'event_id' => $createdEvent->id,
                    ]);
                }

                foreach ($request->event_divisions as $index => $eventDivision) {
                    if ($eventDivision == 'Organisasi' || $eventDivision == 'Inti') {
                        continue;
                    }
                    EventDivision::create([
                        'name' => $eventDivision,
                        'event_id' => $createdEvent->id,
                    ]);
                }

                // Create divisi 'organisasi' dan divisi 'inti'
                $createdEventDivision = EventDivision::create([
                    'name' => 'Organisasi',
                    'event_id' => $createdEvent->id
                ]);

                EventDivision::create([
                    'name' => 'Inti',
                    'event_id' => $createdEvent->id,
                ]);

                $createdEventUser = EventUser::create([
                    'status' => 'Aktif',
                    'user_id' => $user->id,
                    'event_id' => $createdEvent->id,
                ]);

                $organization_role_id = Role::where('name', '=', 'organisasi')->value('id');

                $createdEventUser->eventDivisions()->attach($createdEventDivision->id);
                $createdEventUser->roles()->attach($organization_role_id);

                /**
                 * Tables affected:
                 * - events
                 * - event_users
                 * - event_divisions
                 * - event_user_roles
                 * - event_division_users
                 * - event_timelines
                 *
                 * */

                return redirect(route('dashboard'));
            } catch (QueryException $queryException) {
                dd($queryException->getMessage());
            }
        }

        return 400;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {
        $eventModel = Event::where('id', '=', $id)->first('*');
        $eventTimelineModels  = $eventModel->timelines()->get();
        $eventDivisionModels  = $eventModel->divisions()->get();
        $invitations = Invitation::with(['role', 'user.studentDetails', 'eventDivision'])->where('event_id', '=', $eventModel->id)->get();

        return view('editproker', [
            'eventId' => $eventModel->id,
            'eventName' => $eventModel->name,
            'eventGroupChatLink' => $eventModel->group_chat_link,
            'eventDescription' => $eventModel->description,
            'eventStartDate' => date('Y-m-d', strtotime($eventModel->start_date)),
            'eventEndDate' => date('Y-m-d', strtotime($eventModel->end_date)),
            'eventImageLink' => $eventModel->image_link,
            'eventJobDescription' => $eventModel->job_description,
            'eventTimelines' => $eventTimelineModels,
            'eventDivisions' => $eventDivisionModels,
            'eventInvitations' => $invitations,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = Auth::user();
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'group_chat_link' => ['required', 'string'],
            'description' => ['required', 'string'],
            'start_date' => ['required', 'date'],
            'end_date' => ['required', 'date'],
            'agenda_names' => ['required'],
            'agenda_names.*' => ['required', 'string'],
            'agenda_dates' => ['required'],
            'agenda_dates.*' => ['required', 'date'],
            'event_divisions' => ['required'],
            'event_divisions.*' => ['required', 'string'],
            'image_link' => ['file', 'nullable'],
            'job_description' => ['file', 'nullable'],
        ]);

        if ($user->type == "organization") {
            try {
                $oldEventLogoPath = Event::where('id', '=', $id)->value('image_link');
                $oldJobdescPath = Event::where('id', '=', $id)->value('job_description');

                $event = Event::find($id);

                $event->update([
                    'name' => $request->name,
                    'group_chat_link' => $request->group_chat_link,
                    'description' => $request->description,
                    'start_date' => $request->start_date,
                    'end_date' => $request->end_date,
                    'faculty_id' => $user->faculty_id,
                    'major_id' => $user->major_id,
                ]);

                // Update logo panitia
                if ($request->image_link != null) {
                    $event->update([
                        'image_link' => $request->file('image_link')->store('event_posters'),
                    ]);
                    Storage::delete($oldEventLogoPath);
                }

                // Update job description
                if ($request->job_description != null) {
                    $event->update([
                        'job_description' => $request->file('job_description')->store('job_descriptions'),
                    ]);
                    Storage::delete($oldJobdescPath);
                }

                // Update Timelines
                $oldEventTimelines = $event->timelines;
                foreach ($oldEventTimelines as $timeline) {
                    $timeline->delete();
                }

                foreach ($request->agenda_names as $index => $agenda_name) {
                    EventTimeline::create([
                        'name' => $agenda_name,
                        'date' => $request->agenda_dates[$index],
                        'event_id' => $event->id,
                    ]);
                }

                // Update divisi/sie
                foreach ($request->event_divisions as $index => $eventDivision) {
                    if ($eventDivision == 'Organisasi' || $eventDivision == 'Inti') {
                        continue;
                    }

                    $divisionExists = EventDivision::where('event_id', '=', $event->id)
                        ->where('name', '=', $eventDivision)
                        ->exists();

                    if ($divisionExists) {
                        continue;
                    }

                    EventDivision::create([
                        'name' => $eventDivision,
                        'event_id' => $event->id,
                    ]);
                }

                // Delete divisions that were not included in request (except 'inti' and 'organisasi')
                $existingDivisions = EventDivision::where('event_id', '=', $event->id)->get('*');
                foreach ($existingDivisions as $division) {
                    if ($division->name == 'Organisasi' || $division->name == 'Inti') {
                        continue;
                    }

                    if (!in_array($division->name, $request->event_divisions)) {
                        $division->delete();
                    }
                }



                /**
                 * Tables affected:
                 * - events
                 * - event_users
                 * - event_divisions
                 * - event_user_roles
                 * - event_division_users
                 * - event_timelines
                 *
                 * */

                return back();
            } catch (QueryException $queryException) {
                dd($queryException->getMessage());
            }
        }

        return 400;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function getLogo(Request $request, $id)
    {
        return Storage::download(Event::where('id', '=', $id)->value('image_link'));
    }

    public function getJobdesc(Request $request, $id)
    {
        return Storage::download(Event::where('id', '=', $id)->value('job_description'));
    }
}