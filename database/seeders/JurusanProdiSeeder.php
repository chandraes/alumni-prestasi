<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JurusanProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jurusan_prodis')->insert([
            [
                'feeder_id' => 'ce967ed4-af20-4283-894a-25fbde511b97',
                'kode' => '20201',
                'nama_jurusan_prodi' => 'Teknik Elektro',
                'jenjang' => 'S1'
            ],
            [
                'feeder_id' => '1cd691d4-0773-40bf-b857-c79e073be783',
                'kode' => '21001',
                'nama_jurusan_prodi' => 'Ilmu Teknik',
                'jenjang' => 'S3'
            ],
            [
                'feeder_id' => '9736f30a-3992-42c6-b005-3c10e91afd14',
                'kode' => '21101',
                'nama_jurusan_prodi' => 'Teknik Mesin',
                'jenjang' => 'S2'
            ],
            [
                'feeder_id' => 'f371d293-c602-4b1b-afc5-222081477091',
                'kode' => '21201',
                'nama_jurusan_prodi' => 'Teknik Mesin',
                'jenjang' => 'S1'
            ],
            [
                'feeder_id' => '05eb6093-52ca-4f28-8088-82398983d456',
                'kode' => '22101',
                'nama_jurusan_prodi' => 'Teknik Sipil',
                'jenjang' => 'S2'
            ],
            [
                'feeder_id' => '851e4469-1483-4158-8b7f-65cd62233ef6',
                'kode' => '22201',
                'nama_jurusan_prodi' => 'Teknik Sipil',
                'jenjang' => 'S1'
            ],
            [
                'feeder_id' => '88a3482b-3cc8-4beb-9d48-c3da2f1501bd',
                'kode' => '23201',
                'nama_jurusan_prodi' => 'Teknik Arsitektur',
                'jenjang' => 'S1'
            ],
            [
                'feeder_id' => 'a3b6a695-75fd-4247-aec3-d9ebdabb671b',
                'kode' => '24101',
                'nama_jurusan_prodi' => 'Teknik Kimia',
                'jenjang' => 'S2'
            ],
            [
                'feeder_id' => '1bde2344-501e-493a-92e1-bee0890481a0',
                'kode' => '24201',
                'nama_jurusan_prodi' => 'Teknik Kimia',
                'jenjang' => 'S1'
            ],
            [
                'feeder_id' => '5f93f7d9-eb85-46c1-9714-e00db90938e3',
                'kode' => '31101',
                'nama_jurusan_prodi' => 'Teknik Pertambangan',
                'jenjang' => 'S2'
            ],
            [
                'feeder_id' => 'fa919a76-6f88-46e8-ae56-26bf61f70338',
                'kode' => '31201',
                'nama_jurusan_prodi' => 'Teknik Pertambangan',
                'jenjang' => 'S1'
            ],
            [
                'feeder_id' => '25ca5240-19b3-49aa-a55a-1a59b76c2b63',
                'kode' => '34201',
                'nama_jurusan_prodi' => 'Teknik Geologi',
                'jenjang' => 'S1'
            ],
        ]);
    }
}
