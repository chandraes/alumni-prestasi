<?php

namespace App\Http\Livewire;

use Livewire\Component;

class KegiatanData extends Component
{
    public function render()
    {
        return view('livewire.kegiatan-data');
    }

    public function tambah()
    {
        return redirect()->route('tambah-kegiatan');
    }
}
