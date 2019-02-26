<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EstadisticasController extends Controller
{
    public function showEstadisticas(){

		// Pedidos totales
		$totalpedidos = DB::table('pedidos')->count();
		
		// Usuarios totales
		$totalusuarios = DB::table('users')->count();
		
		// Huertas totales
		$totalhuertas = DB::table('huertas')->count();
		
		// Clientes totales
		$totalclientes = DB::table('users')->where('tipo', 'cliente')->count();

		return view('admin.estadisticas', compact(
			'totalpedidos', 
			'totalusuarios', 
			'totalhuertas', 
			'totalclientes'
			));
	}
}
