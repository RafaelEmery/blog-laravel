<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Rodape;
use Faker\Generator as Faker;

$faker = \Faker\Factory::create('pt_BR');

$factory->define('App\Rodape', function () use ($faker) {
    return [
        'textoSobre' => $faker->paragraph(8, false),
        'endereco' => $faker->streetAddress,
        'telefone' => $faker->cellphoneNumber,
        'email' => $faker->freeEmail,
        'sitePessoal' => $faker->url
    ];
});
