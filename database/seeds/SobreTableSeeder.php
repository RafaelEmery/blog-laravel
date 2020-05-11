<?php

use App\Models\Sobre;
use Illuminate\Database\Seeder;

class SobreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sobre::truncate(); 

        factory('App\Models\Sobre', 1)->create();
    }
}
