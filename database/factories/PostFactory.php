<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$faker = \Faker\Factory::create('pt_BR');

$factory->define('App\Models\Post', function () use ($faker) {
    return [
        'titulo' => $faker->words(3, true),
        'subtitulo' => $faker->sentence,
        'autor' => $faker->firstname,
        'palavrasChave' => $faker->words(5, true),
        'categoria' => $faker->randomElement(['Programação', 'Universidade', 'Vida', 'Entreterimento', 'Esportes']),
        'conteudo' => $faker->text(500),
        'imagem' => $faker->imageUrl(600, 600, 'cats')
    ];
});
