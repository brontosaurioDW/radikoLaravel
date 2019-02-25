<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Cookie\CookieJar;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Redirect;
use App\Models\Pedido;
use App\Models\CanastaTemporal;
use App\Models\Producto;
use App\Models\Huerta;
use App;
use Config;
use Cart;


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
            /*Pedido::NombreHuertaUpdate('');*/
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

        return view('carrito.paso2'); 
    }


    public function paso3() {

        return view('carrito.paso3'); 
    }


    public function finalizar() {

        // @TO DO: mandar el pedido a la base.


        // se vacia el carrito cuando se manda el pedido

        Cart::destroy();
        /*Pedido::NombreHuertaUpdate('');*/

        return view('carrito.confirmacion'); 

    }  
}