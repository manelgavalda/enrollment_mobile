<?php

namespace Scool\EnrollmentMobile\Database\Seeds;

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
        //$this->createEnrollment("Enrollment1");
        factory(Enrollment::class, 20)->create();
    }


    private function createEnrollment($name)
    {
        $enrollment = [
            'name' => $name,
            'validated' => true, //només les vàlides són actives.
            'finished' => false, //indica si la matricula està finalitzada.
            //$table->integer('period_id'); //De moment descartat //obligatori
            'study_id' => 1,
            'course_id' => 1,
            'classroom_id' => 1
            //timestamps
        ];

        Enrollment::create($enrollment);
    }

}
