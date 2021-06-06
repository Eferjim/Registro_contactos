@extends('layouts.plantilla')

@section('title','Crear nuevo contacto')


@section('content')
<br>
<div class="container">
    <form class="form-control" action="{{route('contacto.update', $contacto->id)}}" method="POST"> 

        @csrf

        @method('put')

        <div class="row">
            <div class="col-6">
                <h4>Información general:</h4>
                <label class="input-label" for="empresa">Nombre de la Empresa:</label>
                <select class="form-select" id="idEmpresa" name="idEmpresa">
                    @foreach ($empresas as $empresa)
                        @if ($contacto->id_empresa == $empresa->id)
                            <option value="{{$empresa->id}}" selected>
                                {{$empresa->nombre}}
                            </option>  
                        @else
                            <option value="{{$empresa->id}}">
                                {{$empresa->nombre}}
                            </option>
                        @endif
                    @endforeach
                </select>
            </div>

            <div class="col-6">
                <h4>Información acuerdo:</h4>
                <p>¿Es para contratar, para prácticas o ambas?</p>
                <div class="form-check form-switch">
                    <label class="form-check-label">Contratar</label>
                    @if ($contacto->contratar)
                        <input class="form-check-input" type="checkbox" name="contratar" value="1" checked>
                    @else
                        <input class="form-check-input" type="checkbox" name="contratar" value="1">
                    @endif
                </div>
                <div class="form-check form-switch">
                    <label class="form-check-label">FCT</label>
                    @if ($contacto->fct)
                        <input class="form-check-input" type="checkbox" name="fct" value="1" checked>
                    @else
                        <input class="form-check-input" type="checkbox" name="fct" value="1">
                    @endif
                </div>
                <div class="form-check form-switch">
                    <label class="form-check-label">Dual</label>
                    @if ($contacto->formacion_d)
                        <input class="form-check-input" type="checkbox" name="formacion_d" value="1" checked>
                    @else
                        <input class="form-check-input" type="checkbox" name="formacion_d" value="1">
                    @endif
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <p>¿Por medio de qué ha sido el contacto?</p>
                <div class="form-group">
                <select class="form-select" id="idMedio" name="idMedio">
                    @foreach ($medios as $medio)
                        @if ($contacto->id_medio == $medio->id)
                            <option value="{{$medio->id}}" selected>
                                {{$medio->nombre}}
                            </option>  
                        @else
                            <option value="{{$medio->id}}">
                                {{$medio->nombre}}
                            </option>
                        @endif
                    @endforeach
                </select>
                </div>
            </div>
            <div class="col-6">
                <p>¿A qué ciclo o ciclos va dirigido?</p>
                <div class="form-check form-switch">
                    <label class="form-check-label">DAM</label>
                    @if ($contacto->dam)
                        <input class="form-check-input" type="checkbox" name="dam" value="1" checked>
                    @else
                        <input class="form-check-input" type="checkbox" name="dam" value="1">
                    @endif
                </div>
                <div class="form-check form-switch">
                    <label class="form-check-label">DAW</label>
                    @if ($contacto->daw)
                        <input class="form-check-input" type="checkbox" name="daw" value="1" checked>
                    @else
                        <input class="form-check-input" type="checkbox" name="daw" value="1">
                    @endif
                </div>
                <div class="form-check form-switch">
                    <label class="form-check-label">ASIR</label>
                    @if ($contacto->asir)
                        <input class="form-check-input" type="checkbox" name="asir" value="1" checked>
                    @else
                        <input class="form-check-input" type="checkbox" name="asir" value="1">
                    @endif
                </div>
                <div class="form-check form-switch">
                    <label class="form-check-label">IFO</label>
                    @if ($contacto->ifo)
                        <input class="form-check-input" type="checkbox" name="ifo" value="1" checked>
                    @else
                        <input class="form-check-input" type="checkbox" name="ifo" value="1">
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                 <p>Usuario que lo registra:</p>
                <div class="form-group">
                    <select class="form-select selectpicker" multiple data-live-search="true" name="idUsers[]">
                    @foreach ($users as $user)
                        @if ($contacto->users->contains($user))
                            <option value="{{$user->id}}" selected>
                                {{$user->name}}
                            </option>    
                        @else
                            <option value="{{$user->id}}">
                                {{$user->name}}
                            </option>
                        @endif
                    @endforeach
                    </select>
                </div> 
            </div>
            <div class="col-6">
                <p>Tareas a desarrollar:</p>
                <div class="form-group">
                <select class="form-select" multiple data-live-search="true" name="idTareas[]">
                    <option value="0" selected>No aplica</option> 
                    @foreach ($tareas as $tarea)
                        @if ($contacto->tareas->contains($tarea))
                            <option value="{{$tarea->id}}" selected>
                                {{$tarea->nombre}}
                            </option>     
                        @else
                            <option value="{{$tarea->id}}">
                                {{$tarea->nombre}}
                            </option> 
                        @endif
                    @endforeach
                </select>
                </div>
                <a href="{{route('crearTarea')}}">Nueva Tarea</a>
            </div>
        </div>
        <div class="row">
            <div class="form-floating">
                <textarea class="form-control" name="descripcion">{{$contacto->descripcion}}</textarea>
                <label for="floatingTextarea2">Descripción:</label><br>
            </div>  
        </div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end mx-auto">
                <button type="submit" class="btn btn-lg btn-primary">Actualizar</button>
                <a href="{{route('contacto')}}" class="btn btn-secondary btn-lg" tabindex="-1" role="button">Cancelar</a>
            </div>

        </form>

<br>
</div>
@endsection
