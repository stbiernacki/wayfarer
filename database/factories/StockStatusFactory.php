<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\StockStatus;
use Faker\Generator as Faker;

$factory->define(StockStatus::class, function (Faker $faker) {
    return [
        'external_id' => null,
        'code' => 'INT-' . $faker->unique()->numberBetween(100, 200),
        'name' => $faker->text(15),
        'description' => $faker->text(50),
        'quantity' => $faker->numberBetween(0, 1000),
    ];
});
