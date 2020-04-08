<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define('App\Post', function (Faker $faker) {
    return [
        'titulo' => $faker->sentence,
        'autor' => $faker->name,
        'palavrasChave' => $faker->word,
        'categoria' => $faker->word,
        'conteudo' => $faker->paragraph,
        'imagem' => $faker->word
    ];
});
