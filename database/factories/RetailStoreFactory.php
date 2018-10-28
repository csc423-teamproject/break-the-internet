<?php

use Faker\Generator as Faker;

$factory->define(App\RetailStore::class, function (Faker $faker) {
    return [
        'StoreCode' => $faker->unique()->randomNumber(),

        //
    ];
});
