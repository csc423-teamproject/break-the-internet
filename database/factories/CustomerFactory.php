<?php

use Faker\Generator as Faker;

$factory->define(App\Customer::class, function (Faker $faker) {
    return [
        'CustomerName' => $faker->name,
        'Address' => $faker->streetAddress,
        'City' => $faker->city,
        'State' => 'NY',
        'ZIP' => $faker->postcode,
        'Phone' => $faker->phoneNumber,
        'Email' => $faker->email,
        'ActiveStatus' => 'Enabled',
    ];
});
