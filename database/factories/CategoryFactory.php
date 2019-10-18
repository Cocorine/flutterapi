<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Modele\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'color' => $faker->hexColor,
    ];
});
