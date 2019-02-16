<?php

use Faker\Generator as Faker;

$factory->define(App\Author::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->name,
        'birthDate' => $faker->date()
        ];
});
