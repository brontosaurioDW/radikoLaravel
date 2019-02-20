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

class DireccionesController extends Controller
{
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
	
	public function updateDireccion(Request $request, $id){
		
		$inputData = $request->input();
		
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
		
		$direccion = Direccion::find($id);
		$direccion->update($inputData);
		
		return redirect()->route('perfil.direcciones' )
        ->with(
            [
                'status' => 'La dirección se actualizó correctamente.',
                'class' => 'success'
            ]
        );
	}
	
	public function confirmDestroyDireccion($id)
    {
        $direccion = Direccion::find($id);

        return view('perfil.confirm-destroy-direccion', compact('direccion'));
    }
	
	public function destroyDireccion($id)
    {
        $direccion = Direccion::find($id);

        $direccion->delete();

        return redirect()->route('perfil.direcciones' )
        ->with(
            [
                'status' => 'La dirección se eliminó correctamente.',
                'class' => 'success'
            ]
        );

    }
	
}
