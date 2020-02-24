<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Performance;
use Faker\Generator as Faker;

$factory->define(Performance::class, function (Faker $faker) {
    return [
        'revenue' => $faker->numberBetween(500, 15000),
        'created_at' => $faker->dateTimeBetween('-3 years'),
    ];
});
