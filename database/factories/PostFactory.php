<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    // $title => $faker->sentence(4),
    return [
      'title' => $faker->sentence(4),
      'body'  => $faker->text(500),
    ];
});
