<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;

class TareaController extends Controller
{
    public function store(Request $request){

        $request->validate([

            'nombreTarea' => 'required',

            ]);
            
        $tarea = new tarea();
        $tarea->nombre = $request->nombreTarea;

        $tarea->save();
        
        return redirect()->route('contacto.crearContacto');
    }

    public function create(){

        return view('crearTarea');

    }

    public function show(){

        $tareas = Tarea::orderBy('nombre', 'asc')->paginate(7);
        return view('tareasRegistradas', compact('tareas'));

    }

    public function search(Request $request){ 
        //Función para añadir filtros por texto a Tareas
        $tareas = Tarea::where('nombre', 'like', "%".$request->nombre."%");

        $tareas = $tareas->orderBy('nombre', 'asc')->paginate(5); 
        return view('tareasRegistradas',compact('tareas'));
    }

    public function editar($id){

        $tareas = Tarea::find($id);
        return view('editarTarea', compact('tareas'));

    }

    public function update(Request $request, $id){

        $request->validate([

            'nombreTarea' => 'required',

            ]);

        $tareas = Tarea::find($id);
        $tareas->nombre = $request->nombreTarea;
        
        $tareas->save();
        return redirect()->route('tareas.show');

    }

}