<?php

namespace App\Http\Livewire\MahasiswaPrestasi;

use App\Models\JenisPrestasi;
use Livewire\Component;
use App\Models\JurusanProdi;
use App\Models\KegiatanPrestasi;
use App\Models\MahasiswaPrestasi;
use App\Models\TingkatPrestasi;
use Livewire\WithFileUploads;

class MahasiswaBerprestasi extends Component
{
    use WithFileUploads;

    public $penyelenggara, $peringkat,$jurusan, $kegiatan, $kegiatan_id, $nama, $nim, $jurusan_id, $bukti, $waktu, $tempat,
            $prestasi, $tingkat_prestasi_id, $tingkat_prestasi, $jenis_prestasi, $jenis_prestasi_id, $undangan, $surat_tugas,
            $no_hp, $website_penyelenggara, $jumlah_peserta;

    protected $rules = [
        'nama' => 'required|string',
        'kegiatan_id' => 'required|numeric',
        'nim' => 'required|numeric',
        'no_hp' => 'required',
        'jumlah_peserta' => 'required|numeric',
        'jurusan_id' => 'required|numeric',
        'tingkat_prestasi_id' => 'required|numeric',
        'waktu' => 'required|date',
        'tempat' => 'required|string',
        'prestasi' => 'required|string',
        'penyelenggara' => 'required|string',
        'peringkat' => 'required|numeric',
        'bukti' => 'required|mimes:pdf,jpg,jpeg',
        'undangan' => 'required|mimes:pdf,jpg,jpeg',
        'surat_tugas' => 'required|mimes:pdf,jpg,jpeg',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {

        $this->jurusan = JurusanProdi::all();
        $this->kegiatan = KegiatanPrestasi::all();
        $this->tingkat_prestasi = TingkatPrestasi::all();
        $this->jenis_prestasi = JenisPrestasi::all();

        return view('livewire.mahasiswa-prestasi.mahasiswa-prestasi');
    }

    public function store()
    {
        $this->validate();

        $undangan_name = "Undangan_".$this->undangan->hashName();
        $surat_tugas_name = "SuratTugas_".$this->surat_tugas->hashName();
        $sertifikat_name = "Sertifikat_".$this->bukti->hashName();

        $undangan = $this->undangan->storeAs('files/'.$this->nim, $undangan_name ,'public');;
        $surat_tugas = $this->surat_tugas->storeAs('files/'.$this->nim, $surat_tugas_name,'public');;
        $sertifikat = $this->bukti->storeAs('files/'.$this->nim, $sertifikat_name,'public');;


        // dd($undangan_name);
        MahasiswaPrestasi::create([
            'nama' => $this->nama,
            'nim' => $this->nim,
            'no_hp' => $this->no_hp,
            'jurusan_prodi_id' => $this->jurusan_id,
            'kegiatan_id' => $this->kegiatan_id,
            'tingkat_prestasi_id' => $this->tingkat_prestasi_id,
            'jenis_prestasi_id' => $this->jenis_prestasi_id,
            'waktu' => $this->waktu,
            'tempat' => $this->tempat,
            'nama_prestasi' => $this->prestasi,
            'penyelenggara' => $this->penyelenggara,
            'website_penyelenggara' => $this->website_penyelenggara,
            'jumlah_peserta' => $this->jumlah_peserta,
            'peringkat' => $this->peringkat,
            'undangan_path' => $this->nim."/".$undangan_name,
            'surat_tugas_path' => $this->nim."/".$surat_tugas_name,
            'sertifikat_path' => $this->nim."/".$sertifikat_name,
        ]);
        session()->flash('message', 'Data Berhasil Ditambahkan...');
        // $this->reset();
        return redirect()->to('/mahasiswa-prestasi/list');
    }
}
