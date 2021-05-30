@extends('layouts.plantilla')

@section('title','Crear nueva empresa')

@section('content')

<div class="container">

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

            <p>
                <button type="submit">Crear empresa</button>
            </p>
    </form>

        <a href="{{route('contacto')}}">Atrás</a>
    
</div>

@endsection