<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comentario;
use Faker\Generator as Faker;

$factory->define('App\Comentario', function (Faker $faker) {
    return [
        'post_id' => $faker->randomDigit,
        'autor' => $faker->name,
        'email' => $faker->sentence,
        'conteudo' => $faker->paragraph
    ];
});
