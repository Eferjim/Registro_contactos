@extends('layouts.plantilla')

@section('title','Crear nuevo contacto')


@section('content')
<br>
<div class="container">

    <form class="form-control" action="{{route('contactos.store')}}" method="POST"> 

    @csrf

    
        <div class="row">
            <div class="col-6">
                <h4>Información general:</h4>
                <label class="input-label" for="empresa">Nombre de la Empresa:</label>

                <select class="form-select" id="idEmpresa" name="idEmpresa">
                    @foreach ($empresas as $empresa)
                    <option value="{{$empresa->id}}">
                            {{$empresa->nombre}}
                    </option>
                    @endforeach
                </select>
                <a href="{{route('empresa.crearEmpresa')}}">¿Nueva Empresa?</a><br>
            </div>
            <div class="col-6">

                <h4>Información acuerdo:</h4>
                <label>¿Es para contratar, para prácticas o ambas?</label>
                    <div class="form-check form-switch">
                        <label class="form-check-label">Contratar</label>
                        <input class="form-check-input" type="checkbox" name="contratar" value="1">
                    </div>
                    <div class="form-check form-switch">
                        <label class="form-check-label">FCT</label>
                        <input class="form-check-input" type="checkbox" name="fct" value="1">
                    </div>
                    <div class="form-check form-switch">
                        <label class="form-check-label">Dual</label>
                        <input class="form-check-input" type="checkbox" name="formacion_d" value="1">
                    </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <label>¿Por medio de qué ha sido el contacto?</label>
                <div class="form-group">
                <select class="form-select" id="idMedio" name="idMedio">
                    @foreach ($medios as $medio)
                    <option value="{{$medio->id}}">
                            {{$medio->nombre}}
                    </option>
                    @endforeach
                </select>
                <a href="{{route('crearMedio')}}">¿Nuevo Medio?</a>
                </div>
            </div>

            <div class="col-6">
                <label>¿A qué ciclo o ciclos va dirigido?</label>
                <div class="form-check form-switch">
                    <label class="form-check-label">DAM</label>
                    <input class="form-check-input" type="checkbox" name="dam" value="1">
                </div>
                <div class="form-check form-switch">
                    <label class="form-check-label">DAW</label>
                    <input class="form-check-input" type="checkbox" name="daw" value="1">
                </div>
                <div class="form-check form-switch">
                    <label class="form-check-label">ASIR</label>
                    <input class="form-check-input" type="checkbox" name="asir" value="1">
                </div>
                <div class="form-check form-switch">
                    <label class="form-check-label">IFO</label>
                    <input class="form-check-input" type="checkbox" name="ifo" value="1">
                </div>
            </div>
            
        </div>

        <div class="row">

            <div class="col-6">
                <label>Usuario que lo registra:</label>
                <div class="form-group">
                    <select class="form-select selectpicker" multiple data-live-search="true" name="idUsers[]">
                    @foreach ($users as $user)
                    <option value="{{$user->id}}">
                        {{$user->name}}
                    </option>
                    @endforeach
                    </select>
                </div>
                @error('idUsers')
                <small style="color: red">*{{$message}}</small>
                @enderror

            <br>
            </div>

            <div class="col-6">
                <label>Tareas a desarrollar:</label>
                <div class="form-group">
                    <select class="form-select" multiple data-live-search="true" name="idTareas[]">
                        <option value="0" selected>No aplica</option> 
                        @foreach ($tareas as $tarea)
                        <option value="{{$tarea->id}}">
                            {{$tarea->nombre}}
                        </option>
                        @endforeach
                    </select>
                </div>
                <a href="{{route('crearTarea')}}">¿Nueva Tarea?</a>
            </div>

            <br><br>
            
        </div>
        <div class="row">
            <div class="form-floating">
                <textarea class="form-control" name="descripcion" placeholder=""></textarea>
                <label for="floatingTextarea2">Descripción del nuevo contacto con la empresa...</label>
            </div>
        </div>

        <br>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end mx-auto">
                <button type="submit" class="btn btn-primary" style="background-color: #08acb4">Nuevo contacto</button>
                <a href="{{route('contacto')}}" class="btn btn-secondary" tabindex="-1" role="button">Cancelar</a>
            </div>
        
</form>
<br>
</div>  
@endsection
