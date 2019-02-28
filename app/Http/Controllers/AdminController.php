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
		// edicion del cliente (estado)
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
	
	public function editPedido($pedido)
    {
		// edicion del pedido (estado)
		$estados = EstadoPedido::all();
		$pedido = Pedido::find($pedido);
        return view('admin.edit-pedido', compact('estados', 'pedido'));
    }
	
	public function updatePedido(Request $request, $id){
		
		// actualización del estado del pedido
		$inputData = $request->input();
				
		$pedido = Pedido::find($id);
		$pedido->update($inputData);
		
		return redirect()->route('admin.pedidos' )
        ->with(
            [
                'status' => 'El estado del pedido n° ' .$pedido->id. ' se actualizó correctamente.',
                'class' => 'success'
            ]
        );
	}
	
	public function editHuerta($huerta)
    {
		// edicion de la huerta (estado)
		$huerta = Huerta::find($huerta);
        return view('admin.edit-huerta', compact('huerta'));
    }
	
	public function updateHuerta(Request $request, $id){
		
		// actualización del estado del usuario huerta
		$inputData = $request->input();
				
		$huerta = Huerta::find($id);
		$idUsuario = $huerta['usuario_id'];
		
		$estadoUsuario = $inputData['estado'];
		
		$usuario = Usuario::find($idUsuario);
		$usuario->update($inputData);
		
		return redirect()->route('admin.huertas' )
        ->with(
            [
                'status' => 'El estado de la huerta '.$huerta->huerta.' se actualizó correctamente.',
                'class' => 'success'
            ]
        );
	}
}
