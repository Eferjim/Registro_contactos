<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function login(){

        return view('login');

    }

    // public function register(Request $request){
    //     $user = new User();
    //     $user->email = $request->email;
    //     $user->name = 'eva';
    //     $user->password = $request->password;

    //     Auth::login($user, true);
    //     return redirect()->intended('mostrarContacto');
    // }

    public function authenticate(Request $request)
    {

        $request->validate([

            'email' => 'required',
            'password' => 'required'

        ]);

        $userfound = User::all()->where('email', '=', $request->email)->first();

        if($userfound === null)
            return redirect()->intended('login')->with('error', 'El usuario no existe');

        if($userfound->password == $request->password){
            return redirect()->intended('mostrarContacto');
        }
        else{
            return redirect()->intended('login')->with('error', 'Error en el login');
        }

    }

    public function show(){

        $usuarios = User::orderBy('name', 'asc')->paginate(7);
        return view('mostrarUsuarios', compact('usuarios'));

    }

    public function search(Request $request){ 
        //Función para añadir filtros por nombres de usuarios
        $usuarios = User::where('name', 'like', "%".$request->nombreUsuario."%");

        $usuarios = $usuarios->orderBy('name', 'asc')->paginate(5); 
        return view('mostrarUsuarios',compact('usuarios'));
    }
}
