<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::upsert([
            ['name' => 'super_admin'],
            ['name' => 'organisasi'], // buat organisasi yg bikin acara
            ['name' => 'panitia_inti'],
            ['name' => 'panitia_ketua'],
            ['name' => 'panitia_wakil_ketua'],
            ['name' => 'panitia_bendahara'],
            ['name' => 'panitia_sekretaris'],
            ['name' => 'panitia_koordinator_divisi'],
            ['name' => 'panitia_anggota_divisi'],
        ],
            ['id', 'name']
        );
    }
}
