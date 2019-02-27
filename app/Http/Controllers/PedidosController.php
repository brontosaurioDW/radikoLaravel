<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Cookie\CookieJar;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Redirect;
use App\Models\Pedido;
use App\Models\Producto;
use App\Models\RelPedidosProductos;
use App\Models\Huerta;
use App\Models\Direccion;

use App;
use Config;
use Cart;

use Storage;
use Image;
use DB;

class PedidosController extends Controller
{

}
