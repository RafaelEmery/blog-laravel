<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Rodape;
use Faker\Generator as Faker;

$factory->define('App\Rodape', function (Faker $faker) {
    return [
        'textoSobre' => $faker->paragraph,
        'endereco' => $faker->sentence,
        'telefone' => $faker->phoneNumber,
        'email' => $faker->email,
        'sitePessoal' => $faker->sentence
    ];
});
