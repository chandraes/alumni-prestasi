<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JurusanProdi extends Model
{
    use HasFactory;

    public $fillable = [
        'feeder_id','kode', 'nama_jurusan_prodi', 'jenjang'
    ];

    public $timestamps = false;
    
    public function mahasiswa_prestasi()
    {
        return $this->belongTo(MahasiswaPrestasi::class, 'id', 'jurusan_prodi_id');
    }
}
