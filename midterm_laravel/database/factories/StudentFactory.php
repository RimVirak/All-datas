<?php

use Faker\Generator as Faker;

$factory->define(App\Student::class, function (Faker $faker) {
    return [
        'name'=>$faker->sentence,
        'eamil'=>$faker->paragraph(9),
        'gender'=>$faker->text(),
        'age'=>$faker->text()

    ];
});
