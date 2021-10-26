<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'jurusan_prodi_id',
        'angkatan',
        'bulan_wisuda',
        'tahun_wisuda',
        'no_ijazah',
        'status',
        'tempat_bekerja_pertama',
        'gaji_pertama',
        'tempat_bekerja_sekarang',
        'posisi_bagian',
        'tanggal_masuk_kerja',
        'alamat_kantor',
        'website_kantor',
        'alamat',
        'no_hp'
    ];

    public function jurusan_prodi()
    {
        return $this->hasOne(JurusanProdi::class);
    }
}
