<?php

use Faker\Generator as Faker;
use App\Persona;


$factory->define(Persona::class, function (Faker $faker) {
    return [
        //
        'nombre' => $faker->name,
        'apellido' => $faker->name,
        'phone' => $faker->randomNumber(7),
        'dni' => $faker->randomNumber(7),
     
    ];

});
