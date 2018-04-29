<?php

$factory->define(App\Company::class, function (Faker\Generator $faker) {
    return [
        "name" => $faker->name,
        "description" => $faker->name,
    ];
});
