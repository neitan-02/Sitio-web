<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'reception']);
        $role3 = Role::create(['name' => 'cliente']);

        $permission = Permission::create(['name' => 'home'])->syncRoles([$role1, $role2, $role3]);

        $permission = Permission::create(['name' => 'register.index'])->syncRoles([$role1, $role2, $role3]);


        $permission = Permission::create(['name' => 'users.index'])->assignRole($role1);
        $permission = Permission::create(['name' => 'user.create'])->assignRole($role1);
        $permission = Permission::create(['name' => 'user.edit'])->assignRole($role1);
        $permission = Permission::create(['name' => 'user.destroy'])->assignRole($role1);

        $permission = Permission::create(['name' => 'services.index'])->syncRoles([$role1, $role2]);
        $permission = Permission::create(['name' => 'services.create'])->assignRole($role1);
        $permission = Permission::create(['name' => 'services.edit'])->assignRole($role1);
        $permission = Permission::create(['name' => 'services.destroy'])->assignRole($role1);

        $permission = Permission::create(['name' => 'communities.index'])->assignRole($role1);
        $permission = Permission::create(['name' => 'communities.create'])->assignRole($role1);
        $permission = Permission::create(['name' => 'communities.edit'])->assignRole($role1);
        $permission = Permission::create(['name' => 'communities.destroy'])->assignRole($role1);

        $permission = Permission::create(['name' => 'testimonios.index'])->assignRole($role1);
        $permission = Permission::create(['name' => 'testimonios.create'])->assignRole($role1);
        $permission = Permission::create(['name' => 'testimonios.edit'])->assignRole($role1);
        $permission = Permission::create(['name' => 'testimonios.destroy'])->assignRole($role1);

        $permission = Permission::create(['name' => 'employee-ratings.index'])->assignRole($role1);
        $permission = Permission::create(['name' => 'employee-ratings.create'])->syncRoles([$role1, $role2]);
        $permission = Permission::create(['name' => 'employee-ratings.edit'])->assignRole($role1);
        $permission = Permission::create(['name' => 'employee-ratings.destroy'])->assignRole($role1);

        $permission = Permission::create(['name' => 'appointments.index'])->syncRoles([$role1, $role2]);
        $permission = Permission::create(['name' => 'appointments.create'])->syncRoles([$role1, $role2]);
        $permission = Permission::create(['name' => 'appointments.edit'])->syncRoles([$role1, $role2]);
        $permission = Permission::create(['name' => 'appointments.destroy'])->syncRoles([$role1, $role2]);

        $permission = Permission::create(['name' => 'employees.index'])->assignRole($role1);
        $permission = Permission::create(['name' => 'employees.create'])->assignRole($role1);
        $permission = Permission::create(['name' => 'employees.edit'])->assignRole($role1);
        $permission = Permission::create(['name' => 'employees.destroy'])->assignRole($role1);

    }
}
