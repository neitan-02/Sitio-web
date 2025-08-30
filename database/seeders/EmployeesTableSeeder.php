<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            [
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'role' => 'Service',
                'days' => 'lunes, martes, miercoles, jueves',
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane.smith@example.com',
                'role' => 'Reception',
                'days' => 'lunes, martes, miercoles, jueves, viernes, sabado',
            ],
        ]);
    }
}
