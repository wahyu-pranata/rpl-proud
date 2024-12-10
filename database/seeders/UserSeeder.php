<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Faculty;
use App\Models\Major;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'SAIA NO SATU',
            'email' => 'tesris1@example.com',
            'nim' => '2104542003',
            'student_proof' => 'kocak1.pdf',
            'phone' => '08123456789',
            'faculty_id' => Faculty::pluck('id')[0],
            'major_id' => Major::pluck('id')[0],
        ]);

        User::factory()->create([
            'name' => 'MI NO DUA',
            'email' => 'test2@examplu.com',
            'nim' => '2304542132',
            'student_proof' => 'kocak2.pdf',
            'phone' => '08129876543',
            'faculty_id' => Faculty::pluck('id')[1],
            'major_id' => Major::pluck('id')[1]
        ]);
    }
}
