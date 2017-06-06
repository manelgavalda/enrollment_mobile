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
        factory(Enrollment::class)->create([
            "name" => "1 Enrollment",
            "validated" => null,
            "finished" => false,
            "user_id" => 1,
            "classroom_id" => 1,
            "study_id" => 1,
            "course_id" => 1
        ]);
//        $table->boolean('validated'); //només les vàlides són actives.
//        $table->boolean('finished'); //indica si la matricula està finalitzada.
//        //$table->integer('period_id'); //De moment descartat //obligatori
//        $table->integer('user_id')->unsigned()->nullable(); //indica si la matricula està finalitzada.
//        $table->integer('classroom_id')->unsigned()->nullable(); //indica si la matricula està finalitzada.
//        $table->integer('study_id')->unsigned()->nullable();
//        $table->integer('course_id')->unsigned()->nullable();
    }
}
