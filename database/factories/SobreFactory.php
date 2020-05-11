<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$faker = \Faker\Factory::create('pt_BR');

$factory->define('App\Models\Sobre', function () use ($faker) {
    return [
        'textoSobre' => $faker->paragraph(8, false),
        'endereco' => $faker->streetAddress,
        'telefone' => $faker->cellphoneNumber,
        'email' => $faker->freeEmail,
        'sitePessoal' => $faker->url
    ];
});
