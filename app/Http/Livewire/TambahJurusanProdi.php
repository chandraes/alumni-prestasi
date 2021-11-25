<?php

namespace App\Http\Livewire;

use App\Models\JurusanProdi;
use Livewire\Component;

class TambahJurusanProdi extends Component
{

    public $kode, $nama_jurusan_prodi, $jenjang, $feeder_id;

    protected $rules = [
        'kode' => 'required|numeric|unique:jurusan_prodis,kode',
        'nama_jurusan_prodi' => 'required|string',
        'jenjang' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.tambah-jurusan-prodi');
    }

    public function store()
    {
        $this->validate();

        JurusanProdi::create([
            'kode' => $this->kode,
            'nama_jurusan_prodi' => $this->nama_jurusan_prodi,
            'jenjang' => $this->jenjang,
            'feeder_id' => $this->feeder_id
        ]);

        session()->flash('message', 'Data Berhasil Ditambahkan...');
        $this->reset(['kode', 'nama_jurusan_prodi', 'jenjang', 'feeder_id']);
        return redirect()->to('master/jurusan-prodi');
    }
}
