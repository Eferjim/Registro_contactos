@extends('layouts.plantilla_form')

@section('title','Empresas')


@section('content')
<div class="container_form">
    <main>
        <form action="{{ route('usuarios.search') }}" method="GET">
            @csrf
            <div class="search-empresa">
                <label>Nombre usuario</label>
                <input class="form-control form-control-sm input-search-empresa" name="nombreUsuario" id="nombreUsuario" type="text">
            </div>
        </form>
        <button class="btn btn-secondary" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" >
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
          </svg></button>

        <table class="table table-hover" cellspacing="0" width="100%">
            <tr>
                <th>Nombre</th>
                <th>Correo electrónico</th>
                <th>Teléfono</th>
            </tr>
            @foreach ($usuarios as $usuario)
            <tr>
                <td>{{$usuario->name}}</td>
                <td>{{$usuario->email}}</td>
                <td>{{$usuario->telefono}}</td>
            </tr>
            @endforeach
        </table>

        {{$usuarios->links()}}

        <div class="d-grid gap-2 d-md-flex justify-content-md-end mx-auto">
            <a href="{{route('contacto')}}" class="btn btn-secondary btn-lg" tabindex="-1" role="button">Volver</a>
        </div>

    </main>
</div>
@endsection
