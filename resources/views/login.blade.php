@extends('layouts.plantilla_login')

@section('title','Iniciar sesión')

@section('content')

<body class="text-center"> 
<main class="form-signin">
<form method="POST" action="{{ route('user.authenticate') }}">

    @csrf

    <h1 class="h3 mb-3 fw-normal">Iniciar Sesión</h1>
    
    <div class="form-floating">
    <label for="email" >Email</label>   
    <input class="form-control" id= "email" type="email" name="email" value={{old('email')}}>
    @error('email')
            <small>*{{$message}}</small>
    @enderror
    </div>
    <br>
    <div class="form-floating">
    <label for="">Contraseña:</label>   
    <input class="form-control" id="password" type="password" name="password" value={{old('password')}}>
    @error('password')
            <small>*{{$message}}</small>
    @enderror
    </div>
    
    <input class="w-100 btn btn-lg btn-primary" type="submit" value="Enviar">
    
 
</form>
</main>
</body>
@endsection
