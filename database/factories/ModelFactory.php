<?php


use Faker\Generator as Faker;

$factory->define(App\Admin::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'password' => $password ?: $password = bcrypt('asdasd'),
        'email' =>  $faker->email,
        'remember_token' => str_random(10),
    ];
});