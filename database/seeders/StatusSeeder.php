<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            [
                'nama_status' => 'Bekerja',
            ],
            [
                'nama_status' => 'Belum Bekerja',
            ],
            [
                'nama_status' => 'Lanjut Kuliah',
            ],
        ]);
    }
}
