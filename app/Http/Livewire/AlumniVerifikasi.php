<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Alumni;

class AlumniVerifikasi extends Component
{
    public $alumni;

    public function mount()
    {
        $this->alumni = Alumni::with('jurusan','status', 'masa_tunggu', 'penghasilan')->where('verified', 0)->get();
        // dd($this->alumni);
    }
    public function render()
    {
        return view('livewire.alumni-verifikasi');
    }
}
