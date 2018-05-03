<?php

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'slug'          => $faker->slug,
        'title'         => ucfirst($faker->words(10, true)),
        'subtitle'      => '',
        'content'       => $faker->paragraphs(3, true),
        'category'      => $faker->randomElement(['blog', 'work', 'project']),
        'image'         => '',
        'link'          => '',
        'is_featured'   => (int)$faker->numberBetween(0, 1),
        'published_at'  => $faker->dateTimeBetween('-2 years', '-1 year')
    ];
});
