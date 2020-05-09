<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use App\User;
use App\Post;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'message' => $faker->paragraph,
        'user_id' => $faker->numberBetween($min = 1, $max = 20),
        'wave_id' => $faker->numberBetween($min = 1, $max = 20),
});
