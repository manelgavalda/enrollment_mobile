<?php

namespace Scool\EnrollmentMobile\Database\Seeds;

use Illuminate\Database\Seeder;


/**
 * Class EnrollmentSeeder
 */
class EnrollmentMobileSeeder extends Seeder
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

    private function seedStudies()
    {
    }

    private function seedCourses()
    {
    }
}
