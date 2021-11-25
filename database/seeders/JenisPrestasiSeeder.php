<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisPrestasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis_prestasi')->insert([
            [
                'id' => 1,
                'nama_jenis_prestasi' => 'Sains',
            ],
            [
                'id' => 2,
                'nama_jenis_prestasi' => 'Seni',
            ],
            [
                'id' => 3,
                'nama_jenis_prestasi' => 'Olahraga',
            ],
            [
                'id' => 9,
                'nama_jenis_prestasi' => 'Lainnya',
            ],
        ]);
    }
}
