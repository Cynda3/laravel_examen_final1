<?php

use Faker\Generator as Faker;

$factory->define(App\Alumno::class, function (Faker $faker) {
	$faker = \Faker\Factory::create('es_ES');

    return [
        'nif' => $faker->dni,
        'nombre' => $faker->name,
        'direccion' => $faker->streetName,
        'telefono' => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        'genero' => rand (0,2),
    ];
});

