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

//rutas del front







// ruta de los controladores
Route::resource('products','ProductController');
Route::resource('notices','NoticesController');
Route::resource('contacts','ContactsController');


// rutas de autenticacion
Auth::routes();
Route::get('user/home', 'HomeController@index')->name('home');
