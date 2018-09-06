<?php

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

Route::get('teste2', ['as'=>'teste2a', 'uses'=>'TesteController@teste2a']);
Route::post('teste2', ['as'=>'teste2b', 'uses'=>'TesteController@teste2b']);#Nova Senha
