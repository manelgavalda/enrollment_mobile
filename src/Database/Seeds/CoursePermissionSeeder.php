<?php

namespace Scool\EnrollmentMobile\Database\Seeds;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

/**
 * Class EnrollmentPermissionSeeder
 * @package Scool\EnrollmentMobile\Database\Seeds
 */
class CoursePermissionSeeder extends Seeder
{

    /**>
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'browse courses']);
        Permission::create(['name' => 'read courses']);
        Permission::create(['name' => 'edit courses']);
        Permission::create(['name' => 'add courses']);
        Permission::create(['name' => 'delete courses']);
        $role = Role::create(['name' => 'manage courses']);
        $role->givePermissionTo('browse courses');
        $role->givePermissionTo('read courses');
        $role->givePermissionTo('edit courses');
        $role->givePermissionTo('add courses');
        $role->givePermissionTo('delete courses');
    }
}
