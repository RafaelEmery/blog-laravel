<?php

use App\Rodape;
use Illuminate\Database\Seeder;

class RodapeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rodape::truncate();

        factory('App\Rodape', 1)->create();
    }
}
