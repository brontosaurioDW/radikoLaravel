<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Storage;
use Image;
use DB;

use App\User;

use App\Models\Huerta;
use App\Models\Usuario;
use App\Models\TipoHuerta;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\UnidadDeMedida;
use App\Models\Review;
use App\Models\Disponibilidad;
use App\Models\Pedido;
use App\Models\RelPedidosProductos;

class CpanelPedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = auth()->user()->id;
        $usuarioHuerta = Usuario::with('huerta')->get()->find($userId);
        $huertaId = $usuarioHuerta->huerta->id;
        $pedidos = Pedido::where('huerta_id', $huertaId)->get();
        return view('cpanel.pedidos.index', compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $pedido = Pedido::find($id);
        $productos = Producto::all();
        $productos_pedido = RelPedidosProductos::where('pedido_id', $pedido->id)->get();
        return view('cpanel.pedidos.show', compact('pedido', 'productos', 'productos_pedido'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
