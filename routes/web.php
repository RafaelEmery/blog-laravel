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

    //Rotas para os Posts
    Route::resource('posts', 'PostController');

    /*
    //Rotas para a Lixeira
    Route::resource('lixeira', 'LixeiraController');
    Route::get('lixeira/restaurar/{id}', ['as' => 'lixeira.restaurar', 'uses' => 'LixeiraController']);

    //Rotas para o Rodapé
    Route::resource('rodape', 'RodapeController');

    //Rotas para a Ajuda
    Route::resource('ajuda', 'AjudaController');
    */
});



