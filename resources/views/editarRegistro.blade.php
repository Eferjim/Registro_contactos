@extends('layouts.plantilla')

@section('title','Crear nuevo contacto')


@section('content')

<h1>Esta página es para actualizar el contacto</h1>

<form action="{{route('contactos.store')}}" method="POST"> 

    @csrf

    <label for="empresa">Nombre de la Empresa:</label>

    <select id="idEmpresa" name="idEmpresa">
        @foreach ($empresas as $empresa)
        <option value="{{$empresa->id}}">
                {{$empresa->nombre}}
        </option>
        @endforeach
    </select>
    <br>
    <a href="{{route('empresa.crearEmpresa')}}">¿Nueva Empresa?</a>

    <p>¿Por medio de qué ha sido el contacto?</p>
    <div class="form-group">
    <select class="form-select" id="idMedio" name="idMedio">
        @foreach ($medios as $medio)
        <option value="{{$medio->id}}">
                {{$medio->nombre}}
        </option>
        @endforeach
    </select>
    <a href="{{route('crearMedio')}}">Nuevo Medio</a>

    <p>¿Es para contratar, para prácticas o ambas?</p>
    <label>Contratar</label>
    <input type="checkbox" name="contratar" value="1">
    <label>Prácticas</label>
    <input type="checkbox" name="practicas" value="1">

    <p>Tipo de prácticas:</p>
    <label>FCT</label>
    <input type="checkbox" name="fct" value="1">
    <label>Dual</label>
    <input type="checkbox" name="formacion_d" value="1">

    <p>¿A qué ciclo o ciclos va dirigido?</p>
    <label>DAM</label>
    <input type="checkbox" name="dam" value="1">
    <label>DAW</label>
    <input type="checkbox" name="daw" value="1">
    <label>ASIR</label>
    <input type="checkbox" name="asir" value="1">
    <label>IFO</label>
    <input type="checkbox" name="ifo" value="1">

    <p>Tareas a desarrollar:</p>
    <div class="form-group">
    <select class="form-select" multiple data-live-search="true" name="idTareas[]">
        <option value="0" selected>No aplica</option> 
        @foreach ($tareas as $tarea)
        <option value="{{$tarea->id}}">
            {{$tarea->nombre}}
        </option>
        @endforeach
    </select>
    </div>
    <a href="{{route('crearTarea')}}">Nueva Tarea</a>

    <br>

    <p>Usuario que lo registra:</p>
    <select class="selectpicker" multiple data-live-search="true" name="idUsers[]">
        @foreach ($users as $user)
        <option value="{{$user->id}}">
            {{$user->name}}
        </option>
        @endforeach
    </select>

    <br>

    <label>Descripción:</label><br>
    <textarea name="descripcion"></textarea>

    <br>

    <button type="submit">Actualizar contacto</button>

</form>

<a href="{{route('contacto')}}">Atrás</a>

@endsection
