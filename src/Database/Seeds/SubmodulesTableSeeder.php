<?php

namespace Scool\EnrollmentMobile\Database\Seeds;

use Illuminate\Database\Seeder;
use Scool\EnrollmentMobile\Models\Submodule;

class SubmodulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Submodule::class)->create([
            "name" => "UF1 - Instal·lació, configuració i explotació del sistema informàtic",
            "order" => 1,
            "type" => 1,
            "total_hours" => 1000,
            "week_hours" => 10,
            "start_date" => 12-31-2016,
            "end_date" => 01-03-2017
        ]);
        factory(Submodule::class)->create([
            "name" => "UF2 - Gestió de la informació i de recursos en una xarxa",
            "order" => 1,
            "type" => 1,
            "total_hours" => 1000,
            "week_hours" => 10,
            "start_date" => 12-31-2016,
            "end_date" => 01-03-2017
        ]);

        factory(Submodule::class)->create([
            "name" => "UF3 - Implantació de programari específic",
            "order" => 1,
            "type" => 1,
            "total_hours" => 1000,
            "week_hours" => 10,
            "start_date" => 12-31-2016,
            "end_date" => 01-03-2017
        ]);

        factory(Submodule::class)->create([
            "name" => "UF4 - Introducció a les bases de dades",
            "order" => 1,
            "type" => 1,
            "total_hours" => 1000,
            "week_hours" => 10,
            "start_date" => 12-31-2016,
            "end_date" => 01-03-2017
        ]);

        factory(Submodule::class)->create([
            "name" => "UF2 - Àmbits d'aplicació de l'àmbit XML",
            "order" => 1,
            "type" => 1,
            "total_hours" => 1000,
            "week_hours" => 10,
            "start_date" => 12-31-2016,
            "end_date" => 01-03-2017
        ]);

        factory(Submodule::class)->create([
            "name" => "UF2 - Àmbits d'aplicació de l'àmbit XML",
            "order" => 1,
            "type" => 1,
            "total_hours" => 1000,
            "week_hours" => 10,
            "start_date" => 12-31-2016,
            "end_date" => 01-03-2017
        ]);

    }
}
