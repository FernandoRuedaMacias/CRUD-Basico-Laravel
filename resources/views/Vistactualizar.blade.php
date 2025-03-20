<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Post</title>
</head>
<body>
    <h1>Actualizar Post</h1>

    <form action="{{route('Actualizar',$post->id)}}" method="POST">
        @csrf
        <label for="titulo">Titulo</label><br>
        <input type="text" id="titulo" name="titulo"><br>


        <p><label for="contenido">Contenido</label></p>
        <textarea id="contenido" name="contenido"></textarea><br><br>

        <label for="autor">Autor</label><br>
        <input type="text" id="autor" name="autor"><br><br>

        <input type="submit" value="Actualizar Posts"><br>

      @error('titulo') {{ $message }} <br>@enderror

      @error('contenido') {{ $message }} <br>@enderror

      @error('autor'){{ $message }}  <br>@enderror
      
      </form> 

      

      <br><br>
      <a href="{{route('Inicio')}}"><button>Volver</button></a>
    
</body>
</html>