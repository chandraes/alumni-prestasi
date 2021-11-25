<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index_view ()
    {
        $user = User::join('roles', 'users.role_id', 'roles.id')->first();
        // dd($user);
        return view('pages.user.user-data', compact('user'));
    }
}
