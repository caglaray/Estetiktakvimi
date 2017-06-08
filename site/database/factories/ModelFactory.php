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
$factory->define(App\Doctor::class, function (Faker\Generator $faker) {
  

    return [
        'name' => $faker->name,
        'surname' => $faker->name,
        'username' => $faker->name,
        'password' => bcrypt(str_random(10)),
        'email' => $faker->unique()->safeEmail,
		'adress'=> $faker->name,
		'photourl' => $faker->name,
		'telephone' => $faker->phoneNumber,
		'birthday' => $faker->name,
		'livecity' => $faker->name,
        'remember_token' => str_random(10),







    ];
});
