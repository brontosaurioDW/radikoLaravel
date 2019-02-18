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
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\UnidadDeMedida;
use App\Models\Review;
use App\Models\Disponibilidad;

class CpanelProductosController extends Controller
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
        $productos = Producto::with(['unidadDeMedida','categoria'])->where('huerta_id', $huertaId)->get();
        return view('cpanel.productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $categorias = Categoria::all();
        $unidades = UnidadDeMedida::all();
        return view('cpanel.productos.create', compact('categorias', 'unidades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputData = $request->input();

        $request->validate(Producto::$rules, [
            'producto.required' => 'El nombre del producto no puede estar vacío.',       
            'producto.min' => 'El nombre del producto debe tener al menos :min caracteres.',       
            'descripcion.required' => 'La descripción no puede estar vacía.',       
            'marca.required' => 'La marca del producto no puede estar vacía.',       
            'precio.required' => 'El precio es requerido.',       
            'foto.image' => 'La imaen debe tener un formato valido. .jpg o .png.',       
        ]);


        if($request->hasFile('foto')) {
            $file = $request->file('foto');
            $image = Image::make($file);
            $image->resize(500, 500, function ($constraint) {
                $constraint->aspectRatio();
            });
            $fotoName = $request->file('foto')->hashName('');
            $filepath = $request->file('foto')->hashName('public/images/productos'); 
            Storage::put($filepath, (string) $image->encode());   
            $inputData['foto'] = $fotoName;
        } else {
            $inputData['foto'] = 'default.jpg';
        }

        $userId = auth()->user()->id;
        $usuarioHuerta = Usuario::with('huerta')->get()->find($userId);
        $huertaId = $usuarioHuerta->huerta->id;

        $inputData['estado'] = '1';
        $inputData['huerta_id'] = $huertaId;

        Producto::create($inputData);   

        // $usuario->update($inputData);

        if(isset($file) && !empty($file)) {
            Storage::delete($file);
        }

        return redirect()->route('cpanel.productos.index' )
        ->with(
            [
                'status' => 'El producto <b>' . $inputData['producto'] . '</b> se ha creado exitosamente.',
                'class' => 'success'
            ]
        );

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::with(['unidadDeMedida','categoria'])->get()->find($id);

        return view('cpanel.productos.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorias = Categoria::all();
        $unidades = UnidadDeMedida::all();
        $producto = Producto::with(['unidadDeMedida','categoria'])->get()->find($id);

        return view('cpanel.productos.edit', compact('producto', 'categorias', 'unidades'));
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
        $inputData = $request->input();

        $request->validate(Producto::$rules, [
            'producto.required' => 'El nombre del producto no puede estar vacío.',       
            'producto.min' => 'El nombre del producto debe tener al menos :min caracteres.',       
            'descripcion.required' => 'La descripción no puede estar vacía.',       
            'marca.required' => 'La marca del producto no puede estar vacía.',       
            'precio.required' => 'El precio es requerido.',       
            'foto.image' => 'La imaen debe tener un formato valido. .jpg o .png.',       
        ]);


        if($request->hasFile('foto')) {
            $file = $request->file('foto');
            $image = Image::make($file);
            $image->resize(500, 500, function ($constraint) {
                $constraint->aspectRatio();
            });
            $fotoName = $request->file('foto')->hashName('');
            $filepath = $request->file('foto')->hashName('public/images/productos'); 
            Storage::put($filepath, (string) $image->encode());   
            $inputData['foto'] = $fotoName;
        }

        $userId = auth()->user()->id;
        $usuarioHuerta = Usuario::with('huerta')->get()->find($userId);
        $huertaId = $usuarioHuerta->huerta->id;

        $inputData['estado'] = '1';
        $inputData['huerta_id'] = $huertaId;

        $producto = Producto::find($id);

        $producto->update($inputData);


        if(isset($file) && !empty($file)) {
            Storage::delete($file);
        }

        return redirect()->route('cpanel.productos.index' )
        ->with(
            [
                'status' => 'El producto <b>' . $inputData['producto'] . '</b> se editóa exitosamente.',
                'class' => 'success'
            ]
        );
    }


    /**
     * Confirm removing the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function confirmDestroy($id)
    {
        $producto = Producto::find($id);

        return view('cpanel.productos.confirm-destroy', compact('producto'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::find($id);

        $foto = $producto->foto;
        if ($foto) {
            Storage::delete($foto);
        }

        $producto->delete();

        return redirect()->route('cpanel.productos.index' )
        ->with(
            [
                'status' => 'El producto <b>' . $producto->producto . '</b> se eliminó exitosamente.',
                'class' => 'success'
            ]
        );

    }
}
