<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Cart;

class AuthController extends Controller
{
    /**
    * Muestra la página de login
    *
    * @return \Illuminate\Http\Response
    */
    public function showLogin()
    {
        $prevRoute = url()->previous();

        // dd($prevRoute);

        return view('auth.login', compact('prevRoute'));
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
        

        $request->validate(User::$rules_login, [
            'email.required' => 'El campo email es requerido',
            'email.max' => 'La dirección de mail no puede tener más de :max caracteres',
            'password.required' => 'El campo contraseña es requerido',
            'password.min' => 'La contraseña debe tener al menos :min caracteres'
        ]);

        $input = $request->input();

        if (!Auth::attempt(
            [
                'password' => $input['password'], 
                'email' => $input['email']
            ])
        ) {
            return redirect()->route('login')->with([
                'status' => 'E-mail y/o password incorrectos.',
                'class' => 'alert-danger'
            ]);
        }
		
		if(Auth::user()->tipo == 'huerta'){
			return redirect()->intended('/cpanel/productos');
		}elseif(Auth::user()->tipo == 'admin'){
			return redirect()->intended('/admin/estadisticas');
		}else{
            if ($input['prevRoute'] == 'http://localhost:8000/carrito') {
                return redirect()->intended('/carrito');
            }
			return redirect()->intended('/');
		}		
    }


    /**
    * Realiza el registro del usuario
    *
    * @return \Illuminate\Http\Response
    */
    public function doRegistro(Request $request)
    {   

        $request->validate(User::$rules_register, [
            'name.required' => 'El campo de nombre es requerido',
            'name.min' => 'El nombre debe tener menos de :min caracteres',
            'email.required' => 'El campo email es requerido',
            'email.max' => 'La dirección de mail no puede tener más de :max caracteres',
            'email.email' => 'La dirección de mail ingresada no es válida',
            'email.unique' => 'La dirección de correo ingresada ya se encuentra en el sistema',
            'password.required' => 'El campo contraseña es requerido',
            'password.min' => 'La contraseña debe tener al menos :min caracteres',
            'password.confirmed' =>'Las contraseñas no coinciden'
        ]);

        $input = $request->input();

        $input['tipo'] = 'cliente';
        $input['estado'] = 'activo';
        $input['password'] = \Hash::make($input['password']);
        $user = User::create($input);

        return redirect()->route('login')->with([
            'status' => 'Usuario registrado con éxito!',
            'class' => 'alert-success'
        ]);
    }


    /**
    * Realiza el logout del usuario
    *
    * @return \Illuminate\Http\Response
    */
    public function logout()
    {
        Auth::logout();
        Cart::destroy();
        return redirect('/');
    }
}