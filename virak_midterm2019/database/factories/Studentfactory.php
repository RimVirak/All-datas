<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'name'=>$faker->sentence,
        'eamil'=>$faker->paragraph(20),
        'gender'=>$faker->text(2),
        'age'=>$faker->integer(10)

    ];
});
