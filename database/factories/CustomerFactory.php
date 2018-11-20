<?php

use Faker\Generator as Faker;

$factory->define(App\Customer::class, function (Faker $faker) {
    return [
        'CustomerName' => $faker->name,
        'Address' => $faker->streetAddress,
        'City' => $faker->city,
        'State' => 'NY',
        'ZIP' => $faker->postcode,
        'Phone' => $faker->numberBetween(200,888)."-".$faker->numberBetween(200,888)."-".$faker->numberBetween(1000,9000),
        'Email' => $faker->safeEmail,
        'ActiveStatus' => 'Enabled',
    ];
});
