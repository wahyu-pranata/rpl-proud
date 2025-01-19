<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Event;
use App\Models\EventDivision;
use App\Models\EventDivisionUser;
use App\Models\EventTimeline;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\FacultyMajorSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\RoleSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $facultyMajorSeeder = new FacultyMajorSeeder();
        $facultyMajorSeeder->run();

        $userSeeder = new UserSeeder();
        $userSeeder->run();

        $RoleSeeder = new RoleSeeder();
        $RoleSeeder->run();

        // $event = Event::create([
        //     'name'=>'PORSENI',
        //     'description'=>'Proker Neraka',
        //     'start_date'=>'2066-12-21',
        //     'end_date'=>'2066-12-27',
        //     'image_link'=>'',
        //     'group_chat_link'=>'',
        //     'job_description'=>'',
        //     'faculty_id'=>'1',
        //     'major_id'=>'1',
        // ]);

        // $event_divisions = EventDivision::create([
        //     'name'=>'Inti',
        //     'event_id' => $event->id,
        // ]);

        // $event_division_user = EventDivisionUser::create([
        //     'event_user_id'=>$user->id,
        //     'event_division_id'=>$event_divisions->id,
        // ]);

        // $event_timelines = EventTimeline::create([

        // ]);

    }
}
