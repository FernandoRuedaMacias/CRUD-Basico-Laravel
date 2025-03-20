<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css
    " rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Posts</title>
    <style>
        table, th ,td{
            border:1px solid black;
        }
    </style>
</head>
<body>
    <h1> Bienvenido a mis posts</h1>
    <a href=" {{route('CrearPostVista')}}"><button id="button" class="btn btn-light">Crear un post</button></a><br><br>
    <p>Buscar posts por Autor : </p>
    <form action="{{route('Filtrar')}}" method="GET">@csrf<input type="text" id="autor" name="autor"><input type="submit" value="Buscar"></form><br><br>
    <table>
        <tr>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Fecha</th>
            <th>Ver Mas</th>
            <th>Eliminar</th>
            <th>Actualizar</th>
            
        </tr>
    @foreach($posts as $post)
    <tr>
        <td>{{$post->titulo}}</td>
        <td>{{$post->autor}}</td>
        <td>{{$post->fecha}}</td>
        <td><a href="{{ route('Vistashow',$post->id)}}"><button id="button" class="btn btn-light">Ver Mas</button></a></td>
        <td><a href=" {{ route('borrarPost',$post->id)}}"><button id="button" class="btn btn-light">Eliminar</button></a></td>
        <td><a href="{{ route('VistaActualizar', $post->id)}}"><button id="button" class="btn btn-light">Actualizar</button></a></td>
    </tr>
    @endforeach
</table>

<div >{{$posts->links()}}</div>
</body>
</html>