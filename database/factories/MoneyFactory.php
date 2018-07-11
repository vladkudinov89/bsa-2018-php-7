<?php

use Faker\Generator as Faker;

$factory->define(App\Entity\Money::class, function (Faker $faker) {
    return [
        'amount' => $faker->randomFloat(2,0,500000),
        'currency_id' => $faker->numberBetween($min = 1, $max = 10),
        'wallet_id' => $faker->numberBetween($min = 1, $max = 10),
    ];
});
