<?php

use Faker\Generator as Faker;

$factory->define(App\One::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'example' => $faker->paragraphs(10, true),
    ];
});

$factory->define(App\Two::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'example' => $faker->paragraphs(10, true)
    ];
});

$factory->define(App\Three::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'example' => $faker->paragraphs(10, true)
    ];
});

$factory->afterCreating(App\Two::class, function ($model, $faker) {
    $model->ones()->syncWithoutDetaching(App\One::all()->pluck('id'));
});
$factory->afterCreating(App\Three::class, function ($model, $faker) {
    $model->twos()->syncWithoutDetaching(App\Two::all()->pluck('id'));
});