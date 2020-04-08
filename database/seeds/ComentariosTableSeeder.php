<?php

use App\Comentario;
use Illuminate\Database\Seeder;

class ComentariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comentario::truncate();

        factory('App\Comentario', 10)->create();
    }
}
