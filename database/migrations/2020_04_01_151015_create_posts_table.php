<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        //Atributos: titulo, autor, palavras chave, categoria, conteudo, imagem
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('subtitulo');
            $table->string('autor');
            $table->string('palavrasChave');
            $table->enum('categoria', ['Programação', 'Universidade', 'Vida', 'Entreterimento', 'Esportes']);
            $table->text('conteudo');
            $table->string('imagem');
            $table->string('slug');
            $table->boolean('destaque')->default(false);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
