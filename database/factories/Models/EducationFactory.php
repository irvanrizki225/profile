<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\education;
use Faker\Generator as Faker;

$factory->define(Education::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
