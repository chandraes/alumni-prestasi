<?php

namespace App\Http\Livewire;

use App\Models\User;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class UserTable extends LivewireDatatable
{
    public $model = User::class;

     public function builder()
    {
        return User::query()
                ->join('roles', 'users.role_id', 'roles.id');
                
    }

    public function columns()
    {
        return [
            Column::name('name')->defaultSort('asc')->searchable(),
            Column::name('email')->searchable(),
            Column::name('roles.nama_role')->label('Role')->searchable(),
            DateColumn::name('created_at')->alignCenter(),
            Column::callback('id', function($id){
                return view('livewire.datatables.delete', ['value' =>$id]);
            })->label('Action')->excludeFromExport()->alignCenter(),
        ];
    }

    public function delete($id)
    {
        
        User::find($id)->delete();
        session()->flash('message', 'Data Has Been Deleted..');
        return redirect()->to('/user-data');
    }
}