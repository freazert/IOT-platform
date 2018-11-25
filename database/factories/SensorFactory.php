<?php

use Faker\Generator as Faker;

$factory->define(App\Sensors::class, function (Faker $faker) {
    return [
        'sensor_name' => $faker->name,
        'type' => $faker->name,
        'description' => $faker->sentence(5),
    ];
});