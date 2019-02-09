<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pedido;
use App\User;

use Storage;
use Image;
use DB;


class CpanelPerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        return view('cpanel.perfil.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('cpanel.perfil.edit');
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

        return redirect()->route('cpanel.perfil.index', $id )
        ->with(
            [
              'status' => 'La usuario <b>' . $usuario->name . '</b> fue editado exitosamente.',
              'class' => 'warning'
          ]
      );

        // return view('cpanel.perfil.index');
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
