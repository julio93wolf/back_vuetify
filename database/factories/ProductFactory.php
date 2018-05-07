<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name'          => $faker->word,
        'price'         => $faker->randomFloat(2,1,100),
        'description'   => $faker->paragraph(random_int(1,10))
    ];
});
