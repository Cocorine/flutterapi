<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Modele\Category;
use App\Modele\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'content' => $faker->paragraph,
        'post_type' => $faker->randomElement(['text','video']),

        'author_id' =>  function(){
            return User::all()->random();
        },
        'category_id' =>  function(){
            return Category::all()->random();
        },
    ];
});
