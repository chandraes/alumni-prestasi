<?php

namespace App\Http\Livewire;

use App\Models\Role;
use Livewire\Component;
use App\Models\User;

class UserTambah extends Component
{
    public $user, $email, $role_id, $role, $password, $password_confirmation, $name;

    protected $rules = [
        'name' => 'required',
        'email'=> 'required|unique:users,email',
        'role_id'=> 'required|max:1|numeric',
        'password' => 'required|confirmed|min:4',
        'password_confirmation' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        $this->role = Role::all();

        return view('livewire.user-tambah');
    }

    public function store()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'role_id' => $this->role_id,
            'password' => bcrypt($this->password),
        ]);

        session()->flash('message', 'Data Berhasil Ditambahkan...');
        $this->reset(['name', 'email', 'password', 'role_id', 'password_confirmation']);
        return redirect()->to('/user-data');
    }
}
