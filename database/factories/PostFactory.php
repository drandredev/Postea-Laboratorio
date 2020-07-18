<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Storage;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(5),
        'image' => $faker->image('public/img', 400, 300, null, false),
        'content' => $faker->paragraph(3),
    ];
});
