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
            'faculty_id' => Faculty::where('name', '=', 'Any')->value('id'),
            'major_id' => Major::where('name', '=', 'Any')->value('id'),
            'type' => 'organization',
        ]);
        OrganizationDetails::create([
            'organization_level' => 'university',
            'user_id' => $user->id,
        ]);


        // Tingkat Fakultas
        $user = User::factory()->create([
            'name' => 'Senat Mahasiswa Fakultas Ilmu Budaya',
            'email' => 'sfib@ubud.ac.id',
            'phone' => '0812345678',
            'password' => Hash::make('password'),
            'faculty_id' => Faculty::where('name', '=', 'Ilmu Budaya')->value('id'),
            'major_id' => Major::where('name', '=', 'Any')->value('id'),
            'type' => 'organization',
        ]);
        OrganizationDetails::create([
            'organization_level' => 'faculty',
            'user_id' => $user->id,
        ]);

        $user = User::factory()->create([
            'name' => 'Badan Eksekutif Mahasiswa Fakultas Kedokteran',
            'email' => 'bemfk@ubud.ac.id',
            'phone' => '0812345678',
            'password' => Hash::make('password'),
            'faculty_id' => Faculty::where('name', '=', 'Kedokteran')->value('id'),
            'major_id' => Major::where('name', '=', 'Any')->value('id'),
            'type' => 'organization',
        ]);
        OrganizationDetails::create([
            'organization_level' => 'faculty',
            'user_id' => $user->id,
        ]);

        $user = User::factory()->create([
            'name' => 'Badan Eksekutif Mahasiswa Fakultas Hukum',
            'email' => 'bemfh@ubud.ac.id',
            'phone' => '0812345678',
            'password' => Hash::make('password'),
            'faculty_id' => Faculty::where('name', '=', 'Hukum')->value('id'),
            'major_id' => Major::where('name', '=', 'Any')->value('id'),
            'type' => 'organization',
        ]);
        OrganizationDetails::create([
            'organization_level' => 'faculty',
            'user_id' => $user->id,
        ]);

        $user = User::factory()->create([
            'name' => 'Badan Eksekutif Mahasiswa Fakultas Teknik',
            'email' => 'bemft@ubud.ac.id',
            'phone' => '0812345678',
            'password' => Hash::make('password'),
            'faculty_id' => Faculty::where('name', '=', 'Teknik')->value('id'),
            'major_id' => Major::where('name', '=', 'Any')->value('id'),
            'type' => 'organization',
        ]);
        OrganizationDetails::create([
            'organization_level' => 'faculty',
            'user_id' => $user->id,
        ]);

        $user = User::factory()->create([
            'name' => 'Badan Eksekutif Mahasiswa Fakultas Pertanian',
            'email' => 'bemfp@ubud.ac.id',
            'phone' => '0812345678',
            'password' => Hash::make('password'),
            'faculty_id' => Faculty::where('name', '=', 'Pertanian')->value('id'),
            'major_id' => Major::where('name', '=', 'Any')->value('id'),
            'type' => 'organization',
        ]);
        OrganizationDetails::create([
            'organization_level' => 'faculty',
            'user_id' => $user->id,
        ]);

        $user = User::factory()->create([
            'name' => 'Badan Eksekutif Mahasiswa Fakultas Ekonomi dan Bisnis',
            'email' => 'bemfeb@ubud.ac.id',
            'phone' => '0812345678',
            'password' => Hash::make('password'),
            'faculty_id' => Faculty::where('name', '=', 'Ekonomi dan Bisnis')->value('id'),
            'major_id' => Major::where('name', '=', 'Any')->value('id'),
            'type' => 'organization',
        ]);
        OrganizationDetails::create([
            'organization_level' => 'faculty',
            'user_id' => $user->id,
        ]);

        $user = User::factory()->create([
            'name' => 'Badan Eksekutif Mahasiswa Fakultas Peternakan',
            'email' => 'bemfapet@ubud.ac.id',
            'phone' => '0812345678',
            'password' => Hash::make('password'),
            'faculty_id' => Faculty::where('name', '=', 'Peternakan')->value('id'),
            'major_id' => Major::where('name', '=', 'Any')->value('id'),
            'type' => 'organization',
        ]);
        OrganizationDetails::create([
            'organization_level' => 'faculty',
            'user_id' => $user->id,
        ]);

        $user = User::factory()->create([
            'name' => 'Badan Eksekutif Mahasiswa Fakultas Matematika dan Ilmu Pengetahuan Alam',
            'email' => 'bemfmipa@ubud.ac.id',
            'phone' => '0812345678',
            'password' => Hash::make('password'),
            'faculty_id' => Faculty::where('name', '=', 'Matematika dan Ilmu Pengetahuan Alam')->value('id'),
            'major_id' => Major::where('name', '=', 'Any')->value('id'),
            'type' => 'organization',
        ]);
        OrganizationDetails::create([
            'organization_level' => 'faculty',
            'user_id' => $user->id,
        ]);

        $user = User::factory()->create([
            'name' => 'Badan Eksekutif Mahasiswa Fakultas Kedokteran Hewan',
            'email' => 'bemfkh@ubud.ac.id',
            'phone' => '0812345678',
            'password' => Hash::make('password'),
            'faculty_id' => Faculty::where('name', '=', 'Kedokteran Hewan')->value('id'),
            'major_id' => Major::where('name', '=', 'Any')->value('id'),
            'type' => 'organization',
        ]);
        OrganizationDetails::create([
            'organization_level' => 'faculty',
            'user_id' => $user->id,
        ]);

        $user = User::factory()->create([
            'name' => 'Badan Eksekutif Mahasiswa Teknologi Pertanian',
            'email' => 'bemftp@ubud.ac.id',
            'phone' => '0812345678',
            'password' => Hash::make('password'),
            'faculty_id' => Faculty::where('name', '=', 'Teknologi Pertanian')->value('id'),
            'major_id' => Major::where('name', '=', 'Any')->value('id'),
            'type' => 'organization',
        ]);
        OrganizationDetails::create([
            'organization_level' => 'faculty',
            'user_id' => $user->id,
        ]);

        $user = User::factory()->create([
            'name' => 'Badan Eksekutif Mahasiswa Fakultas Pariwisata',
            'email' => 'bemfpar@ubud.ac.id',
            'phone' => '0812345678',
            'password' => Hash::make('password'),
            'faculty_id' => Faculty::where('name', '=', 'Pariwisata')->value('id'),
            'major_id' => Major::where('name', '=', 'Any')->value('id'),
            'type' => 'organization',
        ]);
        OrganizationDetails::create([
            'organization_level' => 'faculty',
            'user_id' => $user->id,
        ]);

        $user = User::factory()->create([
            'name' => 'Badan Eksekutif Mahasiswa Fakultas Ilmu Sosial dan Ilmu Politik',
            'email' => 'bemfisip@ubud.ac.id',
            'phone' => '0812345678',
            'password' => Hash::make('password'),
            'faculty_id' => Faculty::where('name', '=', 'Ilmu Sosial dan Ilmu Politik')->value('id'),
            'major_id' => Major::where('name', '=', 'Any')->value('id'),
            'type' => 'organization',
        ]);
        OrganizationDetails::create([
            'organization_level' => 'faculty',
            'user_id' => $user->id,
        ]);


        // Tingkat Prodi
        $user = User::factory()->create(attributes: [
            'name' => 'Himpunan Mahasiswa Biologi',
            'email' => 'himabio@ubud.ac.id',
            'phone' => '0812345678',
            'password' => Hash::make('password'),
            'faculty_id' => Faculty::where('name', '=', 'Matematika dan Ilmu Pengetahuan Alam')->value('id'),
            'major_id' => Major::where('name', '=', 'Biologi')->value('id'),
            'type' => 'organization',
        ]);
        OrganizationDetails::create([
            'organization_level' => 'major',
            'user_id' => $user->id,
        ]);

        $user = User::factory()->create([
            'name' => 'Himpunan Mahasiswa Informatika',
            'email' => 'himaif@ubud.ac.id',
            'phone' => '0812345678',
            'password' => Hash::make('password'),
            'faculty_id' => Faculty::where('name', '=', 'Matematika dan Ilmu Pengetahuan Alam')->value('id'),
            'major_id' => Major::where('name', '=', 'Informatika')->value('id'),
            'type' => 'organization',
        ]);
        OrganizationDetails::create([
            'organization_level' => 'major',
            'user_id' => $user->id,
        ]);

        $user = User::factory()->create(attributes: [
            'name' => 'Himpunan Mahasiswa Sosiologi',
            'email' => 'himasos@ubud.ac.id',
            'phone' => '0812345678',
            'password' => Hash::make('password'),
            'faculty_id' => Faculty::where('name', '=', 'Ilmu Sosial dan Ilmu Politik')->value('id'),
            'major_id' => Major::where('name', '=', 'Ilmu Sosiologi')->value('id'),
            'type' => 'organization',
        ]);
        OrganizationDetails::create([
            'organization_level' => 'major',
            'user_id' => $user->id,
        ]);

        $user = User::factory()->create([
            'name' => 'Himpunan Mahasiswa Ilmu Komunikasi',
            'email' => 'himanika@ubud.ac.id',
            'phone' => '0812345678',
            'password' => Hash::make('password'),
            'faculty_id' => Faculty::where('name', '=', 'Ilmu Sosial dan Ilmu Politik')->value('id'),
            'major_id' => Major::where('name', '=', 'Ilmu Komunikasi')->value('id'),
            'type' => 'organization',
        ]);
        OrganizationDetails::create([
            'organization_level' => 'major',
            'user_id' => $user->id,
        ]);


        // Students (Ilmu Komunikasi)
        $user = User::factory()->create([
            'name' => 'Komunika Student 1',
            'email' => 'komu1@student.unud.ac.id',
            'phone' => '0812345678',
            'password' => Hash::make('password'),
            'faculty_id' => Faculty::where('name', '=', 'Ilmu Sosial dan Ilmu Politik')->value('id'),
            'major_id' => Major::where('name', '=', 'Ilmu Komunikasi')->value('id'),
            'type' => 'student',
        ]);
        StudentDetails::create([
            'nim' => '2308561001',
            'student_proof' => 'student_proofs/student_proof-2308561001.pdf',
            'verified_by_major' => 'unverified',
            'user_id' => $user->id,
        ]);

        $user = User::factory()->create([
            'name' => 'Komunika Student 2',
            'email' => 'komu2@student.unud.ac.id',
            'phone' => '0812345678',
            'password' => Hash::make('password'),
            'faculty_id' => Faculty::where('name', '=', 'Ilmu Sosial dan Ilmu Politik')->value('id'),
            'major_id' => Major::where('name', '=', 'Ilmu Komunikasi')->value('id'),
            'type' => 'student',
        ]);
        StudentDetails::create([
            'nim' => '2308561002',
            'student_proof' => 'student_proofs/student_proof-2308561002.pdf',
            'verified_by_major' => 'unverified',
            'user_id' => $user->id,
        ]);


        // Students (Ilmu Sosiologi)
        $user = User::factory()->create([
            'name' => 'Sosio Student 1',
            'email' => 'sosio1@student.unud.ac.id',
            'phone' => '0812345678',
            'password' => Hash::make('password'),
            'faculty_id' => Faculty::where('name', '=', 'Ilmu Sosial dan Ilmu Politik')->value('id'),
            'major_id' => Major::where('name', '=', 'Ilmu Sosiologi')->value('id'),
            'type' => 'student',
        ]);
        StudentDetails::create([
            'nim' => '2308561011',
            'student_proof' => 'student_proofs/student_proof-2308561011.pdf',
            'verified_by_major' => 'unverified',
            'user_id' => $user->id,
        ]);

        $user = User::factory()->create([
            'name' => 'Sosio Student 2',
            'email' => 'sosio2@student.unud.ac.id',
            'phone' => '0812345678',
            'password' => Hash::make('password'),
            'faculty_id' => Faculty::where('name', '=', 'Ilmu Sosial dan Ilmu Politik')->value('id'),
            'major_id' => Major::where('name', '=', 'Ilmu Sosiologi')->value('id'),
            'type' => 'student',
        ]);
        StudentDetails::create([
            'nim' => '2308561012',
            'student_proof' => 'student_proofs/student_proof-2308561012.pdf',
            'verified_by_major' => 'unverified',
            'user_id' => $user->id,
        ]);

        // Students (Informatika)
        $user = User::factory()->create([
            'name' => 'Infor Student 1',
            'email' => 'infor1@student.unud.ac.id',
            'phone' => '0812345678',
            'password' => Hash::make('password'),
            'faculty_id' => Faculty::where('name', '=', 'Matematika dan Ilmu Pengetahuan Alam')->value('id'),
            'major_id' => Major::where('name', '=', 'Informatika')->value('id'),
            'type' => 'student',
        ]);
        StudentDetails::create([
            'nim' => '2308561021',
            'student_proof' => 'student_proofs/student_proof-2308561021.pdf',
            'verified_by_major' => 'unverified',
            'user_id' => $user->id,
        ]);

        $user = User::factory()->create([
            'name' => 'Infor Student 2',
            'email' => 'infor2@student.unud.ac.id',
            'phone' => '0812345678',
            'password' => Hash::make('password'),
            'faculty_id' => Faculty::where('name', '=', 'Matematika dan Ilmu Pengetahuan Alam')->value('id'),
            'major_id' => Major::where('name', '=', 'Informatika')->value('id'),
            'type' => 'student',
        ]);
        StudentDetails::create([
            'nim' => '2308561022',
            'student_proof' => 'student_proofs/student_proof-2308561022.pdf',
            'verified_by_major' => 'unverified',
            'user_id' => $user->id,
        ]);

        // Students (Biologi)
        $user = User::factory()->create([
            'name' => 'Bio Student 1',
            'email' => 'bio1@student.unud.ac.id',
            'phone' => '0812345678',
            'password' => Hash::make('password'),
            'faculty_id' => Faculty::where('name', '=', 'Matematika dan Ilmu Pengetahuan Alam')->value('id'),
            'major_id' => Major::where('name', '=', 'Biologi')->value('id'),
            'type' => 'student',
        ]);
        StudentDetails::create([
            'nim' => '2308561031',
            'student_proof' => 'student_proofs/student_proof-2308561031.pdf',
            'verified_by_major' => 'unverified',
            'user_id' => $user->id,
        ]);

        $user = User::factory()->create([
            'name' => 'Bio Student 2',
            'email' => 'bio2@student.unud.ac.id',
            'phone' => '0812345678',
            'password' => Hash::make('password'),
            'faculty_id' => Faculty::where('name', '=', 'Matematika dan Ilmu Pengetahuan Alam')->value('id'),
            'major_id' => Major::where('name', '=', 'Biologi')->value('id'),
            'type' => 'student',
        ]);
        StudentDetails::create([
            'nim' => '2308561032',
            'student_proof' => 'student_proofs/student_proof-2308561032.pdf',
            'verified_by_major' => 'unverified',
            'user_id' => $user->id,
        ]);
    }
}
