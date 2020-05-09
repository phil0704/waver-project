<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile;
use App\User;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'location' => $faker->city,
        'bio' => $faker->paragraph,
        'user_id' => $faker->numberBetween($min = 1, $max = 20),
    ];
});
