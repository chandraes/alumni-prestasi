<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            JurusanProdiSeeder::class,
            RoleSeeder::class,
            KegiatanPrestasiSeeder::class,
            TingkatPrestasiSeeder::class,
            JenisPrestasiSeeder::class,
            UserSeeder::class,
            PenghasilanSeeder::class,
        ]);
    }
}
