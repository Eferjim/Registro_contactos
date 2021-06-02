@extends('layouts.plantilla_form')

@section('title','Empresas')


@section('content')
<div class="container_form">
    <main>
        {{-- <form action="{{ route('empresas.search') }}" method="GET">
            @csrf
            <label>Empresa</label>
            <input name="nombreEmpresa" id="nombreEmpresa" type="text">
        </form>
        <button class="btn btn-info btn-block" type="submit">Buscar</button> --}}

        <table class="table table-bordered" cellspacing="0" width="100%">
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
