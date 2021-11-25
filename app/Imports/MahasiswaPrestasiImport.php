<?php

namespace App\Imports;

use App\Models\MahasiswaPrestasi;
use Maatwebsite\Excel\Concerns\ToModel;

class MahasiswaPrestasiImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new MahasiswaPrestasi([
            'nama' => $row[1],
            'nim' => $row[2],
            'jurusan_prodi_id' => $row[3],
            'kegiatan_id' => $row[4],
            'waktu' => $row[5],
            'tempat' => $row[6],
            'prestasi' => $row[6],
        ]);
    }
}
