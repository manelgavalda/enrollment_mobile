<?php

namespace Scool\EnrollmentMobile\Database\Seeds;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Contracts\Permission;
use Spatie\Permission\Contracts\Role;

class EnrollmentPermissionSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user='administrator';

        Permission::create(['name' => 'edit enrollments']);
        Permission::create(['name' => 'show enrollments']);
        Permission::create(['name' => 'remove enrollments']);

        Role::create(['name' => 'administrator']);

        $user->givePermissionTo('edit enrollments');
        $user->assignRole('administrator','admin');

    }
}