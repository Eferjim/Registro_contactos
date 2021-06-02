@extends('layouts.plantilla')

@section('title','Empresas')


@section('content')
<div class="container">
    <main>
        <form action="{{ route('empresas.search') }}" method="GET">
            @csrf
            <label>Empresa</label>
            <input name="nombreEmpresa" id="nombreEmpresa" type="text">
        </form>
        <button class="btn btn-info btn-block" type="submit">Buscar</button>

        <table class="table table-bordered" cellspacing="0" width="100%">
            <tr>
                <th>Nombre</th>
                <th>Persona de contacto</th>
                <th>Correo electrónico</th>
                <th>Teléfono</th>
                <th>Editar</th>
            </tr>
            @foreach ($empresas as $empresa)
            <tr>
                <td>{{$empresa->nombre}}</td>
                <td>{{$empresa->persona_contacto}}</td>
                <td>{{$empresa->email}}</td>
                <td>{{$empresa->telefono}}</td>
                <td></td>
            </tr>
            @endforeach
        </table>

        <br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mx-auto">
                <a href="{{route('empresa.crearEmpresa')}}" class="btn btn-lg btn-primary">Nueva Empresa</a>
                <a href="{{route('contacto')}}" class="btn btn-secondary btn-lg" tabindex="-1" role="button">Cancelar</a>
            </div>
        </div>

    </main>
</div>
@endsection
