@extends('layouts.plantilla')

@section('title','Contactos')


@section('content')

<div class="container pt-4">
    <main>
    
        <div class="flex-container">
            <form class="search" action="{{ route('contactos.search') }}" method="GET">
            @csrf

            <div class="search-empresa">
                <label>Empresa</label>
                <input class="form-control form-control-sm input-search-empresa" name="nombreEmpresa" id="nombreEmpresa" type="text">
            </div>
            <div class="search-profesor">
                <label>Profesor</label>
                <input class="form-control form-control-sm input-search-profesor" name="nombreProfesor" id="nombreProfesor" type="text">
            </div>
            <div class="check-boxes">
                <label>DAM</label>
                <input class="form-check-input" type="checkbox" name="dam" value="1">
                <label>DAW</label>
                <input class="form-check-input" type="checkbox" name="daw" value="1">
                <label>ASIR</label>
                <input class="form-check-input" type="checkbox" name="asir" value="1">
                <label>IFO</label>
                <input class="form-check-input" type="checkbox" name="ifo" value="1">
                <label>Dual</label>
                <input class="form-check-input" type="checkbox" name="formacion_d" value="1">
                <label>FCT</label>
                <input class="form-check-input" type="checkbox" name="fct" value="1">
                <label>Contratación</label>
                <input class="form-check-input" type="checkbox" name="contratar" value="1">
            </div>
            <button class="btn btn-secondary" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" >
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
              </svg></button>

              <a href="{{route('contacto.crearContacto')}}" class="btn btn-primary new-contacto">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" >
                  <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"/>
                </svg> 
                </a>
            </form>

        </div>

    <table class="table table-hover" cellspacing="0" width="100%">
        <tr>
            <th class="table-light">Fecha</th>
            <th class="table-light">Empresa</th>
            <th class="table-light">Descripción</th>
            <th class="table-light">Usuario</th>
            <th class="table-light"></th>
            <th class="table-light"></th>
        </tr>
        @foreach ($contactos as $contacto)
            <tr>
                <td>{{$contacto->created_at}}</td>
                <td>{{$contacto->empresa->nombre}}</td>
                <td>{{$contacto->descripcion}}</td>
                <td><ul>
                    @foreach ($contacto->users as $user)
                    <li>{{$user->name}} {{$user->apellido1}}</li>
                    @endforeach
                </ul>
                </td>
                <td><a href="{{route('contacto.editar', $contacto->id)}}">
                        <button class="btn btn-warning" style="color:white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                            </svg>
                        </button>
                    </a>
                </td>

                <td>
                    <form action="{{route('contacto.destroy', $contacto->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                            </svg>
                        </button>
                    </form>
                </td>

            </tr>
        @endforeach

    </table>
    
    <span>{{$contactos->links()}}</span>
    <br>

    </main>
</div>
@endsection
