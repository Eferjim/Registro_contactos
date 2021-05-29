@extends('layouts.plantilla')

@section('title','Crear nueva empresa')

@section('content')

<form action="{{route('empresas.store')}}" method="POST">

    @csrf

    <label>Nombre de la empresa:</label>   
    <input type="text" name="nombreEmpresa"><br><br>

    <label>Persona de contacto:</label>   
    <input type="text" name="personaContacto"><br><br>

    <label>Correo electrónico:</label>   
    <input type="email" name="emailEmpresa"><br><br>

    <label>Teléfono:</label>   
    <input type="number" name="telefonoEmpresa"><br><br>

    <p>
        <button type="submit">Crear empresa</button>
    </p>
</form>

<a href="{{route('contacto')}}">Atrás</a>

@endsection