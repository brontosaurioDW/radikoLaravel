<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Producto;
use Cart;


class CarritoController extends Controller
{


    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */


public function cart() {

   

    // vacia el carrito
    //Cart::destroy();

    // agrega a mano dos items al carrito
    //Cart::add('2', 'Naranja', 1, 45.00);
    //Cart::add('17', 'Tofu', 3, 138.90);

    
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

    if (Request::get('product_id') && (Request::get('borrar')) == 1) {


        $id    = Request::get('product_id');
        $rows  = Cart::content();
        $rowId = $rows->where('id', $id)->first()->rowId;

        Cart::remove($rowId);

    }
    if((Request::get('vaciar')) == 1) {


        Cart::destroy();

    }


    $cart = Cart::content();


    return view('carrito.index');

}

public function agregar() {

    if (Request::isMethod('post')) {
            $product_id = Request::get('product_id');
            $product_qty = Request::get('product_qty');
            $product_huerta = Request::get('huerta_id');
            $product_unidad = Request::get('unidad');
            $product = Producto::find($product_id);


            //Cart::add(array('id' => $product_id, 'name' => $product->producto, 'qty' => $product_qty, 'price' => $product->precio));

            Cart::add([
                'id' => $product_id, 
                'name' => $product->producto, 
                'qty' => $product_qty, 
                'price' => $product->precio,
                'options' => ['unidad' => $product_unidad]
            ]);

        }


        $cart = Cart::content();
        return view('carrito.index');
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



}



