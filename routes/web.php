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
	'as' => 'huertas.search',
	'uses' => 'HuertasController@showSearchResults'
]);

Route::get('search/{huerta}', [
	'as' => 'huertas.single.search',
	'uses' => 'HuertasController@showSearchResultsHuerta'
]);

Route::get('/huertas/categoria/{categoria}', [
	'as' => 'huertas.categoria',
	'uses' => 'HuertasController@huertasByCategory',
]);

Route::get('/huertas/{huerta}', [
	'as' => 'huertas.show',
	'uses' => 'HuertasController@show',
]);


/* Comentarios */

Route::put('/huertas/{huerta}/comments', [
	'as' => 'huertas.comments',
	'uses' => 'ReviewsController@store',
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

	/*Route::get('/perfil', [
		'as' => 'perfil',
		'uses' => 'PerfilController@index'
	]);*/
	
	Route::get('/perfil/pedido/{pedido}', [
		'as' => 'perfil.pedidoDetalle',
		'uses' => 'PerfilController@detallePedido'
	]);

	Route::get('/perfil', [
		'as' => 'perfil.detalle',
		'uses' => 'PerfilController@show'
	]);

	Route::get('/perfil/editar', [
		'as' => 'perfil.edit',
		'uses' => 'PerfilController@edit'
	]);

	Route::put('/perfil/{perfil}/editar', [
		'as' => 'perfil.update',
		'uses' => 'PerfilController@update'
	]);
	
	/* DIRECCIONES DEL CLIENTE*/
	Route::get('/perfil/direcciones', [
		'as' => 'perfil.direcciones',
		'uses' => 'DireccionesController@showDirecciones'
	]);
	
	Route::get('/perfil/direcciones/nuevaDireccion', [
		'as' => 'perfil.direcciones.create',
		'uses' => 'DireccionesController@createDireccion'
	]);
	
	Route::post('/perfil/direcciones/nuevaDireccion', [
		'as' => 'perfil.direcciones.store',
		'uses' => 'DireccionesController@storeDireccion'
	]);
	
	Route::get('/perfil/direcciones/{direccion}/editarDireccion', [
		'as' => 'perfil.direcciones.edit',
		'uses' => 'DireccionesController@editDireccion'
	]);
	
	Route::put('/perfil/direcciones/{direccion}/editarDireccion', [
		'as' => 'perfil.direcciones.update',
		'uses' => 'DireccionesController@updateDireccion'
	]);
	
	Route::get('/perfil/direcciones/{direccion}/eliminarDireccion', [
		'as' => 'perfil.direccion.confirmDestroyDireccion',
		'uses' => 'DireccionesController@confirmDestroyDireccion'
	]);

	Route::delete('/perfil/direcciones/{direccion}/eliminarDireccion', [
		'as' => 'perfil.direccion.destroyDireccion',
		'uses' => 'DireccionesController@DestroyDireccion'
	]);

});

// Página en mantenimiento

// Route::get('mantenimiento', function() {
// 	return view('errors.mantenimiento');
// });

// Contacto

Route::get('contacto', function() {
	return view('contacto.contacto');
});


// Cpanel

Route::middleware('auth')->group(function() {

	Route::middleware('huerta')->group(function() {

		Route::get('/cpanel', function() {
			return view('cpanel.index');
		});

		// Cpanel Productos

		Route::get('/cpanel/productos', [
			'as' => 'cpanel.productos.index',
			'uses' => 'CpanelProductosController@index'
		]);

		Route::get('/cpanel/productos/nuevo', [
			'as' => 'cpanel.productos.create',
			'uses' => 'CpanelProductosController@create'
		]);

		Route::post('/cpanel/productos/nuevo', [
			'as' => 'cpanel.productos.store',
			'uses' => 'CpanelProductosController@store'
		]);

		Route::get('/cpanel/productos/{prodcuto}', [
			'as' => 'cpanel.productos.show',
			'uses' => 'CpanelProductosController@show'
		]);

		Route::get('/cpanel/productos/{prodcuto}/editar', [
			'as' => 'cpanel.productos.edit',
			'uses' => 'CpanelProductosController@edit'
		]);

		Route::put('/cpanel/productos/{prodcuto}/editar', [
			'as' => 'cpanel.productos.update',
			'uses' => 'CpanelProductosController@update'
		]);

		Route::get('/cpanel/productos/{prodcuto}/eliminar', [
			'as' => 'cpanel.productos.confirmDestroy',
			'uses' => 'CpanelProductosController@confirmDestroy'
		]);

		Route::delete('/cpanel/productos/{prodcuto}/eliminar', [
			'as' => 'cpanel.productos.destroy',
			'uses' => 'CpanelProductosController@destroy'
		]);

		// Capnel Pedidos

		Route::get('/cpanel/pedidos', [
			'as' => 'cpanel.pedidos.index',
			'uses' => 'CpanelPedidosController@index'
		]);

		Route::get('/cpanel/pedidos/{pedido}', [
			'as' => 'cpanel.pedidos.show',
			'uses' => 'CpanelPedidosController@show'
		]);

		// Cpanel Huerta

		Route::get('/cpanel/huerta', [
			'as' => 'cpanel.huerta.index',
			'uses' => 'CpanelHuertaController@show'
		]);

		// Cpanel Perfil

		Route::get('/cpanel/perfil', [
			'as' => 'cpanel.perfil.index',
			'uses' => 'CpanelPerfilController@show'
		]);

		Route::get('/cpanel/perfil/editar', [
			'as' => 'cpanel.perfil.edit',
			'uses' => 'CpanelPerfilController@edit'
		]);

		Route::put('/cpanel/perfil/{usuario}/editar', [
			'as' => 'cpanel.perfil.update',
			'uses' => 'CpanelPerfilController@update'
		]);

	});

});


