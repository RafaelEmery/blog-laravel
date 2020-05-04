<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$faker = \Faker\Factory::create('pt_BR');

$factory->define('App\Post', function () use ($faker) {
    return [
        'titulo' => $faker->words(3, true),
        'subtitulo' => $faker->sentence,
        'autor' => $faker->firstname('male'),
        'palavrasChave' => $faker->words(5, true),
        'categoria' => $faker->randomElement(['categoria 1', 'categoria 2', 'categoria 3']),
        'conteudo' => $faker->text(500),
        'imagem' => $faker->imageUrl(600, 600, 'cats')
    ];
});
