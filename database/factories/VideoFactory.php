<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Modele\Post;
use App\Modele\Video;
use Faker\Generator as Faker;

$factory->define(Video::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'url' => $faker->imageUrl(800,600),
        'post_id' => function(){
            return Post::all()->random();
        }
    ];
});
