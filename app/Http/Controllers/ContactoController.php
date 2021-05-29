<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;
use App\Models\Empresa;
use App\Models\User;
use App\Models\Tarea;
use App\Models\Medio;
use Illuminate\Support\Facades\Log;

class ContactoController extends Controller
{

    public function crearContacto(){

        $empresas = Empresa::all(['id', 'nombre']);
        $tareas = Tarea::all(['id','nombre']);
        $users = User::all('id','name',);
        $medios = Medio::all('id','nombre');
        return view('crearContacto', compact('empresas', 'tareas', 'users', 'medios'));

    }

    public function mostrarContacto(Request $request){

        $contactos = Contacto::with(['empresa', 'tareas', 'medio', 'users'])->paginate(5);
        // $contactos = Contacto::with(['empresa', 'tareas', 'medio', 'users'])->paginate(10);

        return view('mostrarContacto',compact('contactos'));
    }

    public function search(Request $request){ 
        //Función para añadir filtros por texto a Empresas y Usuarios
        $contactos = Contacto::with(['empresa', 'tareas', 'medio', 'users'])
                                ->whereHas('empresa', function($q) use ( $request )
                                {
                                    $q->where('nombre', 'like', "%".$request->nombreEmpresa."%");
                                })
                                ->whereHas('users', function($q) use ( $request )
                                {
                                    $q->where('name', 'like', "%".$request->nombreProfesor."%");
                                });

        // Filtros para los campos booleanos, que se mostrarán como checks en la vista:
        if($request->has('contratar'))
            $contactos = $contactos->where('contratar', '=', 1);

        if($request->has('practicas'))
            $contactos = $contactos->where('practicas', '=', 1);

        if($request->has('fct'))
            $contactos = $contactos->where('fct', '=', 1);

        if($request->has('contratar'))
            $contactos = $contactos->where('contratar', '=', 1);

        if($request->has('formacion_d'))
            $contactos = $contactos->where('formacion_d', '=', 1);

        if($request->has('dam'))
            $contactos = $contactos->where('dam', '=', 1);

        if($request->has('daw'))
            $contactos = $contactos->where('daw', '=', 1);

        if($request->has('asir'))
            $contactos = $contactos->where('asir', '=', 1);
        
        if($request->has('ifo'))
            $contactos = $contactos->where('ifo', '=', 1);

        $contactos = $contactos->paginate(5);

        return view('mostrarContacto',compact('contactos'));
    }


    public function store(Request $request){

        $contacto = new contacto();
        $contacto->id_empresa = $request->idEmpresa;
        $contacto->id_medio = $request->idMedio;
        $contacto->contratar = $request->has('contratar');
        $contacto->practicas = $request->has('practicas');
        $contacto->fct = $request->has('fct');
        $contacto->formacion_d = $request->has('formacion_d');
        $contacto->dam = $request->has('dam');
        $contacto->daw = $request->has('daw');
        $contacto->asir = $request->has('asir');
        $contacto->ifo = $request->has('ifo');
        $contacto->descripcion = $request->descripcion;

        $contacto->save();

        $tarea = Tarea::whereIn('id', $request->idTareas)->get();
        $user = User::whereIn('id', $request->idUsers)->get();

        if($tarea != null)
            $contacto->tareas()->saveMany($tarea);
        $contacto->users()->saveMany($user);
        return redirect()->route('contacto');
        
    } 

    public function show($id){

        $contacto = Contacto::find($id);
        return view('mostrarRegistro', compact('contacto'));

    }

    public function editar($id){

        $empresas = Empresa::find($id);
        $tareas = Tarea::find($id);
        $users = User::find($id);
        $medios = Medio::find($id);
        
        $contacto = Contacto::find($id);
        return view('editarRegistro', compact('empresas', 'tareas', 'users', 'medios'));

    }

}