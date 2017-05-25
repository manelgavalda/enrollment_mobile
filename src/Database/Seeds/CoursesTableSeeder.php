<?php

namespace Scool\EnrollmentMobile\Database\Seeds;

use Illuminate\Database\Seeder;
use Scool\EnrollmentMobile\Models\Course;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Course::class)->create(
            [
                "name" => "1ASIX/DAM",
            ]
        );
        factory(Course::class)->create(
            [
                "name" => "2ASIX",
            ]
        );
        factory(Course::class)->create(
            [
                "name" => "2DAM",
            ]
        );
    }
}
