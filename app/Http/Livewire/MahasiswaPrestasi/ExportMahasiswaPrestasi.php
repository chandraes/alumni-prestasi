<?php

namespace App\Http\Livewire\MahasiswaPrestasi;

use Livewire\Component;
use App\Models\MahasiswaPrestasi;
use App\Models\JurusanProdi;
use App\Exports\MahasiswaPrestasiExport;
use App\Exports\MahasiswaPrestasiJurusanExport;
use Excel;


class ExportMahasiswaPrestasi extends Component
{
    public $jurusan, $jurusan_prodi;

    public function render()
    {
        $this->jurusan = JurusanProdi::all();
        return view('livewire.mahasiswa-prestasi.export-mahasiswa-prestasi');
    }

    public function export()
    {
        if (empty($this->jurusan_prodi)) {

            return (new MahasiswaPrestasiExport)->download('MahasiswaPrestasi.xlsx');

        }else {
            
            return (new MahasiswaPrestasiJurusanExport($this->jurusan_prodi))->download('MahasiswaPrestasi.xlsx');
        }
        
        
    }
}
