<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Batche;
use Faker\Generator as Faker;

$factory->define(Batche::class, function (Faker $faker) {

    return [
        'batch' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
