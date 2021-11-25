<?php

namespace App\Http\Livewire\MahasiswaPrestasi;

use Livewire\Component;
use Illuminate\Http\Request;


class ListMahasiswaPrestasi extends Component
{
    public $listMahasiswa;

    public function render()
    {
        
        return view('livewire.mahasiswa-prestasi.list-mahasiswa-prestasi');
    }

    public function getList(Request $request)
    {
        
    }
   
}
