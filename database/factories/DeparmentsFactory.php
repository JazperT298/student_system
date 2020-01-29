<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Deparments;
use Faker\Generator as Faker;

$factory->define(Deparments::class, function (Faker $faker) {

    return [
        'faculty_id' => $faker->randomDigitNotNull,
        'department_name' => $faker->word,
        'department_code' => $faker->word,
        'department_description' => $faker->text,
        'department_status' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
