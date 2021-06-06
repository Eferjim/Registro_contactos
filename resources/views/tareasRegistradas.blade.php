@extends('layouts.plantilla_form')

@section('title','Tareas')


@section('content')
<div class="container_form pt-4">
    <main>

        <form action="{{ route('tareas.search') }}" method="GET">
            @csrf
            <div class="search-tarea">
                <label>Tareas</label>
                <input class="form-control form-control-sm input-search-tarea" name="nombre" id="nombre" type="text">
            </div>
        </form>
        <button class="btn btn-secondary" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" >
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
          </svg></button>

        <table class="table table-hover" cellspacing="0" width="100%">
            <tr>
                <th>Tareas Registradas</th>
                <th style="text-align: center">Editar</th>
            </tr>
            @foreach ($tareas as $tarea)
            <tr>
                <td>{{$tarea->nombre}}</td>
                <td style="text-align: center"><a href="{{route('tareas.editar', $tarea->id)}}"><button  style="color:white" class="btn btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                  </svg></button></a></td>
            </tr>
            @endforeach
        </table>

        <span>{{$tareas->links()}}</span>

        <br>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end mx-auto">
            <a href="{{route('crearTarea')}}" class="btn btn-lg btn-primary" style="background-color: #08acb4">Nueva Tarea</a>
            <a href="{{route('contacto')}}" class="btn btn-secondary btn-lg" tabindex="-1" role="button">Cancelar</a>
        </div>
        <br>
    </main>
</div>
@endsection
