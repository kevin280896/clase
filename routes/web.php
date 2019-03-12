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

Route::get('/informacion', 'PaginasController@informacion');

Route::get('/contacto','PaginasController@contacto');

Route::get('/bienvenida', 'PaginasController@bienvenida');

Route::get('/equipo', 'PaginasController@equipo');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/documentos', 'DocumentoController@index')->name('documentos.index');
