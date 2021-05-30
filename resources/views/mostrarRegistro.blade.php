<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h2>Registro de contacto con la empresa: {{$contacto->empresa->nombre}}</h2>

    
    <ul>

        <li>
            {{$contacto->id}}
        </li>
        <li>{{$contacto->descripcion}}</li>
    </ul>

    <td><a href="{{route('contacto.editar', $contacto->id)}}">Editar</a></td>

    <td><form action="{{route('contacto.destroy', $contacto->id)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>

    </form></td>

</body>
</html>