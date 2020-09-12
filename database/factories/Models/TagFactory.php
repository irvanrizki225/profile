<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\tag;
use Faker\Generator as Faker;

$factory->define(Tag::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'slug' => $faker->slug,
    ];
});