<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\Email;

$factory->define(Email::class, function (Faker $faker) {
    return [
        'email' => $faker->unique()->safeEmail,
    ];
});
