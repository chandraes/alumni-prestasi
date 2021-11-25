<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasaTungguKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('masa_tunggu_kerja')->insert([
            [
                'masa_tunggu' => '< 1 Bulan',
            ],
            [
                'masa_tunggu' => '1 - 3 Bulan',
            ],
            [
                'masa_tunggu' => '3 - 6 Bulan',
            ],
            [
                'masa_tunggu' => '6 - 12 bulan',
            ],
            [
                'masa_tunggu' => '> 1 Tahun',
            ],
        ]);
    }
}
