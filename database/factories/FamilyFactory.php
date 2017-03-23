<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Scool\EnrollmentMobile\Models\Family::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
    ];
});
