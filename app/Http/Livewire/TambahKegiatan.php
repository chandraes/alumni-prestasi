<?php

namespace App\Http\Livewire;

use App\Models\KegiatanPrestasi;
use Livewire\Component;

class TambahKegiatan extends Component
{

    public $nama_kegiatan;

    protected $rules = [
        'nama_kegiatan' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.tambah-kegiatan');
    }

    public function store()
    {
        $this->validate();

        KegiatanPrestasi::create([
            'nama_kegiatan' => $this->nama_kegiatan,
        ]);

        session()->flash('message', 'Data Berhasil Ditambahkan...');
        $this->reset(['nama_kegiatan']);
        return redirect()->to('master/kegiatan');
    }
}
