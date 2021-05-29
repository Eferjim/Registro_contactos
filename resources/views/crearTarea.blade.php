@extends('layouts.plantilla_login')

@section('title','Iniciar sesión')

@section('content')

<body class="text-center"> 
<main class="form-signin">
<form method="POST" action="{{ route('tareas.store') }}">

    @csrf

    <h1 class="h3 mb-3 fw-normal">Nueva Tarea</h1>
    
    <div class="form-floating">
    <label></label>   
    <input class="form-control" id= "nombreTarea" type="text" name="nombreTarea">
    </div>
    
    <input class="w-100 btn btn-lg btn-primary" type="submit" value="Enviar">
    
 
</form>
</main>
</body>
@endsection
