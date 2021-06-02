@extends('layouts.plantilla_form')

@section('title','Crear nueva empresa')

@section('content')

<div class="container_form">

    <form action="{{route('empresas.store')}}" method="POST">

        @csrf

            <label class="input-label">Nombre de la empresa:</label>   
            <input class="form-control" type="text" name="nombreEmpresa"><br><br>

            <label class="input-label">Persona de contacto:</label>   
            <input class="form-control" type="text" name="personaContacto"><br><br>

            <div class="row">
                <div class="col-6">
                    <label class="input-label">Correo electrónico:</label>   
                    <input class="form-control" type="email" name="emailEmpresa"><br><br>
                </div>
                <div class="col-6">
                <label class="input-label">Teléfono:</label>   
                <input class="form-control" type="number" name="telefonoEmpresa"><br><br>
                </div>
            </div>


            <div class="d-grid gap-2 d-md-flex justify-content-md-end mx-auto">
                <button type="submit" class="btn btn-lg btn-primary">Nueva Empresa</button>
                <a href="{{route('contacto')}}" class="btn btn-secondary btn-lg" tabindex="-1" role="button">Cancelar</a>
            </div>

    </form>
    
</div>

@endsection