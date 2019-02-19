<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Huerta;
use App\Models\Usuario;
use App\Models\Direccion;
use App\User;

use Storage;
use Image;
use DB;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('perfil.index');
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
    public function show()
    {
        $userId = auth()->user()->id;
		/*$pedidosPendientes = DB::table('pedidos')->where('usuario_id', $userId)->whereIn('id_estado_pedido', [1, 2])->get(); //pedidos pendiente de entrega y de pago
		$pedidosRealizados = DB::table('pedidos')->where('usuario_id', $userId)->where('id_estado_pedido', 3)->get(); //pedidos entregados*/
		
		$pedidosPendientes = Pedido::where('usuario_id', $userId)->whereIn('id_estado_pedido', [1, 2])->get();
		$pedidosRealizados = Pedido::where('usuario_id', $userId)->where('id_estado_pedido', 3)->get();
		
        return view('perfil.index', compact('pedidosPendientes', 'pedidosRealizados'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('perfil.edit');
    }
	

    public function detallePedido($pedido)
    {
        $userId = auth()->user()->id;
        $pedido = Pedido::where('usuario_id', $userId)->find($pedido);
        return view('perfil.detalle-pedido', compact('pedido'));
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
        $request->validate(User::$rules_edit, [
            'name.required' => 'El nombre es requerido.',
            'name.min' => 'El nombre debe tener al menos :min caracteres.',
            'foto.image' => 'Debe seleccionar un archivo .jpg o .png'
        ]);

        $inputData = $request->input();

        $usuario = User::find($id);

        if($request->hasFile('foto')) {
            $file = $request->file('foto');
            $image = Image::make($file);
            $image->resize(500, 500, function ($constraint) {
                $constraint->aspectRatio();
            });
            $fotoName = $request->file('foto')->hashName('');
            $filepath = $request->file('foto')->hashName('public/images/usuarios'); 
            Storage::put($filepath, (string) $image->encode());   
            $inputData['foto'] = $fotoName;
        } 

        $usuario->update($inputData);

        if(isset($file) && !empty($file)) {
            Storage::delete($file);
        }

        return redirect()->route('perfil.detalle', $id )
        ->with(
            [
              'status' => 'La usuario <b>' . $usuario->name . '</b> fue editado exitosamente.',
              'class' => 'warning'
          ]
      );
    }

	// TODO LO REFERENTE A DIRECCIONES //
	
	public function showDirecciones()
    {
        $userId = auth()->user()->id;	
		$direcciones = Direccion::where('usuario_id', $userId)->get();	
		
        return view('perfil.direcciones', compact('direcciones'));
    }
	
	public function createDireccion()
    {
		return view('perfil.create-direccion');
    }
	
	public function storeDireccion(Request $request)
    {
		$inputData = $request->all();
		
		$request->validate(Direccion::$rules, [
			'referencia.min' => 'La referencia puede tener como mínimo 3 caracteres.',
			'referencia.max' => 'La referencia puede tener como máximo 50 caracteres.',
			'calle.required' => 'El nombre de la calle no puede estar vacío.',
			'calle.max' => 'El nombre de la calle puede tener como máximo 100 caracteres.',
			'numero.required' => 'Debe indicar un número',
			'telefono.max' => 'El teléfono puede tener como máximo 20 caracteres.',
			'aclaracion.max' => 'La referencia puede tener como máximo 255 caracteres.'
		]);
		
		$userId = auth()->user()->id;
		$inputData['usuario_id'] = $userId;
		
		Direccion::create($inputData);
		
		return redirect()->route('perfil.direcciones' )
        ->with(
            [
                'status' => 'La dirección se cargó exitosamente.',
                'class' => 'success'
            ]
        );
    }
	
	public function editDireccion($direccion)
    {
		$direccion = Direccion::find($direccion);
        return view(
			'perfil.edit-direccion', 
			compact('direccion'));
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
