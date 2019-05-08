<?php

use Faker\Generator as Faker;

$factory->define(App\comment::class, function (Faker $faker) {
    return [
        'title'=>$faker->sentence(2,true)
    ];
});
