<?php

use Faker\Generator as Faker;
use Faker\Provider\Barcode;
use Faker\Provider\fa_IR\Text;

$factory->define(App\Book::class, function (Faker $faker) {
    $faker->addProvider(new Text($faker));
    $faker->addProvider(new Barcode($faker));

    return [
        'name' => $faker->sentence(3),
        'pages'=> $faker->randomNumber(4),
        'ISBN'=> $faker->isbn10,
        'price'=> $faker->randomNumber(4),
        'published_at'=> $faker->date(),
        ];
});
