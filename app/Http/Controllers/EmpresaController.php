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

        $request->validate([

            'nombreEmpresa' => 'required',

            ]);

        $empresa = new empresa();
        $empresa->nombre = $request->nombreEmpresa;
        $empresa->persona_contacto = $request->personaContacto;
        $empresa->email = $request->emailEmpresa;
        $empresa->telefono = $request->telefonoEmpresa;

        $empresa->save();
        
        return redirect()->route('contacto');
        
    }

    public function show(){

        $empresas = Empresa::orderBy('nombre', 'asc')->paginate(5);
        return view('empresasRegistradas', compact('empresas'));

    }

    public function search(Request $request){ 
        //Función para añadir filtros por texto a Empresas
        $empresas = Empresa::where('nombre', 'like', "%".$request->nombreEmpresa."%");

        $empresas = $empresas->orderBy('created_at', 'desc')->paginate(5); 
        return view('empresasRegistradas',compact('empresas'));
    }

    public function editar($id){

        $empresas = Empresa::find($id);
        return view('editarEmpresa', compact('empresas'));

    }

    public function update(Request $request, $id){

        $request->validate([

            'nombreEmpresa' => 'required',

            ]);

        $empresas = Empresa::find($id);
        $empresas->nombre = $request->nombreEmpresa;
        $empresas->persona_contacto = $request->personaContacto;
        $empresas->email = $request->emailEmpresa;
        $empresas->telefono = $request->telefonoEmpresa;
        
        $empresas->save();
        return redirect()->route('empresas.show');

    }

}
