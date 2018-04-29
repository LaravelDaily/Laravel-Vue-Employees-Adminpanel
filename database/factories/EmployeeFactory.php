<?php

$factory->define(App\Employee::class, function (Faker\Generator $faker) {
    return [
        "company_id" => factory('App\Company')->create(),
        "first_name" => $faker->name,
        "last_name" => $faker->name,
        "email" => $faker->safeEmail,
        "phone" => $faker->name,
    ];
});
