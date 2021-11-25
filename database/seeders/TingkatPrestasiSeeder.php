<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TingkatPrestasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tingkat_prestasi')->insert([
            [
                'id' => 1,
                'nama_tingkat_prestasi' => 'Sekolah',
            ],
            [
                'id' => 2,
                'nama_tingkat_prestasi' => 'Kecamatan',
            ],
            [
                'id' => 3,
                'nama_tingkat_prestasi' => 'Kab/Kota',
            ],
            [
                'id' => 4,
                'nama_tingkat_prestasi' => 'Provinsi',
            ],
            [
                'id' => 5,
                'nama_tingkat_prestasi' => 'Nasional',
            ],
            [
                'id' => 6,
                'nama_tingkat_prestasi' => 'Internasional',
            ],
            [
                'id' => 9,
                'nama_tingkat_prestasi' => 'Lainnya',
            ],
        ]);
    }
}
