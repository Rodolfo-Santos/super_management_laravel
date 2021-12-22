<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SiteContact;
use Faker\Generator as Faker;

$factory->define(SiteContact::class, function (Faker $faker) {
  return [
    'name' => $faker->name,
    'phone' => $faker->tollFreePhoneNumber,
    'email' => $faker->unique()->email,
    'contact_reason_id' => $faker->numberBetween(1, 3),
    'message' => $faker->text(200),
  ];
});
