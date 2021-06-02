<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;

class TareaController extends Controller
{
    public function store(Request $request){

        $tarea = new tarea();
        $tarea->nombre = $request->nombreTarea;

        $tarea->save();
        
        return redirect()->route('contacto.crearContacto');
    }

    public function create(){

        return view('crearTarea');

    }

    public function show(){

        $tareas = Tarea::paginate(7);
        return view('tareasRegistradas', compact('tareas'));

    }

}