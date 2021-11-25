<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AlumniNotif extends Component
{
    public function render()
    {
        return view('livewire.alumni-notif')->layout('layouts.guest');
    }
}
