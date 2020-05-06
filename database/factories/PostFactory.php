<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$faker = \Faker\Factory::create('pt_BR');

$factory->define('App\Post', function () use ($faker) {
    return [
        'titulo' => $faker->words(3, true),
        'subtitulo' => $faker->sentence,
        'autor' => $faker->firstname,
        'palavrasChave' => $faker->words(5, true),
        'categoria' => $faker->randomElement(['programacao', 'universidade', 'vida', 'entreterimento', 'esportes']),
        'conteudo' => $faker->text(500),
        'imagem' => $faker->imageUrl(600, 600, 'cats')
    ];
});
