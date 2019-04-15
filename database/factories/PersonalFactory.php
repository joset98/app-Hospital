<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Personal;
use App\Persona;


$factory->define(Personal::class, function (Faker $faker) {
    return [
        //
        'persona_id' =>  function () {
            return factory(Persona::class)->create()->id;
        },
        'tipo' => $faker->word

        
    ];
});
