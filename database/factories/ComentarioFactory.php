<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$faker = \Faker\Factory::create('pt_BR');

$factory->define('App\Models\Comentario', function () use ($faker) {
    return [
        'post_id' => $faker->randomDigit,
        'autor' => $faker->firstname,
        'email' => $faker->freeEmail,
        'conteudo' => $faker->paragraph(3, true)
    ];
});
