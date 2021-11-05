<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'alamat',
        'no_hp',
        'jurusan_prodi_id',
        'angkatan',
        'bulan_wisuda',
        'tahun_wisuda',
        'no_ijazah',
        'ipk',
        'status_id',
        'tempat_bekerja_pertama',
        'penghasilan_pertama_id',
        'tempat_bekerja_sekarang',
        'posisi_bagian',
        'tanggal_masuk_kerja',
        'alamat_kantor',
        'website_kantor',
        'masa_tunggu_id',
        'kesesuaian_bidang',

    ];

    public function jurusan()
    {
        return $this->hasOne(JurusanProdi::class, 'id', 'jurusan_prodi_id');
    }

    public function penghasilan()
    {
        return $this->hasOne(Penghasilan::class, 'id', 'penghasilan_pertama_id');
    }

    public function masa_tunggu()
    {
        return $this->hasOne(MasaTungguKerja::class, 'id', 'masa_tunggu_id');
    }

    public function status()
    {
        return $this->hasOne(Status::class, 'id', 'status_id');
    }
}
