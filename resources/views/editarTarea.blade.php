@extends('layouts.plantilla_form')

@section('title','Contactos')


@section('content')

<div class="container_form">

    <h3>Editar Tarea</h3>
    <form method="POST" action="{{ route('tareas.update', $tareas->id) }}">

        @csrf

        @method('PUT')
        
        <div class="form-floating">
        <label></label>   
        <input class="form-control" id= "nombreTarea" type="text" name="nombreTarea" value="{{$tareas->nombre}}">
        </div>

        @error('nombreTarea')
                <small style="color: red">*{{$message}}</small>
            @enderror

        <br>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end mx-auto">
            <button type="submit" class="btn btn-lg btn-primary">Actualizar</button>
            <a href="{{route('tareas.show')}}" class="btn btn-secondary btn-lg" tabindex="-1" role="button">Cancelar</a>
        </div>
    
    </form>

</div>

@endsection
