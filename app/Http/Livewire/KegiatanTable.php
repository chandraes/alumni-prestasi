<?php

namespace App\Http\Livewire;

use App\Models\KegiatanPrestasi;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\Column;


class KegiatanTable extends LivewireDatatable
{
    public $model = KegiatanPrestasi::class;

   
    public function builder()
    {
      
        return KegiatanPrestasi::query();
    }

    public function columns()
    {
        return [
            Column::name('nama_kegiatan')->editable(),
            Column::callback('id', function($id){
                return view('livewire.datatables.delete', ['value' =>$id]);
            })->label('Action')->alignCenter(),
        ];
        
    }
}