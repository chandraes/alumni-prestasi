<?php

namespace App\Http\Livewire\MahasiswaPrestasi;

use Livewire\Component;
use App\Models\MahasiswaPrestasi;
use App\Models\JurusanProdi;
use App\Models\KegiatanPrestasi;
use App\Models\TingkatPrestasi;
use App\Models\JenisPrestasi;
use Livewire\WithFileUploads;

class EditMahasiswaPrestasi extends Component
{
    use WithFileUploads;

    public $penyelenggara, $peringkat,$jurusan, $kegiatan, $kegiatan_id, $nama, $nim, $jurusan_id, $bukti, $waktu, $tempat,
            $prestasi, $tingkat_prestasi_id, $tingkat_prestasi, $jenis_prestasi, $jenis_prestasi_id, $undangan, $surat_tugas,
            $no_hp, $website_penyelenggara, $jumlah_peserta;
    public $mahasiswa_id;

    public function mount($id)
    {
        $mahasiswa = MahasiswaPrestasi::find($id);
        if ($mahasiswa) {
            $this->mahasiswa_id = $mahasiswa->id;
            $this->nama = $mahasiswa->nama;
            $this->nim = $mahasiswa->nim;
            $this->no_hp = $mahasiswa->no_hp;
            $this->tempat = $mahasiswa->tempat;
            $this->website_penyelenggara = $mahasiswa->website_penyelenggara;
            $this->jumlah_peserta = $mahasiswa->jumlah_peserta;
            $this->waktu = $mahasiswa->waktu;
            $this->penyelenggara = $mahasiswa->penyelenggara;
            $this->kegiatan = $mahasiswa->kegiatan;
            $this->prestasi = $mahasiswa->nama_prestasi;
            $this->peringkat = $mahasiswa->peringkat;
            $this->jurusan_id = $mahasiswa->jurusan_prodi_id;
            $this->kegiatan_id = $mahasiswa->kegiatan_id;
            $this->jenis_prestasi_id = $mahasiswa->jenis_prestasi_id;
            $this->tingkat_prestasi_id = $mahasiswa->tingkat_prestasi_id;
            $this->bukti = $mahasiswa->sertifikat_path;
            $this->surat_tugas = $mahasiswa->surat_tugas_path;
            $this->undangan = $mahasiswa->undangan_path;
        }
    }

    public function update()
    {
        $this->validate([
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
            // 'bukti' => 'required|mimes:pdf,jpg,jpeg',
            // 'undangan' => 'required|mimes:pdf,jpg,jpeg',
            // 'surat_tugas' => 'required|mimes:pdf,jpg,jpeg',
        ]);

        if ($this->mahasiswa_id) {
            $db = MahasiswaPrestasi::find($this->mahasiswa_id);

            if ($db) {
                $db->update([
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
                    // 'undangan_path' => $this->nim."/".$undangan_name,
                    // 'surat_tugas_path' => $this->nim."/".$surat_tugas_name,
                    // 'sertifikat_path' => $this->nim."/".$sertifikat_name,
                ]);
            }
        }

        session()->flash('message', 'Data Berhasil Diubah...');

        return redirect()->to('/mahasiswa-prestasi/list');
    }

    public function render()
    {
        $this->jurusan = JurusanProdi::all();
        $this->kegiatan = KegiatanPrestasi::all();
        $this->tingkat_prestasi = TingkatPrestasi::all();
        $this->jenis_prestasi = JenisPrestasi::all();

        return view('livewire.mahasiswa-prestasi.edit-mahasiswa-prestasi');
    }
}
