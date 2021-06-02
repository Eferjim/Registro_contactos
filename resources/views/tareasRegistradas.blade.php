@extends('layouts.plantilla_form')

@section('title','Tareas')


@section('content')
<div class="container_form">
    <main>

        <table class="table table-bordered" cellspacing="0" width="100%">
            <tr>
                <th>Tareas Registradas</th>
            </tr>
            @foreach ($tareas as $tarea)
            <tr>
                <td>{{$tarea->nombre}}</td>
            </tr>
            @endforeach
        </table>

        <span>{{$tareas->links()}}</span>

        <br>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end mx-auto">
            <a href="{{route('crearTarea')}}" class="btn btn-lg btn-primary">Nueva Tarea</a>
            <a href="{{route('contacto')}}" class="btn btn-secondary btn-lg" tabindex="-1" role="button">Cancelar</a>
        </div>
        
    </main>
</div>
@endsection
