<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;

class EmpresaController extends Controller
{
    public function crearEmpresa(){

        return view('crearEmpresa');

    }

    public function store(Request $request){

        $empresa = new empresa();
        $empresa->nombre = $request->nombreEmpresa;
        $empresa->persona_contacto = $request->personaContacto;
        $empresa->email = $request->emailEmpresa;
        $empresa->telefono = $request->telefonoEmpresa;

        $empresa->save();
        
        return redirect()->route('contacto');
        
    }
}
