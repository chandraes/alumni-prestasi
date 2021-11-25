<?php

namespace App\Http\Livewire;

use App\Models\Alumni;
use App\Models\MahasiswaPrestasi;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Dashboard extends Component
{
    public $alumnis, $prestasi;
    public $labelAngkatan,$labelJurusan, $jumlahAngkatan, $jumlahJurusan, $bekerja, $sudahBekerja, $lanjutKuliah, $kul;

    public function render()
    {
        $this->prestasi = MahasiswaPrestasi::count();
        $this->alumnis = Alumni::count();
        $alumni = Alumni::groupBy('angkatan')->select('angkatan', DB::raw('count(*) as total, sum(status_id = 1) as bekerja, sum(status_id = 3) as lnjutKuliah'))->get();
        $alumniJurusan = Alumni::join('jurusan_prodis', 'alumnis.jurusan_prodi_id', 'jurusan_prodis.id')
                                ->select(DB::raw('concat(nama_jurusan_prodi, " (", jenjang, ")") as prodi'), DB::raw('count(*) as totalAlumni, sum(status_id = 1) as bekerja, sum(status_id = 3) as ljtKuliah'))
                                ->groupBy('prodi')->get();
        // dd($alumniJurusan);
        foreach ($alumniJurusan as $prodi) {
            $this->labelJurusan[] = $prodi->prodi;
            $this->jumlahJurusan[] = $prodi->totalAlumni;
            $this->bekerja[] = $prodi->bekerja;
            $this->kul[] = $prodi->ljtKuliah;
        }
        foreach ($alumni as $key) {
            $this->labelAngkatan[] = $key->angkatan;
            $this->jumlahAngkatan[] = $key->total;
            $this->sudahBekerja[] = $key->bekerja;
            $this->lanjutKuliah[] = $key->lanjutKuliah;
        }

        $lblJurusan = json_encode($this->labelJurusan, JSON_NUMERIC_CHECK);
        $jmlJurusan = json_encode($this->jumlahJurusan);
        $bkj = json_encode($this->bekerja, JSON_NUMERIC_CHECK);
        $lblAngkatan = json_encode($this->labelAngkatan, JSON_NUMERIC_CHECK);
        $jmlAngkatan = json_encode($this->jumlahAngkatan, JSON_NUMERIC_CHECK);
        $sdhBkj = json_encode($this->sudahBekerja, JSON_NUMERIC_CHECK);
        $lanjutKul = json_encode($this->lanjutKuliah, JSON_NUMERIC_CHECK);
        $ljtKul = json_encode($this->kul, JSON_NUMERIC_CHECK);



        return view('livewire.dashboard', compact('lblJurusan', 'jmlJurusan', 'bkj', 'lblAngkatan', 'jmlAngkatan', 'sdhBkj', 'lanjutKul', 'ljtKul'));
    }
}
