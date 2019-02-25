<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Cookie\CookieJar;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Redirect;
use App\Models\RelPedidosProductos;
use App\Models\Pedido;
use App\Models\Producto;
use App\Models\Huerta;
use App\Models\Direccion;

use App;
use Config;
use Cart;

use Storage;
use Image;
use DB;


class CarritoController extends Controller
{

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function cart() {

        // aumenta la cantidad del producto
        if (Request::get('product_id') && (Request::get('increment')) == 1) {
            $id    = Request::get('product_id');
            $rows  = Cart::content();
            $rowId = $rows->where('id', $id)->first()->rowId;

            $item = Cart::get($rowId);

            Cart::update($rowId, $item->qty + 1);
        }

        // disminuye la cantidad del producto
        if (Request::get('product_id') && (Request::get('decrease')) == 1) {
            $id    = Request::get('product_id');
            $rows  = Cart::content();
            $rowId = $rows->where('id', $id)->first()->rowId;

            $item = Cart::get($rowId);

            Cart::update($rowId, $item->qty - 1);
        }

        // borra el producto del carrito
        if (Request::get('product_id') && (Request::get('borrar')) == 1) {
            $id    = Request::get('product_id');
            $rows  = Cart::content();
            $rowId = $rows->where('id', $id)->first()->rowId;

            Cart::remove($rowId);
        }

        // vacia el carrito
        if((Request::get('vaciar')) == 1) {

            Cart::destroy();
        }

        $cart = Cart::content();

        return view('carrito.index');
    }


    // agrega un producto al carrito
    public function agregar(HttpRequest $request) {

        $product_id     = $request->input('product_id');
        $product_qty    = $request->input('product_qty');
        $huerta_id      = $request->input('huerta_id');
        $huerta_nombre  = $request->input('huerta_nombre');
        $product_unidad = $request->input('unidad');
        
        $product = Producto::find($product_id);

        Cart::add([
            'id' => $product_id, 
            'name' => $product->producto, 
            'qty' => $product_qty, 
            'price' => $product->precio,
            'options' => [
                'unidad' => $product_unidad, 
                'foto' => $product->foto, 
                'huerta' => $huerta_nombre, 
                'huerta_id' => $huerta_id
            ]
        ]);

        if ($request->ajax()) {
            return response()->json([
                'success' => 'ok'
            ]);
        } else {
            return response()->json([
                'error' => 'error',
            ]);
        }
    } 


    public function updetear() {

        $id    = Request::get('product_id');
        $rows  = Cart::content();

        $rowId = $rows->where('id', $id)->first()->rowId;

        $item = Cart::get($rowId);
        $quantity    = Request::get('quantity');

        Cart::update($rowId, $quantity);

        return view('carrito.index');
    }

    public function paso2() {
       $userId = auth()->user()->id;  
       $direcciones = Direccion::where('usuario_id', $userId)->get();   
       return view('carrito.paso2', compact('direcciones')); 
   }


    /**
     * Ingresa una nueva dirección.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeDireccion(HttpRequest $request)
    {
        $inputData = $request->all();
        
        $request->validate(Direccion::$rules, [
            'referencia.required' => 'La referencia no puede estar vacia.',
            'referencia.max' => 'La referencia puede tener como máximo 50 caracteres.',
            'calle.required' => 'El nombre de la calle no puede estar vacío.',
            'calle.max' => 'El nombre de la calle puede tener como máximo 100 caracteres.',
            'numero.required' => 'Debe indicar un número',
            'telefono.required' => 'Debe completar con un teléfono.',
            'telefono.max' => 'El teléfono puede tener como máximo 20 caracteres.',
            'aclaracion.max' => 'La referencia puede tener como máximo 255 caracteres.'
        ]);
        
        $userId = auth()->user()->id;
        $inputData['usuario_id'] = $userId;
        
        Direccion::create($inputData);
        
        return redirect()->route('carrito.paso2' )
        ->with(
            [
                'status' => 'La dirección se cargó exitosamente.',
                'class' => 'success'
            ]
        );     
    }


    public function paso3() {

        return view('carrito.paso3'); 
    }


    public function finalizar(HttpRequest $request) {
        
        if ($request->ajax()) {

            $guardarPedido = new Pedido();
            $guardarPedido->fecha_pedido        =   date('Y-m-d H:i:s');
            $guardarPedido->subtotal            =   Cart::subtotal();
            $guardarPedido->subtotal            =   Cart::subtotal();
            $guardarPedido->costo_envio         =   "130";
            $guardarPedido->total               =   Cart::total();
            $guardarPedido->usuario_id          =   auth()->user()->id;
            $guardarPedido->huerta_id           =   $request->input('huertaDelPedido');
            $guardarPedido->id_estado_pedido    =   "1";
            $guardarPedido->id_tipo_pago        =   "1";
            $guardarPedido->direccion_id        =   $request->input('direccionDelPedido');
            $guardarPedido->save();

            foreach(Cart::content() as $row) {
                $productoRel                = new RelPedidosProductos();
                $productoRel->pedido_id     = $guardarPedido->id;
                $productoRel->producto_id   = $row->id;
                $productoRel->cantidad      = $row->qty;
            }

            Cart::destroy();

            return response()->json([
                'success' => 'ok'
            ]);
        } else {
            return response()->json([
                'error' => 'error',
            ]);
        }
    }  

    public function verconfirmacion() {
        return view('carrito.confirmacion'); 
    }
}