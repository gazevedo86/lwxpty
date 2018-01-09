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



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/cadastroEntidade', 'controllerEntidade@index')->name('cadastroEntidade');
Route::post('/cadNovaEntidade', 'controllerEntidade@store');

Route::post('/escolheEntidadeAtiva','HomeController@escolheEntidadeAtiva')->name('escolheEntidadeAtiva');

Route::get("/adminEntidade/{id}", 'controllerEntidade@adminEntidade')->name('adminEntidade');
Route::post("/insereConfiguracao/{id}/area/{string}", 'controllerConfiguracao@update')->name('insereConfiguracao');


Route::get("/eventos", 'controllerEventos@index')->name('eventos');
Route::get('/ajaxListaMunicipio','controllerConfiguracao@listaMunicipio');
