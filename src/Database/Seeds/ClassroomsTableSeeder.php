<?php

namespace Scool\EnrollmentMobile\Database\Seeds;

use Illuminate\Database\Seeder;
use Scool\EnrollmentMobile\Models\Classroom;

class ClassroomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Classroom::class)->create([
            "name" => "1ASIX-DAM. 1r Informàtica (S) ASIX - DAM",
            "enrollment_id" => 1
        ]);
    }
}
