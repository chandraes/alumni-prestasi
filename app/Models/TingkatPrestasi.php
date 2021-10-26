<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TingkatPrestasi extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'tingkat_prestasi';

    public function MahasiswaPrestasi()
    {
        return $this->hasMany(MahasiswaPrestasi::class);
    }
}
