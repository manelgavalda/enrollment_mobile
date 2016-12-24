<?php

namespace Scool\EnrollmentMobile\Database\Seeds;

use Illuminate\Database\Seeder;
use Scool\EnrollmentMobile\Models\Classroom;
use Scool\EnrollmentMobile\Models\Speciality;
use Scool\EnrollmentMobile\Models\Submodule;
use Scool\EnrollmentMobile\Models\Module;
use Scool\EnrollmentMobile\Models\Course;

//use Acacha\Periods\Period;

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
        $this->call(EnrollmentsTableSeeder::class);
        $this->call(ClassroomsTableSeeder::class);
    }
}
