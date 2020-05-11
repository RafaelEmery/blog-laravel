<?php

use Illuminate\Database\Seeder;
use App\Models\Mensagem;

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

        factory('App\Models\Mensagem', 10)->create();
    }
}
