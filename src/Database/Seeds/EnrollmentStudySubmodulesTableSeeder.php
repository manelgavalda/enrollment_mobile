<?php

namespace Scool\EnrollmentMobile\Database\Seeds;

use Illuminate\Database\Seeder;
use Scool\EnrollmentMobile\Models\EnrollmentStudySubmodule;

class EnrollmentStudySubmodulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(EnrollmentStudySubmodule::class, 20)->create();
    }
}
