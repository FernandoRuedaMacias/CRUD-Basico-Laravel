<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Post</title>
</head>
<body>

    <h1>Crear Nuevo Post</h1>

    <form action="{{route('CrearPost')}}" method="POST">
        @csrf
        <label for="titulo">Titulo</label><br>
        <input type="text" id="titulo" name="titulo"><br>


        <p><label for="contenido">Contenido</label></p>
        <textarea id="contenido" name="contenido"></textarea><br><br>

        <label for="autor">Autor</label><br>
        <input type="text" id="autor" name="autor"><br><br>

        <input type="submit" value="Crear nuevo Post"><br>

      @error('titulo') {{ $message }} <br>@enderror

      @error('contenido') {{ $message }} <br>@enderror

      @error('autor'){{ $message }}  <br>@enderror
      
      </form> 

      

      <br><br>
      <a href="{{route('Inicio')}}"><button>Volver</button></a>
    
</body>
</html>