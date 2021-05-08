<?php

namespace Database\Factories;
/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Order;
use App\Package;
use Faker\Generator as Faker;

$factory->define(Package::class, function (Faker $faker) {
    return [
        'order_id' => factory(Order::class)->create(),
        'drink_id' => $faker->numberBetween(0,100),
        'quantity' => $faker->numberBetween(1,4)
    ];
});
