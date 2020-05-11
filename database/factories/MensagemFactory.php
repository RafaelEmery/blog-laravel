<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$faker = \Faker\Factory::create('pt_BR');

$factory->define('App\Models\Mensagem', function () use ($faker) {
    return [
        'nome' => $faker->firstname,
        'email' => $faker->freeEmail,
        'assunto' => $faker->sentence(7, true),
        'conteudo' => $faker->paragraph(5, true)
    ];
});
