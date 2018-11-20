<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Huerta;
use App\Models\TipoHuerta;
use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Review;

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

    $huertasDestacadas = Huerta::All()->where('destacado', true);
    $categorias = Categoria::All();
    $reviews = Review::selectRaw('round(avg(stars),1) as stars, huerta_id')->groupBy('huerta_id')->get();

    // $huertas = Huerta::where('id', '1')->paginate(2);
    // $huertas = DB::table('huertas')->simplePaginate(2);

    // $huertas = Huerta::with('tipoHuerta')->get(); 

    // dd($huertas);

    // return view('principal', compact('huertas'));

    return view( 'principal', compact('huertasDestacadas', 'categorias', 'reviews') );
  } 


  /**
   * Front - Muestra los resultados de busqueda
   *
   * @return \Illuminate\Http\Response
   */
  public function showSearchResults(Request $request)
  {
    // Gets the query string from our form submission 

    $inputData = $request->get('search');

    $categorias = Categoria::All();
    $reviews = Review::selectRaw('round(avg(stars),1) as stars, huerta_id')->groupBy('huerta_id')->get();


    //$query = Request::input('search'); 
    //dd($query);
    // Returns an array of articles that have the query string located somewhere within 
    // our articles titles. Paginates them so we can break up lots of search results.

    //$productos = DB::table('productos')->where('producto', 'LIKE', '%' . $inputData . '%')->get();

    $productos =  Producto::with('unidadDeMedida')->where('producto', 'LIKE', '%' . $inputData . '%')->get();

    //$productos = Producto::with('unidadDeMedida')->get()->where('huerta_id', $id);


    //$huertas = Huerta::with('productos')->where('producto', 'LIKE', '%' . $inputData . '%');

    //$huertas = Huerta::with('productos')->where('producto', 'LIKE', '%' . $inputData . '%');

    //$huertas = Huerta::with('productos')->paginate(3);
    $huertas = DB::table('huertas')->paginate(3);

    //dd($productos);

    return view('huertas.search', compact('productos', 'categorias', 'reviews', 'huertas', 'inputData'));

  }


  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {

    $huertas = DB::table('huertas')->paginate(6);
    $categorias = Categoria::All();
    $comentarios = Review::All()->where('stars', '>', 3);
    // $calificacion = Review::All()->groupBy('huerta_id');
    $reviews = Review::selectRaw('round(avg(stars),1) as stars, huerta_id')->groupBy('huerta_id')->get();

    // dd($calificacion);
    //dd($comentarios);

    // @foreach($calificacion as $cali)
    // @if ($cali->huerta_id == $huerta->id)
    // {{ $cali->stars}}
    // @endif
    // @endforeach

    return view('huertas.index', compact('huertas', 'categorias','reviews'));
  }


  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function huertasByCategory( $id )
  {

    //$huertas = DB::table('huertas')->where('categoria', $id)->paginate(6);
    $huertas = DB::table('huertas')->paginate(6);

    //dd($huertas);

    $categorias = Categoria::All();
    $comentarios = Review::All()->where('stars', '>', 3);
    // $calificacion = Review::All()->groupBy('huerta_id');
    $reviews = Review::selectRaw('round(avg(stars),1) as stars, huerta_id')->groupBy('huerta_id')->get();

    // dd($calificacion);
    //dd($comentarios);

    // @foreach($calificacion as $cali)
    // @if ($cali->huerta_id == $huerta->id)
    // {{ $cali->stars}}
    // @endif
    // @endforeach

    return view('huertas.index', compact('huertas', 'categorias','reviews'));
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
    $huerta = Huerta::find($id);

    $productos = Producto::with('unidadDeMedida')->get()->where('huerta_id', $id);

    return view('huertas.show', compact('huerta', 'productos'));
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
