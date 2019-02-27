<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EstadisticasController extends Controller
{
    public function showEstadisticas(){

		// Pedidos totales
		$totalPedidos = DB::table('pedidos')->count();
		
		// Usuarios totales
		$totalUsuarios = DB::table('users')->count();
		
		// Huertas totales
		$totalHuertas = DB::table('huertas')->count();
		
		// Clientes totales
		$totalClientes = DB::table('users')->where('tipo', 'cliente')->count();
		
		// Estados usuarios CORREGIR
		$estadosHuertas = DB::select("SELECT COUNT(id) as total, estado FROM users GROUP BY estado");
		/*$estadosHuertas = DB::select("SELECT count(id) as total, users.estado FROM huertas LEFT JOIN users ON huertas.usuario_id = users.id GROUP BY users.estado");*/
		
		// Tipos de huertas
		$totalBasicas = DB::table('huertas')->where('tipo_huerta_id', '1')->count();
		$totalPremium = DB::table('huertas')->where('tipo_huerta_id', '2')->count();
		
		// Últimas huertas registradas
		$ultimasHuertas = DB::select("SELECT * FROM huertas ORDER BY created_at DESC LIMIT 4");
		
		// Estados de los pedidos
		$estadosPedidos = DB::select("SELECT count(id) as total, estados_pedidos.estado FROM pedidos LEFT JOIN estados_pedidos ON pedidos.id_estado_pedido = estados_pedidos.id_estado_pedido GROUP BY estados_pedidos.estado");

		return view('admin.estadisticas', compact(
			'totalPedidos', 
			'totalUsuarios', 
			'totalHuertas', 
			'totalClientes',
			'estadosHuertas',
			'totalBasicas',
			'totalPremium',
			'ultimasHuertas',
			'estadosPedidos'
			));
	}
}
