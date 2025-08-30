<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        // \App\Models\User::factory(10)->create();

        $this->call(RoleSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(EmployeesTableSeeder::class);



        // $user = new User;
        // $user->name = 'Admin';
        // $user->email = 'admin@test.com';
        // $user->password = '1234';
        // $user->role = 'admin';

        // $user->save();
    }
}
