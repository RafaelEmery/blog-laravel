<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Grupo de rotas para o blog
Route::group(['namespace'=> 'Sistema', 'as' => 'sistema.', 'prefix' => 'admin'], function() {

    //Rota para entrar no admin
    Route::get('/', 'AdminController@index');

    //Rotas para os Posts
    Route::resource('posts', 'PostController');
    Route::get('posts/alternarDestaque/{id}', ['as' => 'posts.destaque', 'uses' => 'PostController@alternarDestaque'] );

    //Rotas para os comentários
    Route::resource('comentarios', 'ComentarioController');

    //Rotas para as mensagens
    Route::resource('mensagens', 'MensagemController');

    //Rotas para o rodapé
    Route::resource('rodape', 'RodapeController');

    //Rota para a ajuda
    Route::get('/ajuda', ['as' => 'ajuda.index', 'uses' => 'AjudaController@index']);
});



