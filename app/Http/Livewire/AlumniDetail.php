<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Alumni;
use Illuminate\Support\Facades\Gate;

class AlumniDetail extends Component
{
    public $detail, $id_alumni;

    public function mount($id)
    {
        $this->detail = Alumni::with('jurusan','status', 'masa_tunggu', 'penghasilan')->where('alumnis.id', $id)
                                ->get();
        $this->id_alumni = $id;
    }
    public function render()
    {
        Gate::authorize('admin');
        // dd($this->detail);
        return view('livewire.alumni-detail');
    }

    public function verifikasi()
    {
        Gate::authorize('admin');
        $alumni = Alumni::find($this->id_alumni);
        $alumni->verified = 1;
        $alumni->save();
        session()->flash('message', 'Data Has Been Verified..');
        return redirect()->to('/alumni/verifikasi');
    }

}
