<?php

use Illuminate\Database\Seeder;
use App\Mensagem;

class MensagemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mensagem::truncate();

        factory('App\Mensagem', 10)->create();
    }
}
