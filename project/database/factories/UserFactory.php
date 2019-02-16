<?php

use Faker\Generator as Faker;
use Faker\Provider\fa_IR\Person;
use Faker\Provider\fa_IR\PhoneNumber;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    $faker->addProvider(new Person($faker));
    $faker->addProvider(new PhoneNumber($faker));
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phone_number' =>$faker->unique()->phoneNumber,
        'national_code' =>$faker->unique()->numerify('##########'),
        'password' => bcrypt('1234'), // secret
        'remember_token' => str_random(10),
    ];
});
