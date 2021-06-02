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

    public function show(){

        $empresas = Empresa::paginate(5);
        return view('empresasRegistradas', compact('empresas'));

    }

    public function search(Request $request){ 
        //Función para añadir filtros por texto a Empresas
        $empresas = Empresa::whereHas('empresa', function($q) use ( $request )
             {
                 $q->where('nombre', 'like', "%".$request->nombre."%");
             });
             $empresas = $empresas->orderBy('created_at', 'desc')->paginate(5); 
             return view('empresasRegistradas',compact('empresas'));
    }

}
