<?php

use Faker\Generator as Faker;

$factory->define(App\Models\BlogPost::class, function (Faker $faker) {
    $title = $faker->sentence(rand(3,8), true);
    $text = $faker->realText(rand(1000, 4400));
    $isPublished = rand(1,5) > 1;

    $data = [
        'category_id' => rand(1,10),
        'user_id' => rand(1,5),
        'title' => $title,
        'slug' => str_slug($title,'.'),
        'excerpt' => $faker->text(10, 35),
        'content_raw' => $text,
        'content_html' => $text,
        'is_published' => $isPublished,
        'published_at' => $isPublished ? $faker->dateTimeBetween('-2 months', '-3 days') : null,
    ];

    return $data;
});
