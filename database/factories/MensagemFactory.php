<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Mensagem;
use Faker\Generator as Faker;

$factory->define('App\Mensagem', function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'email' => $faker->email,
        'assunto' => $faker->sentence,
        'conteudo' => $faker->paragraph
    ];
});
