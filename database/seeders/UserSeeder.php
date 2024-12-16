<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StudentDetails;
use App\Models\OrganizationDetails;
use App\Models\Faculty;
use App\Models\Major;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Organisasi
            // Tingkat Universitas
        $user = User::factory()->create([
            'name' => 'Badan Eksekutif Mahasiswa Universitas Udayana',
            'email' => 'bem@ubud.ac.id',
            'phone' => '0812345678',
            'password' => Hash::make('password'),
        ]);
        OrganizationDetails::create([
            'organization_level' => 'university',
            'faculty_id' => Faculty::where('name', '=', 'Any')->value('id'),
            'major_id' => Major::where('name', '=', 'Any')->value('id'),
            'user_id' => $user->id,
        ]);


            // Tingkat Fakultas
        $user = User::factory()->create([
            'name' => 'Senat Mahasiswa Fakultas Ilmu Budaya',
            'email' => 'sfib@ubud.ac.id',
            'phone' => '0812345678',
            'password' => Hash::make('password'),
        ]);
        OrganizationDetails::create([
            'organization_level' => 'faculty',
            'faculty_id' => Faculty::where('name', '=', 'Ilmu Budaya')->value('id'),
            'major_id' => Major::where('name', '=', 'Any')->value('id'),
            'user_id' => $user->id,
        ]);

        $user = User::factory()->create([
            'name' => 'Badan Eksekutif Mahasiswa Fakultas Kedokteran',
            'email' => 'bemfk@ubud.ac.id',
            'phone' => '0812345678',
            'password' => Hash::make('password'),
        ]);
        OrganizationDetails::create([
            'organization_level' => 'faculty',
            'faculty_id' => Faculty::where('name', '=', 'Kedokteran')->value('id'),
            'major_id' => Major::where('name', '=', 'Any')->value('id'),
            'user_id' => $user->id,
        ]);

        $user = User::factory()->create([
            'name' => 'Badan Eksekutif Mahasiswa Fakultas Hukum',
            'email' => 'bemfh@ubud.ac.id',
            'phone' => '0812345678',
            'password' => Hash::make('password'),
        ]);
        OrganizationDetails::create([
            'organization_level' => 'faculty',
            'faculty_id' => Faculty::where('name', '=', 'Hukum')->value('id'),
            'major_id' => Major::where('name', '=', 'Any')->value('id'),
            'user_id' => $user->id,
        ]);

        $user = User::factory()->create([
            'name' => 'Badan Eksekutif Mahasiswa Fakultas Teknik',
            'email' => 'bemft@ubud.ac.id',
            'phone' => '0812345678',
            'password' => Hash::make('password'),
        ]);
        OrganizationDetails::create([
            'organization_level' => 'faculty',
            'faculty_id' => Faculty::where('name', '=', 'Teknik')->value('id'),
            'major_id' => Major::where('name', '=', 'Any')->value('id'),
            'user_id' => $user->id,
        ]);

        $user = User::factory()->create([
            'name' => 'Badan Eksekutif Mahasiswa Fakultas Pertanian',
            'email' => 'bemfp@ubud.ac.id',
            'phone' => '0812345678',
            'password' => Hash::make('password'),
        ]);
        OrganizationDetails::create([
            'organization_level' => 'faculty',
            'faculty_id' => Faculty::where('name', '=', 'Pertanian')->value('id'),
            'major_id' => Major::where('name', '=', 'Any')->value('id'),
            'user_id' => $user->id,
        ]);

        $user = User::factory()->create([
            'name' => 'Badan Eksekutif Mahasiswa Fakultas Ekonomi dan Bisnis',
            'email' => 'bemfeb@ubud.ac.id',
            'phone' => '0812345678',
            'password' => Hash::make('password'),
        ]);
        OrganizationDetails::create([
            'organization_level' => 'faculty',
            'faculty_id' => Faculty::where('name', '=', 'Ekonomi dan Bisnis')->value('id'),
            'major_id' => Major::where('name', '=', 'Any')->value('id'),
            'user_id' => $user->id,
        ]);

        $user = User::factory()->create([
            'name' => 'Badan Eksekutif Mahasiswa Fakultas Peternakan',
            'email' => 'bemfapet@ubud.ac.id',
            'phone' => '0812345678',
            'password' => Hash::make('password'),
        ]);
        OrganizationDetails::create([
            'organization_level' => 'faculty',
            'faculty_id' => Faculty::where('name', '=', 'Peternakan')->value('id'),
            'major_id' => Major::where('name', '=', 'Any')->value('id'),
            'user_id' => $user->id,
        ]);

        $user = User::factory()->create([
            'name' => 'Badan Eksekutif Mahasiswa Fakultas Matematika dan Ilmu Pengetahuan Alam',
            'email' => 'bemfmipa@ubud.ac.id',
            'phone' => '0812345678',
            'password' => Hash::make('password'),
        ]);
        OrganizationDetails::create([
            'organization_level' => 'faculty',
            'faculty_id' => Faculty::where('name', '=', 'Matematika dan Ilmu Pengetahuan Alam')->value('id'),
            'major_id' => Major::where('name', '=', 'Any')->value('id'),
            'user_id' => $user->id,
        ]);

        $user = User::factory()->create([
            'name' => 'Badan Eksekutif Mahasiswa Fakultas Kedokteran Hewan',
            'email' => 'bemfkh@ubud.ac.id',
            'phone' => '0812345678',
            'password' => Hash::make('password'),
        ]);
        OrganizationDetails::create([
            'organization_level' => 'faculty',
            'faculty_id' => Faculty::where('name', '=', 'Kedokteran Hewan')->value('id'),
            'major_id' => Major::where('name', '=', 'Any')->value('id'),
            'user_id' => $user->id,
        ]);

        $user = User::factory()->create([
            'name' => 'Badan Eksekutif Mahasiswa Teknologi Pertanian',
            'email' => 'bemftp@ubud.ac.id',
            'phone' => '0812345678',
            'password' => Hash::make('password'),
        ]);
        OrganizationDetails::create([
            'organization_level' => 'faculty',
            'faculty_id' => Faculty::where('name', '=', 'Teknologi Pertanian')->value('id'),
            'major_id' => Major::where('name', '=', 'Any')->value('id'),
            'user_id' => $user->id,
        ]);

        $user = User::factory()->create([
            'name' => 'Badan Eksekutif Mahasiswa Fakultas Pariwisata',
            'email' => 'bemfpar@ubud.ac.id',
            'phone' => '0812345678',
            'password' => Hash::make('password'),
        ]);
        OrganizationDetails::create([
            'organization_level' => 'faculty',
            'faculty_id' => Faculty::where('name', '=', 'Pariwisata')->value('id'),
            'major_id' => Major::where('name', '=', 'Any')->value('id'),
            'user_id' => $user->id,
        ]);

        $user = User::factory()->create([
            'name' => 'Badan Eksekutif Mahasiswa Fakultas Ilmu Sosial dan Ilmu Politik',
            'email' => 'bemfisip@ubud.ac.id',
            'phone' => '0812345678',
            'password' => Hash::make('password'),
        ]);
        OrganizationDetails::create([
            'organization_level' => 'faculty',
            'faculty_id' => Faculty::where('name', '=', 'Ilmu Sosial dan Ilmu Politik')->value('id'),
            'major_id' => Major::where('name', '=', 'Any')->value('id'),
            'user_id' => $user->id,
        ]);


        // Tingkat Prodi
        $user = User::factory()->create(attributes: [
            'name' => 'Himpunan Mahasiswa Biologi',
            'email' => 'himabio@ubud.ac.id',
            'phone' => '0812345678',
            'password' => Hash::make('password')
        ]);
        OrganizationDetails::create([
            'organization_level' => 'major',
            'faculty_id' => Faculty::where('name', '=','Matematika dan Ilmu Pengetahuan Alam')->value('id'),
            'major_id' => Major::where('name', '=', 'Biologi')->value('id'),
            'user_id' => $user->id,
        ]);

        $user = User::factory()->create([
            'name' => 'Himpunan Mahasiswa Informatika',
            'email' => 'himaif@ubud.ac.id',
            'phone' => '0812345678',
            'password' => Hash::make(value: 'password'),
        ]);
        OrganizationDetails::create([
            'organization_level' => 'major',
            'faculty_id' => Faculty::where('name', '=','Matematika dan Ilmu Pengetahuan Alam')->value('id'),
            'major_id' => Major::where('name', '=', 'Informatika')->value('id'),
            'user_id' => $user->id,
        ]);

    }
}
