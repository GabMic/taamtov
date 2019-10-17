<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Recipe;
use Faker\Generator as Faker;

$factory->define(Recipe::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'slug' => $faker->slug,
        'description' => $faker->text,
        'ingredients' => $faker->text,
        'howToMake' => $faker->text,
        'timeToMake' => $faker->text(10),
        'portions' => $faker->numberBetween(1, 24),
        'front' => $faker->text(10),
        'inner' => $faker->text(10),
        'sidebar_image' => $faker->text(10),
        'published' => $faker->boolean,
        'user_id' => 1,
    ];
});
