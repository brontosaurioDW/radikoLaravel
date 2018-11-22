<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Models\Usuario;
use App\user;

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
    public function show($id)
    {
        $usuario = User::find($id);
        return view('perfil.index', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = User::find($id);
        return view('perfil.edit', compact('usuario'));
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
        // $request->validate(Receta::$rules_edit, [
        //     'titulo.required' => 'El título de la receta no puede estar vacío.',
        //     'titulo.min' => 'El título de la receta debe tener al menos :min caracteres.',
        //     'ingredientes.required' => 'Debés ingresar los ingredientes',
        //     'preparacion.required' => 'Debés ingresar la preparación'
        // ]);    



        $inputData = $request->input();

        //dd($inputData);
        $usuario = User::find($id);

        $usuario->update($inputData);

        //dd($inputData);
        //dd($usuario);

        return redirect()->route('perfil.detalle', $id )
        ->with(
            [
              'status' => 'La usuario <b>' . $usuario->name . '</b> fue editado exitosamente.',
              'class' => 'warning'
          ]
      );

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
