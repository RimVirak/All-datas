<?php

use Faker\Generator as Faker;

$factory->define(App\Student::class, function (Faker $faker) {
    return [
        'title'=>$faker->sentence(2,true),
        'body'=>$faker->paragraph(20,true)
    ];
});
