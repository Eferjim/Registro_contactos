<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medio;

class MedioController extends Controller
{
    public function store(Request $request){

        $medio = new Medio();
        $medio->nombre = $request->nombreMedio;
        
        $medio->save();
        
        return redirect()->route('contacto.crearContacto');
        
    }

    public function create(){

        return view('crearMedio');

    }

}
