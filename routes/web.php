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

Route::get('/', [
	'as' => 'huertas.principal',
	'uses' => 'HuertasController@showPrincipal',
]);

/* --- Huertas */

Route::get('huertas', [
	'as' => 'huertas',
	'uses' => 'HuertasController@index'
]);

Route::get('search', [
	'as' => 'search',
	'uses' => 'HuertasController@showSearchResults'
]);

Route::get('/huertas/{receta}', [
	'as' => 'huertas.show',
	'uses' => 'HuertasController@show',
]);


/* Comentarios */

Route::put('/huertas/{receta}/comments', [
    'as' => 'huertas.comments',
    'uses' => 'ComentariosController@store',
]);


/* --- Productos */

Route::get('productos', [
	'as' => 'productos.index',
	'uses' => 'ProductosController@index',
]);


/* --- Legales */

Route::get('/legales/faq', function () {
	return view('legales.faq');
});

Route::get('/legales/politica-privacidad', function () {
	return view('legales.politica-privacidad');
});

Route::get('/legales/terminos-condiciones', function () {
	return view('legales.terminos-condiciones');
});




/* --- Auth */

Route::get('login', [
	'as' => 'login',
	'uses' => 'AuthController@showLogin'
]);

Route::get('/registro', [
	'as' => 'registro',
	'uses' => 'AuthController@showRegistro'
]);

Route::get('/registro-mensaje', [
	'as' => 'registro-mensaje',
	'uses' => 'AuthController@showRegistroMensaje'
]);

Route::post('login', [
	'as' => 'auth.doLogin',
	'uses' => 'AuthController@doLogin'
]);

Route::post('registro', [
	'as' => 'auth.doRegistro',
	'uses' => 'AuthController@doRegistro'
]);

Route::get('logout', [
	'as' => 'logout',
	'uses' => 'AuthController@logout'
]);


/* --- Perfil */

Route::middleware('auth')->group(function() {

	Route::get('/perfil', [
		'as' => 'perfil',
		'uses' => 'PerfilController@index'
	]);

	Route::get('/perfil/{perfil}', [
		'as' => 'perfil.detalle',
		'uses' => 'PerfilController@show'
	]);

	Route::get('/perfil/{perfil}/editar', [
		'as' => 'perfil.edit',
		'uses' => 'PerfilController@edit'
	]);

	Route::put('/perfil/{perfil}/editar', [
		'as' => 'perfil.update',
		'uses' => 'PerfilController@update'
	]);

});

// Route::middleware('auth')->group(function() {

// 	Route::get('/perfil', [
// 		'as' => 'perfil',
// 		'uses' => 'PerfilController@lindex'
// 	]);

// });







// -------------------------------

Route::get('/recetas', [
	'as' => 'recetas',
	'uses' => 'FrontController@index',
]);

Route::get('/recetas/{receta}', [
	'as' => 'recetas.showFrontRecetas',
	'uses' => 'FrontController@showFrontRecetas',
]);

Route::get('/contacto', function () {
	return view('contacto');
});


// Cpanel

Route::middleware('auth')->group(function() {

// Recetas

	Route::get('/cpanel/recetas', [
		'as' => 'recetas.index',
		'uses' => 'RecetasController@index',
	]);

	Route::get('/cpanel/recetas/crear', [
		'as' => 'recetas.create',
		'uses' => 'RecetasController@create',
	]);

	Route::post('/cpanel/recetas/crear', [
		'as' => 'recetas.store',
		'uses' => 'RecetasController@store',
	]);

	Route::get('/cpanel/recetas/{receta}', [
		'as' => 'recetas.show',
		'uses' => 'RecetasController@show',
	]);

	Route::get('/cpanel/recetas/{receta}/editar', [
		'as' => 'recetas.edit',
		'uses' => 'RecetasController@edit',
	]);

	Route::put('/cpanel/recetas/{receta}/editar', [
		'as' => 'recetas.update',
		'uses' => 'RecetasController@update',
	]);

	Route::get('/cpanel/recetas/{receta}/eliminar', [
		'as' => 'recetas.confirmDestroy',
		'uses' => 'RecetasController@confirmDestroy',
	]);

	Route::delete('/cpanel/recetas/{receta}/eliminar', [
		'as' => 'recetas.destroy',
		'uses' => 'RecetasController@destroy',
	]);


// Categorías

	Route::get('/cpanel/categorias', [
		'as' => 'categorias.index',
		'uses' => 'CategoriasController@index',
	]);

	Route::post('/cpanel/categorias/crear', [
		'as' => 'categorias.store',
		'uses' => 'CategoriasController@store',
	]);

	Route::get('/cpanel/categorias/{categoria}/editar', [
		'as' => 'categorias.edit',
		'uses' => 'CategoriasController@edit',
	]);

	Route::put('/cpanel/categorias/{categoria}/editar', [
		'as' => 'categorias.update',
		'uses' => 'CategoriasController@update',
	]);

	Route::get('/cpanel/categorias/{categoria}/eliminar', [
		'as' => 'categorias.confirmDestroy',
		'uses' => 'CategoriasController@confirmDestroy',
	]);

	Route::delete('/cpanel/categorias/{categoria}/eliminar', [
		'as' => 'categorias.destroy',
		'uses' => 'CategoriasController@destroy',
	]);


// Perfil

	Route::get('/cpanel/perfil', function() {
		return view('cpanel.perfil');
	});

});