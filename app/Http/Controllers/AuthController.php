<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class AuthController extends Controller
{
    /**
    * Muestra la página de login
    *
    * @return \Illuminate\Http\Response
    */
    public function showLogin()
    {
        return view('auth.login');
    } 


    /**
    * Muestra la página de registro
    *
    * @return \Illuminate\Http\Response
    */
    public function showRegistro()
    {
        return view('auth.registro');
    }


    /**
    * Muestra el mensaje de la página de regsitro
    *
    * @return \Illuminate\Http\Response
    */
    public function showRegistroMensaje()
    {
        return view('auth.registro-mensaje');
    }


    /**
    * Realiza la autenticación del login
    *
    * @return \Illuminate\Http\Response
    */
    public function doLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|max:255',
            'password' => 'required|min:3',
        ]);

        $input = $request->input();

        if (!Auth::attempt(
          [
            'password' => $input['password'], 
            'email' => $input['email']
        ])) {

            return redirect()->route('login')
            ->withInput()
            ->with('status', 'E-mail y/o password incorrectos.');
        }

        return redirect()->intended('/');
    }


    /**
    * Realiza el registro del usuario
    *
    * @return \Illuminate\Http\Response
    */
    public function doRegistro(Request $request)
    {
        $request->validate([
            //'name' => 'required|min:2|max:100',
            'email' => 'required|max:255|unique:users',
            'password' => 'required|min:3|confirmed',
        ]);

        $input = $request->input();

        $input['password'] = \Hash::make($input['password']);
        $user = User::create($input);


        return redirect('/')
            ->with('status', 'Usuario registrado con éxito!');
    }

    /**
    * Realiza el logout del usuario
    *
    * @return \Illuminate\Http\Response
    */
    public function logout()
    {
        Auth::logout();
        return redirect('/');
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
      //
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