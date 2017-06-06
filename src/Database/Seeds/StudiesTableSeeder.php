<?php

namespace Scool\EnrollmentMobile\Database\Seeds;

use Illuminate\Database\Seeder;
use Scool\EnrollmentMobile\Models\Study;

class StudiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //        factory(Classroom::class, 20)->create();
    try {
        factory(Study::class)->create(
            [
                "name" => "ASIX / DAM",
                "enrollment_id" => 1,
                "law_id" => 1,
                "state" => 1,
                "replaces_study_id" => 1
            ]
        );
        factory(Study::class)->create(
            [
                "name" => "Educació Infantil",
                "law_id" => 1,
                "state" => 1,
                "replaces_study_id" => 2
            ]
        );
    } catch (\Illuminate\Database\QueryException $exception) {
    }
    }
}
