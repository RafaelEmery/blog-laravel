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

//Rotas para a autenticação
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');

//Grupo de rotas para o site
Route::group(['namespace' => 'Site', 'as' => 'site.', 'prefix' => ''], function () {
    
    //Rota para o principal do site
    Route::get('/', ['as' => 'index', 'uses' => 'SiteController@index']);

    //Rota para um post específico
    Route::get('/post', ['as' => 'post', 'uses' => 'SiteController@post']);

    //Rota para o Sobre Nós
    Route::get('/sobre', ['as' => 'sobre', 'uses' => 'SiteController@sobre']);

    //Rota para o Contato
    Route::get('/contato', ['as' => 'contato', 'uses' => 'SiteController@contato']);
});

//Grupo de rotas para o blog
Route::group(['namespace'=> 'Sistema', 'middleware' => 'auth', 'as' => 'sistema.', 'prefix' => 'admin'], function() {

    //Rota para entrar no admin
    Route::get('/', ['as' => 'index', 'uses' => 'AdminController@index']);

    //Rotas para os Posts
    Route::resource('posts', 'PostController');
    Route::get('posts/alternarDestaque/{id}', ['as' => 'posts.destaque', 'uses' => 'PostController@alternarDestaque'] );

    //Rotas para os comentários
    Route::resource('comentarios', 'ComentarioController');

    //Rotas para as mensagens
    Route::resource('mensagens', 'MensagemController');

    //Rotas para o rodapé
    Route::resource('rodape', 'RodapeController');

    //Rotas para a lixeira
    Route::get('lixeira/restaurar/{id}', ['as' => 'lixeira.restaurar', 'uses' => 'LixeiraController@restaurar']);
    Route::get('lixeira/esvaziarLixeira', ['as' => 'lixeira.esvaziar', 'uses' => 'LixeiraController@esvaziarLixeira']);
    Route::resource('lixeira', 'LixeiraController');

    //Rota para a ajuda
    Route::get('/ajuda', ['as' => 'ajuda.index', 'uses' => 'AjudaController@index']);
});

