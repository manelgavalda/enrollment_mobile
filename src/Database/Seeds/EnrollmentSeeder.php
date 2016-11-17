<?php

use Illuminate\Database\Seeder;
use Scool\Enrollment\Database\Seeds;

/**
 * Class EnrollmentSeeder
 */
class EnrollmentSeeder extends Seeder
{
    /**
     * Run the database Seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seedStudies();
        $this->seedCourses();
    }

    private function seedStudies(){

    }

    private function seedCourses(){

    }
}
