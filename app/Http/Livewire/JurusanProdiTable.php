<?php

namespace App\Http\Livewire;

use App\Models\JurusanProdi;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class JurusanProdiTable extends LivewireDatatable
{
    public $model = JurusanProdi::class;

    public function builder()
    {
        return JurusanProdi::query();
    }
    public function columns()
    {
        return [
            // Column::name('feeder_id')->label('Feeder ID')->editable(),  
            Column::name('kode')->label('Kode Jurusan / Prodi')->alignCenter()->editable(),
            Column::name('nama_jurusan_prodi')->label('Nama Jurusan / Prodi')->filterable()->editable(),
            Column::name('jenjang')->alignCenter()->filterable()->editable(),
            Column::callback('id', function($id){
                return view('livewire.datatables.delete', ['value' =>$id]);
            })->label('Action')->alignCenter(),
        ];
    }

    public function delete($id){

        JurusanProdi::find($id)->delete();
        session()->flash('message', 'Data Has Been Deleted..');
   }


}
