@extends('layouts.plantilla_login')

@section('title','Iniciar sesión')

@section('content')

<body class="text-center"> 
<main class="form-signin">
<form method="POST" action="{{ route('medios.store') }}">

    @csrf

    <h1 class="h3 mb-3 fw-normal">Nuevo Medio</h1>
    
    <div class="form-floating">
    <label for="email" ></label>   
    <input class="form-control" id= "nombreMedio" type="text" name="nombreMedio">
    </div>
    
    <input class="w-100 btn btn-lg btn-primary" style="background-color: #08acb4" type="submit" value="Enviar">
    
 
</form>
</main>
</body>
@endsection
