<?php

/*---------------------RUTAS DEL FRONT------------------------*/
Route::name('front.index')->get('/','FrontController@index');
Route::name('contacts.store')->post('/panel/contacts','ContactsController@store');
Route::name('front.about')->get('about','FrontController@about');
Route::name('front.product')->get('product','FrontController@product');
Route::name('front.service')->get('service','FrontController@service');
Route::name('front.contact')->get('contact','FrontController@contacto');
Route::name('front.noticia')->get('noticias','FrontController@noticia');
Route::name('front.storeContacto')->post('contactar','FrontController@storeContacto');

/*---------------------RUTAS DEL ADMIN------------------------*/
Route::group(['prefix' => 'panel', 'middleware' => 'auth'], function () {
	
	//inicio
	Route::name('panel.index')->get('/','PanelController@index');
	
	// rutas de usuario
	Route::resource('users', 'UsersController', ['except' => ['destroy']]);
	Route::name('users.destroy')->get('users/destroy/{id}','UsersController@destroy');
	
	// rutas de contacto
	Route::resource('contacts', 'ContactsController',['except' => ['destroy']]);
	Route::name('contacts.destroy')->get('contacts/destroy/{id}','ContactsController@destroy');

	// rutas de servicio
	Route::resource('services', 'ServicesController',['except' => ['destroy']]);
	Route::name('services.destroy')->get('services/destroy/{id}','ServicesController@destroy');

	// rutas de productos
	Route::resource('products', 'ProductsController',['except' => ['destroy']]);
	Route::name('products.destroy')->get('products/destroy/{id}','ProductsController@destroy');
	Route::name('eliminarImagen')->get('eliminarImagen','ProductsController@eliminarImagen');
	// rutas de noticias
	Route::resource('notices', 'NoticesController',['except' => ['destroy']]);
	Route::name('notices.destroy')->get('notices/destroy/{id}','NoticesController@destroy');
	
	// rutas de clientes
	Route::resource('clients', 'ClientsController',['except' => ['destroy']]);
	Route::name('clients.destroy')->get('clients/destroy/{id}','ClientsController@destroy');

	Route::resource('products','ProductController');
});

<<<<<<< HEAD
//rutas del front







// ruta de los controladores
Route::resource('products','ProductController');
Route::resource('notices','NoticesController');
Route::resource('contacts','ContactsController');
Route::resource('users','UserController');

// rutas de autenticacion
=======
/*---------------------RUTAS DE LOGEO------------------------*/
>>>>>>> 0533489300f9f3ff09ee99de68a4e9bb3652c7af
Auth::routes();

Route::get('auth/logout', [
	'uses' => 'Auth\LoginController@logout',
	'as'   => 'auth.logout',
	]);