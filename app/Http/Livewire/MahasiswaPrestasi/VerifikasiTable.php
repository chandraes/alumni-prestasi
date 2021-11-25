<?php

namespace App\Http\Livewire\MahasiswaPrestasi;

use App\Models\MahasiswaPrestasi;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\BooleanColumn;

class VerifikasiTable extends LivewireDatatable
{
    public $hideable = 'select';

    public function builder()
    {
        return MahasiswaPrestasi::with('jurusan')
                ->where('verified', 0);
    }
    public function columns()
    {
        return [
            BooleanColumn::name('verified')->alignCenter(),
            Column::name('nim'),
            Column::name('nama'),
            Column::callback(['jurusan.nama_jurusan_prodi', 'jurusan.jenjang'], function($jurusan, $jenjang) {
                $full = $jenjang."-".$jurusan;
                return $full;
            })->label('Jurusan / Prodi')->filterable(),
            Column::name('no_hp')->label('Handphone'),
          
        ];
    }
}