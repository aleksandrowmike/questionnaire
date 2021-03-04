<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Plan;
use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'plan_id' => factory(Plan::class),
        'email' => $faker->email,
        'direction_id'=> $faker->numberBetween(50,205),
        'category_id'=> $faker->numberBetween(1,4),
        'phone' => $faker->phoneNumber,
        'specialty_activity' => $faker->boolean,
        'year_graduate' => $faker->year,
        'agreement' => $faker->boolean,
    ];
});
