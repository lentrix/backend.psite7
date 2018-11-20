<?php

use Faker\Generator as Faker;

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
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => bcrypt('system'),
        'remember_token' => str_random(10),
        'gender'=> (['female', 'male'])[rand(0,1)],
        'phone_number' => $faker->phoneNumber,
        'school' => (['USJ-R','CIT-U','CTU','MDC','USC','UC-Main','UCLM','CTSC'])[rand(0,7)],
        'position' => (['Faculty','Chairman','Dean','Administrator','Head'])[rand(0,4)],
        'address' => $faker->address,
        'bdate' => $faker->date
    ];
});
