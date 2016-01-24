<?php

$factory->define(App\Student::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName . ' ' . $faker->lastName,
    ];
});
