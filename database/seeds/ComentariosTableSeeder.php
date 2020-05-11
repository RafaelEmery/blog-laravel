<?php

use App\Models\Comentario;
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

        factory('App\Models\Comentario', 10)->create();
    }
}
