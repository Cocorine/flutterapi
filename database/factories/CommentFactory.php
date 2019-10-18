<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Modele\Post;
use App\Modele\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'content' => $faker->sentence,
        'post_id' =>  function(){
            return Post::all()->random();
        },

        'author_id' =>  function(){
            return User::all()->random();
        }
    ];
});
