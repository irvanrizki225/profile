<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'photo' => $faker->word,
    ];
});
