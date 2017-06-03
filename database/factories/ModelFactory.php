<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Profile::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'gender' => 'F',
        'age' => $faker->numberBetween($min = 20, $max = 100),
        'location' => $faker->city,
    ];
});
