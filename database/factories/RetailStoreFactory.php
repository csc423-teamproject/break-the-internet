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
        'Phone' => $faker->phoneNumber,
        'ManagerName' => $faker->name,
        'ActiveStatus' => 'Enabled',


        //
    ];
});
