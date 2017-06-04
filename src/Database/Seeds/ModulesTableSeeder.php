<?php

namespace Scool\EnrollmentMobile\Database\Seeds;

use Illuminate\Database\Seeder;
use Scool\EnrollmentMobile\Models\Module;

class ModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            factory(Module::class)->create(
                [
                    "name" => "MP01 - Implantació de sistemes operatius(ASIX) - Implementació de sistemes informàtics(DAM)",
                    "order" => 1,
                    "study_id" => 1

                ]
            );
        } catch (\Illuminate\Database\QueryException $exception) {

        }
        try {
            factory(Module::class)->create(
                [
                    "name" => "MP02 - Gestió de bases de dades",
                    "order" => 2,
                    "study_id" => 1
                ]
            );

        } catch (\Illuminate\Database\QueryException $exception) {

        }

        try {
            factory(Module::class)->create(
                [
                    "name" => "MP03 - Programació bàsica",
                    "order" => 3,
                    "study_id" => 1
                ]
            );

        } catch (\Illuminate\Database\QueryException $exception) {

        }

        try {
            factory(Module::class)->create(
                [
                    "name" => "MP04 - Llenguatges de marques i sistemes de gestió d'informació",
                    "order" => 4,
                    "study_id" => 1
                ]
            );

        } catch (\Illuminate\Database\QueryException $exception) {

        }

        try {
            factory(Module::class)->create(
                [
                    "name" => "MP01 - Module 1",
                    "order" => 1,
                    "study_id" => 2
                ]
            );

        } catch (\Illuminate\Database\QueryException $exception) {

        }

        try {
            factory(Module::class)->create(
                [
                    "name" => "MP02 - Module 2",
                    "order" => 2,
                    "study_id" => 2
                ]
            );

        } catch (\Illuminate\Database\QueryException $exception) {

        }
    }
}