<?php

use Faker\Generator as Faker;

$factory->define(App\Director::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'fecha_nacimiento' => $faker->date(),
        'premios' => $faker->numberBetween(10,20)
    ];
});
