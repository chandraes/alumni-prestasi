<?php

namespace App\Http\Livewire;

use Livewire\Component;

class JurusanProdiData extends Component
{
    public function render()
    {
        return view('livewire.jurusan-prodi-data');
    }

    public function tambah()
    {
        return redirect()->route('tambah-jurusan-prodi');
    }
}
