<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Ticket;
use App\Models\Email;
use Faker\Generator as Faker;

$factory->define(Ticket::class, function (Faker $faker) {
    return [
      'ticket' => Str::random(5),
      'email_id' => Email::pluck('id')->random(),
      'expiration_date' => Carbon\Carbon::today()->subDays(rand(0, 365)),
    ];
});
