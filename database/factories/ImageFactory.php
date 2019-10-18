<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Modele\Image;
use App\Modele\Post;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    return [
        'description' => $faker->sentence,
        'url' => $faker->imageUrl(800,600),
        'post_id' => function(){
            return Post::all()->random();
        },
        'featured' => $faker->randomElement([true,false]),

    ];
});
