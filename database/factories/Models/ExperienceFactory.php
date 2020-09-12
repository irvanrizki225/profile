<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\experience;
use Faker\Generator as Faker;

$factory->define(Experience::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'tahun' => $faker->word,
        'describe' => $faker->text,
    ];
});
