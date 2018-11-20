<?php

use Faker\Generator as Faker;

$factory->define(App\RetailStore::class, function (Faker $faker) {
    return [
        'StoreCode' => $faker->unique()->buildingNumber,
        'StoreName' => $faker->colorName,
        'Address' => $faker->streetAddress,
        'City' => $faker->city,
        'State' => 'NY',
        'ZIP' => $faker->postcode,
        'Phone' => $faker->numberBetween(200,888)."-".$faker->numberBetween(200,888)."-".$faker->numberBetween(1000,9000),
        'ManagerName' => $faker->name,
        'ActiveStatus' => 'Enabled',


        //
    ];
});
