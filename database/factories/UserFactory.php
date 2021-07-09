<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Entities\Admin\User;
use Illuminate\Support\Str;
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

$factory->define(User::class, function (Faker $faker) {
    return [
        'firstname' => $faker->Firstname,
        'lastname' => $faker->LastName,
        'email' => $faker->unique()->safeEmail,
        'username' => $faker->unique()->word,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'start_date' => ($start =  $faker->dateTimeBetween('-5 years', now())),
        'email_verified_at' => $faker->randomElement([null,($validate = $faker->dateTimeBetween($start, now()))]), 
        'end_date' => $faker->randomElement([null,$faker->dateTimeBetween($validate, now())]),
        'remember_token' => Str::random(10),
        'create_by' => 1,
        'update_by' => 1
    ];
});
