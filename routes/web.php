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
Route::resource('articulo','ArticuloController');
Route::resource('almacen','AlmacenController');
Route::resource('unidad','UnidadController');
Route::resource('transaccionArticulo','TransaccionArticuloController');
Route::resource('user', 'UserController');
Route::get('user/updatestate/{id}', 'UserController@updateState')->name('user.updateState');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/bitacora', 'HomeController@getBitacora')->name('bitacora.logs');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
