<?php

namespace App\Http\Livewire;

use App\Models\Alumni;
use Livewire\Component;
use App\Models\JurusanProdi;
use App\Models\Penghasilan;

class AlumniTambah extends Component
{
    public $nama, $jurusan, $jurusan_prodi_id, $angkatan, $bulan_wisuda, $tahun_wisuda, $sudah_bekerja, $tempat_bekerja_pertama, 
            $gaji_pertama,$tempat_bekerja_sekarang, $posisi_bagian, $status, $no_hp, $alamat;
    public $selectedStatus= null;
    public $captcha = 0;

    protected $rules = [
        'nama' => 'required|string',
        'no_hp' => 'required|numeric',
        'alamat' => 'required|min:5',
        'jurusan_prodi_id' => 'required|numeric',
        'angkatan' => 'required|numeric',
        'bulan_wisuda' => 'required|numeric',
        'tahun_wisuda' => 'required|numeric',
        'sudah_bekerja' => 'required|numeric',
        'tempat_bekerja_pertama' => 'requiredIf:sudah_bekerja,1',
        'gaji_pertama' => 'requiredIf:sudah_bekerja,1|numeric',
        'tempat_bekerja_sekarang' => 'requiredIf:sudah_bekerja,1',
        'posisi_bagian' => 'requiredIf:sudah_bekerja,1',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        $this->jurusan = JurusanProdi::all();
        $bulan = array(
            ["id" => 1,"name" => 'Januari'],
            ["id" => 2,"name" => 'Februari'],
            ["id" => 3,"name" => 'Maret'],
            ["id" => 4,"name" => 'April'],
            ["id" => 5,"name" => 'Mei'],
            ["id" => 6,"name" => 'Juni'],
            ["id" => 7,"name" => 'Juli'],
            ["id" => 8,"name" => 'Agustus'],
            ["id" => 9,"name" => 'September'],
            ["id" => 10,"name" => 'Oktober'],
            ["id" => 11,"name" => 'November'],
            ["id" => 12,"name" => 'Desember'],
        );
        $month = array_to_object($bulan);

        $penghasilan = Penghasilan::all();
        
        return view('alumni-tambah', compact('month', 'penghasilan'))
                ->layout('layouts.guest');
    }

    public function updatedCaptcha($token)
    {
        $response = Http::post('https://www.google.com/recaptcha/api/siteverify?secret=' . env('CAPTCHA_SECRET_KEY') . '&response=' . $token);
        $this->captcha = $response->json()['score'];

        if (!$this->captcha > .3) {
            $this->store();
        } else {
            return session()->flash('success', 'Google thinks you are a bot, please refresh and try again');
        }
    }
    
    public function store()
    {
        $input = $this->validate();
        Alumni::create($input);
        return redirect()->route('alumni-notif');
    }
}
