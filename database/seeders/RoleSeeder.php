<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'nama_role' => 'Super Admin',
            ],
            [
                'nama_role' => 'User',
            ],
            [
                'nama_role' => 'Admin Fakultas',
            ],
        ]
        );
    }
}