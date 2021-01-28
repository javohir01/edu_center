<?php

use Faker\Generator as Faker;

$factory->define(App\EduCenter::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email, 
        'address'=> $faker->address,
        'tell_number' => $faker->randomNumber,
        'center_site' => $faker->paragraph,
        'center_about' => $faker->paragraph,
    ];
});
