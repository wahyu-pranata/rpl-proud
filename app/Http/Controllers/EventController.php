<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventDivision;
use App\Models\EventTimeline;
use App\Models\EventUser;
use App\Models\Role;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
                    'job_description' => $request->file('job_description')->store('event_posters'),
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
                    EventDivision::create([
                        'name' => $eventDivision,
                        'event_id' => $createdEvent->id,
                    ]);
                }

                $createdEventDivision = EventDivision::create([
                    'name' => 'organisasi',
                    'event_id' => $createdEvent->id
                ]);



                $createdEventUser = EventUser::create([
                    'status' => 'Aktif',
                    'user_id' => $user->id,
                    'event_id' => $createdEvent->id,
                ]);

                $organization_role_id = Role::where('name', '=', 'organization')->value('id');

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

            } catch ( QueryException $queryException) {
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
