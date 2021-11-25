<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenghasilanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('penghasilan')->insert([
            [
                'id' => '11',
                'nama_penghasilan' => 'Kurang dari Rp. 500,000',
            ],
            [
                'id' => '12',
                'nama_penghasilan' => 'Rp. 500,000 - Rp. 999,999',
            ],
            [
                'id' => '13',
                'nama_penghasilan' => 'Rp. 1,000,000 - Rp. 1,999,999',
            ],
            [
                'id' => '14',
                'nama_penghasilan' => 'Rp. 2,000,000 - Rp. 4,999,999',
            ],
            [
                'id' => '15',
                'nama_penghasilan' => 'Rp. 5,000,000 - Rp. 20,000,000',
            ],
            [
                'id' => '16',
                'nama_penghasilan' => 'Lebih dari Rp. 20,000,000',
            ],
        ]);
    }
}
