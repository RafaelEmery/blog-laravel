<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Sobre;
use Faker\Generator as Faker;

$faker = \Faker\Factory::create('pt_BR');

$factory->define('App\Sobre', function () use ($faker) {
    return [
        'textoSobre' => $faker->paragraph(8, false),
        'endereco' => $faker->streetAddress,
        'telefone' => $faker->cellphoneNumber,
        'email' => $faker->freeEmail,
        'sitePessoal' => $faker->url
    ];
});
