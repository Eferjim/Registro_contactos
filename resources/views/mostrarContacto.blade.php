@extends('layouts.plantilla')

@section('title','Contactos')


@section('content')
<div class="container">
    <main>
    <a href="{{route('contacto.crearContacto')}}">Crear contacto</a><br>
    <a href="{{route('empresa.crearEmpresa')}}">Crear empresa</a>

    <h2>Buscar Contactos</h2>
    <div class="input-r flex">
        <form action="{{ route('contactos.search') }}" method="GET">
        @csrf

        <label>Empresa</label>
        <input name="nombreEmpresa" id="nombreEmpresa" type="text">
        <label>Profesor</label>
        <input name="nombreProfesor" id="nombreProfesor" type="text">
        <label>DAM</label>
        <input class="form-check-input mt-2" type="checkbox" name="dam" value="1">
        <label>DAW</label>
        <input class="form-check-input mt-2" type="checkbox" name="daw" value="1">
        <label>ASIR</label>
        <input class="form-check-input mt-2" type="checkbox" name="asir" value="1">
        <label>IFO</label>
        <input class="form-check-input mt-2" type="checkbox" name="ifo" value="1">
        <label>Dual</label>
        <input class="form-check-input mt-2" type="checkbox" name="formacion_d" value="1">
        <label>FCT</label>
        <input class="form-check-input mt-2" type="checkbox" name="fct" value="1">
        <label>Contratación</label>
        <input class="form-check-input mt-2" type="checkbox" name="contratar" value="1">
        <button class="btn btn-info btn-block" type="submit">Buscar</button>

        </form>
    </div>

    <table class="table table-bordered" cellspacing="0" width="100%">
        <tr>
            <th>Fecha</th>
            <th>Empresa</th>
            <th>Descripción</th>
            <th>Usuario</th>
            <th>.</th>
            <th>.</th>
            <th>.</th>
        </tr>
        @foreach ($contactos as $contacto)
            <tr>
                <td>{{$contacto->created_at}}</td>
                {{-- <td>{{$contacto->updated_at}}</td> --}}
                <td>{{$contacto->empresa->nombre}}</td>
                {{-- <td><ul>
                    @foreach ($contacto->tareas as $tarea)
                    <li>{{$tarea->nombre}}</li>
                    @endforeach
                </ul>
                </td> --}}
                {{-- <td>{{$contacto->contratar}}</td>
                <td>{{$contacto->practicas}}</td>
                <td>{{$contacto->fct}}</td>
                <td>{{$contacto->formacion_d}}</td>
                <td>{{$contacto->dam}}</td>
                <td>{{$contacto->daw}}</td>
                <td>{{$contacto->asir}}</td>
                <td>{{$contacto->ifo}}</td> --}}
                <td>{{$contacto->descripcion}}</td>
                {{-- <td>{{$contacto->medio->nombre}}</td> --}}
                <td><ul>
                    @foreach ($contacto->users as $user)
                    <li>{{$user->name}} {{$user->apellido1}}</li>
                    @endforeach
                </ul>
                </td>
                <td><a href="{{route('contacto.show', $contacto->id)}}">Mostrar</a></td>
                <td><a href="{{route('contacto.editar', $contacto->id)}}">Editar</a></td>

                <td><form action="{{route('contacto.destroy', $contacto->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit">Eliminar</button>

                </form></td>

            </tr>
        @endforeach

    </table>

    <span>{{$contactos->links()}}</span>

    </main>
</div>
@endsection
