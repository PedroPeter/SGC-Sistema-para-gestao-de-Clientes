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
    return view('users.index');
});
Route::resource('gestao/cliente', 'UserController');
Route::get('gestao/clientes/searchdata', 'UserController@searchData')->name('search.data');
Route::post('gestao/clientes/search', 'UserController@search')->name('search');
Route::post('gestao/clientes/actualizar', 'UserController@actualizar')->name('cliente.update');
Route::post('gestao/clientes/remover', 'UserController@del')->name('cliente.remover');

