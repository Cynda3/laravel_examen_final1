<?php

use Faker\Generator as Faker;

$factory->define(App\Empresa::class, function (Faker $faker) {
	$faker = \Faker\Factory::create('es_ES');
    return [
        'nombre' => $faker->company,
        'direccion' => $faker->streetName,
        'telefono' => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        'web' => $faker->domainName,
    ];
});

