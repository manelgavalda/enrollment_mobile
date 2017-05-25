<?php

namespace Scool\EnrollmentMobile\Database\Seeds;

use Illuminate\Database\Seeder;
use Scool\EnrollmentMobile\Models\Classroom;
use Scool\EnrollmentMobile\Models\Speciality;
use Scool\EnrollmentMobile\Models\Submodule;
use Scool\EnrollmentMobile\Models\Module;
use Scool\EnrollmentMobile\Models\Course;
use Scool\EnrollmentMobile\Models\Person;

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
        $this->call(EnrollmentPermissionSeeder::class);
        $this->call(EnrollmentsTableSeeder::class);
        $this->call(ClassroomsTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(EnrollmentStudySubmodulesTableSeeder::class);
        $this->call(PeopleTableSeeder::class);
        $this->call(ModulesTableSeeder::class);
        $this->call(SubmodulesTableSeeder::class);
        $this->call(StudiesTableSeeder::class);
    }
}
