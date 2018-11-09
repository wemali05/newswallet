<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'category_id' => $faker->numberBetween($min = 1, $max = 10),
        'title' => $faker->sentence,
        'image_path' => $image,
        'author_name' => $faker->lastName,
        'website_name' => $faker->sentence($nbWords = 4, $variableNbWords = true),
        'link' => $faker->url,
        'description' => $faker->paragraph,
    ];
});
