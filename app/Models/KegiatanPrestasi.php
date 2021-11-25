<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanPrestasi extends Model
{
    use HasFactory;

    public $fillable = [
        'nama_kegiatan'
    ];

    public function MahasiswaPrestasi()
    {
        return $this->hasMany(MahasiswaPrestasi::class);
    }
}
