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
Route::group(['namespace'=> 'Sistema', 'as' => 'sistema.', 'prefix' => 'sistema'], function () {

    Route::resource('blog', 'PostController');
});

Route::get('/posts', 'PostController@index');
