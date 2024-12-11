<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\FacultyMajorSeeder;
use Database\Seeders\UserSeeder;

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
    }
}
