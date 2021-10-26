<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'role_id' => 1,
            'name' => 'Super Admin',
            'email' => 'admin@admin.com',
            'password'=> bcrypt('qwerty123')
        ]);

        $user = User::create([
            'role_id' => 2,
            'name' => 'user1',
            'email' => 'user@user.com',
            'password' => bcrypt('qwerty123')
        ]);

    }
}
