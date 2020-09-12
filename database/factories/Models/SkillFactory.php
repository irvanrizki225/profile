<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\skill;
use Faker\Generator as Faker;

$factory->define(Skill::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'index' => $faker->numberBetween(-10000, 10000),
    ];
});
