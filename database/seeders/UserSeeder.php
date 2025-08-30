<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
    // Crear el primer usuario
    User::create([
        'name' => 'Merrash Administrador',
        'email' => 'admin@merrash.com',
        'password' => Hash::make('password'),
    ])->assignRole('Admin');

    // Crear el segundo usuario
    User::create([
        'name' => 'Merrash Recepción',
        'email' => 'reception@merrash.com',
        'password' => Hash::make('password'),
    ])->assignRole('reception');

    // Crear el tercer usuario
    User::create([
        'name' => 'Merrash Recepción Dos',
        'email' => 'reception2@merrash.com',
        'password' => Hash::make('password'),
    ])->assignRole('reception');
}

}
