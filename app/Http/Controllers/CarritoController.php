<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
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
    Cart::destroy();

    // agrega a mano dos items al carrito
    Cart::add('2', 'Naranja', 1, 45.00);
    Cart::add('17', 'Tofu', 3, 138.90);

     return view('carrito.index');

}






}
