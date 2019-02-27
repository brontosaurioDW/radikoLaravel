<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\EstadoPedido;
use App\Models\Huerta;
use App\Models\Usuario;
use App\Models\TipoHuerta;
use App\Models\Direccion;
use App\Models\Producto;
use App\Models\RelPedidosProductos;
use App\User;

use Storage;
use Image;
use DB;

class AdminController extends Controller
{
    public function showClientes(){

		// Traemos todos los usuarios clientes
		$usuarios = Usuario::where('tipo', 'cliente')->get();

		return view('admin.usuarios', compact('usuarios'));
	}
	
	public function showHuertas(){

		// Traemos todas las huertas
		$huertas = Huerta::all();

		return view('admin.huertas', compact('huertas'));
	}
	
	public function showPedidos(){

		// Traemos todos los pedidos
		$pedidos = Pedido::all();

		return view('admin.pedidos', compact('pedidos'));
	}
	
	public function createHuerta()
    {
		// Vista form para registrar huerta
		$tipos = TipoHuerta::all();
		return view('admin.create-huerta', compact('tipos'));
    }
	
	public function storeHuerta(Request $request)
    {
		// Registro de huerta
		$inputData = $request->all();
		
		$request->validate(Huerta::$rules, [
			'huerta.required' => 'El nombre de la huerta no puede estar vacio.',
			'huerta.max' => 'El nombre de la huerta puede tener como máximo 100 caracteres.',
			'cuit.required' => 'El cuit no puede estar vacío.',
			'cuit.max' => 'El cuit puede tener como máximo 11 caracteres.',
			'razon_social.required' => 'La Razón Social de la huerta no puede estar vacia.',
			'direccion.max' => 'La dirección puede tener como máximo 100 caracteres.',
			'telefono.required' => 'Debe completar con un teléfono.',
			'telefono.max' => 'El teléfono puede tener como máximo 30 caracteres.'
		]);
		
		Huerta::create($inputData);
		
		return redirect()->route('admin.huertas' )
        ->with(
            [
                'status' => 'La huerta se cargó exitosamente.',
                'class' => 'success'
            ]
        );
    }
	
	 public function showHuerta($id)
    {
		// detalle de la huerta
        $huerta = Huerta::find($id);

        return view('admin.detalle-huerta', compact('huerta'));
    }
	
	public function showCliente($id)
    {
		// detalle del cliente
        $cliente = Usuario::find($id);
		$direcciones = Direccion::where('usuario_id', $cliente)->get();

        return view('admin.detalle-cliente', compact('cliente', 'direcciones'));
    }
	
	public function showPedido($id)
    {
		// detalle del pedido
        $pedido = Pedido::find($id);
		$productos = Producto::all();
        $productos_pedido = RelPedidosProductos::where('pedido_id', $pedido->id)->get();

        return view('admin.detalle-pedido', compact('pedido', 'productos', 'productos_pedido'));
    }
	
	public function editCliente($cliente)
    {
		// edicion del cliente
		$cliente = Usuario::find($cliente);
        return view('admin.edit-cliente', compact('cliente'));
    }
	
	public function updateCliente(Request $request, $id){
		
		// actualización del estado del cliente
		$inputData = $request->input();
				
		$cliente = Usuario::find($id);
		$cliente->update($inputData);
		
		return redirect()->route('admin.usuarios' )
        ->with(
            [
                'status' => 'El estado de ' .$cliente->name. ' ' .$cliente->last_name. ' se actualizó correctamente.',
                'class' => 'success'
            ]
        );
	}
}