// ADMIN
Route::middleware('admin')->group(function(){
	Route::get('/admin', function() {
		return view('admin.index');
	});
	
	// listar
	Route::get('/admin/huertas', [
		'as' => 'admin.huertas',
		'uses' => 'AdminController@showHuertas'
	]);
	
	Route::get('/admin/usuarios', [
		'as' => 'admin.usuarios',
		'uses' => 'AdminController@showClientes'
	]);
	
	Route::get('/admin/pedidos', [
		'as' => 'admin.pedidos',
		'uses' => 'AdminController@showPedidos'
	]);
	
	// registrar huerta
	Route::get('/admin/huertas/nueva', [
		'as' => 'admin.huertas.create',
		'uses' => 'AdminController@createHuerta'
	]);
	
	Route::post('/admin/huertas/nueva', [
		'as' => 'admin.huertas.store',
		'uses' => 'AdminController@storeHuerta'
	]);
	
	// edit estado cliente
	Route::get('/admin/clientes/{cliente}/editarCliente', [
		'as' => 'admin.clientes.edit-cliente',
		'uses' => 'AdminController@editCliente'
	]);
	
	// actualizar estado del cliente
	Route::put('/admin/clientes/{cliente}/editarCliente', [
		'as' => 'admin.clientes.update',
		'uses' => 'AdminController@updateCliente'
	]);
	
	// edit estado pedido
	Route::get('/admin/pedidos/{pedido}/editarPedido', [
		'as' => 'admin.pedidos.edit-pedido',
		'uses' => 'AdminController@editPedido'
	]);
	
	// actualizar estado del pedido
	Route::put('/admin/pedidos/{pedido}/editarPedido', [
		'as' => 'admin.pedidos.update',
		'uses' => 'AdminController@updatePedido'
	]);
	
	// detalle huerta
	Route::get('/admin/huertas/{huerta}', [
		'as' => 'admin.huertas.detalle-huerta',
		'uses' => 'AdminController@showHuerta'
	]);
	
	// detalle cliente
	Route::get('/admin/clientes/{cliente}', [
		'as' => 'admin.clientes.detalle-cliente',
		'uses' => 'AdminController@showCliente'
	]);
	
	// detalle pedido
	Route::get('/admin/pedidos/{pedido}', [
		'as' => 'admin.pedidos.detalle-pedido',
		'uses' => 'AdminController@showPedido'
	]);

	//estadísticas
	Route::get('/admin/estadisticas', [
		'as' => 'admin.estadisticas',
		'uses' => 'EstadisticasController@showEstadisticas'
	]);
	
});

Route::get('/carrito', [
	'as' => 'carrito.index',
	'uses' => 'CarritoController@cart'
]);

Route::get('/carrito/updetear', [
	'as' => 'carrito.updetear',
	'uses' => 'CarritoController@updetear'
]);

Route::post('/carrito/agregar', [
	'as' => 'carrito.agregar',
	'uses' => 'CarritoController@agregar'
]);

Route::get('/carrito/paso2', [
	'as' => 'carrito.paso2',
	'uses' => 'CarritoController@paso2'
]);

Route::post('/carrito/paso2', [
	'as' => 'carrito.direcciones.store',
	'uses' => 'CarritoController@storeDireccion'
]);

Route::get('/carrito/paso3', [
	'as' => 'carrito.paso3',
	'uses' => 'CarritoController@paso3'
]);

Route::get('/carrito/paso4', [
	'as' => 'carrito.paso4',
	'uses' => 'CarritoController@paso4'
]);

Route::post('/carrito/confirmacion', [
	'as' => 'carrito.confirmacion',
	'uses' => 'CarritoController@finalizar'
]);

Route::get('/carrito/verconfirmacion/{pedido}', [
	'as' => 'carrito.verconfirmacion',
	'uses' => 'CarritoController@verconfirmacion'
]);

Route::get('/carrito/chequearContenidoCarrito', [
	'uses' => 'CarritoController@chequearContenidoCarrito'
]);