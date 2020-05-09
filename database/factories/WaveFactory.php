<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Wave;
use App\User;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'user_id'=> $faker->numberBetween($min = 1, $max = 20),
        'picture' => $faker->imageUrl($width = 640, $height = 480),
        'message'  =>  $faker->paragraph,
    ];
});
