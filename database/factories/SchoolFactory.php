<?php

$factory->define(App\School::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->city . " High School",
    ];
});
