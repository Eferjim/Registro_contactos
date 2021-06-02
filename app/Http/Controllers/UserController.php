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
            'password' => 'required|password'

        ]);

        $userfound = User::all()->where('email', '=', $request->email)->first();

        if($userfound->password == $request->password){
            return redirect()->intended('mostrarContacto');
        }

    }

    public function show(){

        $usuarios = User::paginate(7);
        return view('mostrarUsuarios', compact('usuarios'));

    }
}
