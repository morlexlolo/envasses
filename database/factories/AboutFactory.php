<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\About;
use Faker\Generator as Faker;

$factory->define(About::class, function (Faker $faker) {
    $title = $faker->sentence;
    $slug = str_slug($title, '-');

    return [
        'title' => $title,
        'slug' => $slug,
        'body' => $faker->paragraph(3)
    ];
});