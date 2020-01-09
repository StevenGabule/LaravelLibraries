<?php

use Faker\Generator as Faker;

$factory->define(App\UserDetail::class, function (Faker $faker) {
    return [
        'full_name' => $faker->name,
        'street_address' => $faker->streetAddress,
        'zip_code' => $faker->postcode,
        'city' => $faker->city
    ];
});
