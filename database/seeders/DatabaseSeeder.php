<?php

namespace Database\Seeders;

use App\Models\Form;
use App\Models\User;
use App\Models\Kamar;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'adam',
            'email' => 'adam@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'admin'
        ]);


        User::create([
            'name' => 'receptionist',
            'email' => 'receptionist@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'resepsionis'
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'admin'
        ]);

    }
}
