<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Huerta;
use App\Models\TipoHuerta;

use Illuminate\Support\Facades\DB;

class HuertasController extends Controller
{

  /**
   * Front - Muestra la página principal
   *
   * @return \Illuminate\Http\Response
   */
  public function showPrincipal()
  {

    // $huertas = Huerta::All();
    // $huertas = Huerta::where('id', '1')->paginate(2);
    // $huertas = DB::table('huertas')->simplePaginate(2);

    $huertas = Huerta::with('tipoHuerta')->get(); 

    // dd($huertas);

    // return view('principal', compact('huertas'));

    return view('principal', [
      'huertas' => $huertas
    ]);


  }  

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {

    $huertas = DB::table('huertas')->simplePaginate(2);

    return view('huertas.index', compact('huertas'));
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
    return view('huertas.show');
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
