<?php

use Illuminate\Database\Seeder;
use Scool\EnrollmentMobile\Models\Enrollment;

class EnrollmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createEnrollment("Enrollment1");
    }
    private function createEnrollment($name)
    {
        $enrollment = Enrollment::firstOrCreate([
            'name' => $name
        ]);
    }

}
