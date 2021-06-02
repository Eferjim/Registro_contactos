@extends('layouts.plantilla')

@section('title','Contactos')


@section('content')

<div class="container">

    <h2>Registro de contacto con la empresa: {{$contacto->empresa->nombre}}</h2>

    <ul class="list-group list-group-flush">
        <li class="list-group-item">An item</li>
        <li class="list-group-item">A second item</li>
        <li class="list-group-item">A third item</li>
        <li class="list-group-item">A fourth item</li>
        <li class="list-group-item">And a fifth one</li>
      </ul>

    
    <ul>

        <li>
            {{$contacto->id}}
        </li>
        <li>{{$contacto->descripcion}}</li>
    </ul>

    <td><a href="{{route('contacto.editar', $contacto->id)}}">Editar</a></td>

    <td><form action="{{route('contacto.destroy', $contacto->id)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>

    </form></td>

</div>

@endsection