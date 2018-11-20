<?php

use Faker\Generator as Faker;

$factory->define(App\Vendor::class, function (Faker $faker) {
    return [
        'VendorCode' => $faker->unique()->buildingNumber,
        'VendorName' => $faker->streetName,
        'Address' => $faker->streetAddress,
        'City' => $faker->city,
        'State' => 'NY',
        'ZIP' => $faker->postcode,
        'Phone' => $faker->numberBetween(200,888)."-".$faker->numberBetween(200,888)."-".$faker->numberBetween(1000,9000),
        'ContactPersonName' => $faker->firstName." ".$faker->lastName,
        'Password' => 'Password',
        'ActiveStatus' => 'Enabled',

    ];
});
