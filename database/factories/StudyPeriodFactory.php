<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(\Scool\EnrollmentMobile\Models\Period::class, function (Faker\Generator $faker) use ($factory) {
    return [
        'name' => $faker->word,
    ];
});
