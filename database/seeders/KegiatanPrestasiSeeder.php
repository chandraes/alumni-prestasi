<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KegiatanPrestasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kegiatan_prestasis')->insert([
            [
                'nama_kegiatan' => 'Pertukaran Mahasiswa',
            ],
            [
                'nama_kegiatan' => 'Magang',
            ],
            [
                'nama_kegiatan' => 'Wira Usaha',
            ],
            [
                'nama_kegiatan' => 'Asisten Mengajar',
            ],
            [
                'nama_kegiatan' => 'Penelitian',
            ],
            [
                'nama_kegiatan' => 'Proyek Independen',
            ],
            [
                'nama_kegiatan' => 'Pengabdian / Wira Desa',
            ],
            [
                'nama_kegiatan' => 'Lomba Nasional / Internasional',
            ],
        ]);
    }
}
