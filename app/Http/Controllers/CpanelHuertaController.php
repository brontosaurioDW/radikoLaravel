<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pedido;
use App\User;

use Storage;
use Image;
use DB;

use App\Models\Huerta;
use App\Models\Usuario;
use App\Models\TipoHuerta;
use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Review;
use App\Models\Disponibilidad;

// use Illuminate\Support\Facades\DB;

class CpanelHuertaController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $userId = auth()->user()->id;
        $usuarioHuerta = Usuario::with('huerta')->get()->find($userId);
        return view('cpanel.huerta.index', compact('usuarioHuerta'));
    }
}
