<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaPrestasi extends Model
{
    use HasFactory;

    public $fillable = [
        'nama',
        'nim',
        'no_hp',
        'jurusan_prodi_id',
        'kegiatan_id',
        'jenis_prestasi_id',
        'tingkat_prestasi_id',
        'waktu',
        'tempat',
        'website_penyelenggara',
        'jumlah_peserta',
        'nama_prestasi',
        'penyelenggara',
        'peringkat',
        'undangan_path',
        'surat_tugas_path',
        'sertifikat_path',
    ];

    public function jurusan()
    {
        return $this->hasOne(JurusanProdi::class, 'id', 'jurusan_prodi_id');
    }

    public function kegiatan()
    {
        return $this->hasOne(KegiatanPrestasi::class, 'id', 'kegiatan_id');
    }
    public function tingkat_prestasi()
    {
        return $this->hasOne(TingkatPrestasi::class, 'id', 'tingkat_prestasi_id');
    }

    public function jenis_prestasi()
    {
        return $this->hasOne(JenisPrestasi::class, 'id', 'jenis_prestasi_id');
    }
}
