<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Singer;
use Faker\Generator as Faker;

$factory->define(Singer::class, function (Faker $faker) {
    return [
        'name' => $faker -> name(),
        'sourname' => $faker -> name(),
        'age' => $faker -> numberBetween(5, 100),
        'stagename' => $faker -> name(),
        'bio' => $faker -> text(),
        'genre' => $faker -> word(),
    ];
});
