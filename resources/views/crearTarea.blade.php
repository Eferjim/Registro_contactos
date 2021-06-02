@extends('layouts.plantilla_form')

@section('title','Contactos')


@section('content')

<div class="container_form">

    <h3>Nueva Tarea</h3>
    <form method="POST" action="{{ route('tareas.store') }}">

        @csrf
        
        <div class="form-floating">
        <label></label>   
        <input class="form-control" id= "nombreTarea" type="text" name="nombreTarea">
        </div>

        <br>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end mx-auto">
            <button type="submit" class="btn btn-lg btn-primary">Nueva Tarea</button>
            <a href="{{route('contacto')}}" class="btn btn-secondary btn-lg" tabindex="-1" role="button">Cancelar</a>
        </div>
    
    </form>

</div>

@endsection
