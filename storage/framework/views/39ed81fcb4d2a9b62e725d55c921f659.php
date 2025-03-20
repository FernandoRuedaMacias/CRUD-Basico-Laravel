<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver Post</title>
    <style>
        table, th ,td{
            border:1px solid black;
        }
    </style>
</head>
<body>
    <h1>Post con id : <?php echo e($post->id); ?></h1>

    <table>
        <tr>
            <th>Titulo</th>
            <th>Descripcion</th>
            <th>Autor</th>
            <th>Fecha</th>

        </tr>
    <tr >
        <td><?php echo e($post->titulo); ?></td>
        <td><textarea><?php echo e($post->contenido); ?></textarea></td>
        <td><?php echo e($post->autor); ?></td>
        <td><?php echo e($post->fecha); ?></td>
    </tr>
</table>

    <a href="<?php echo e(route('Inicio')); ?>"><button>Volver</button></a>
</body>
</html><?php /**PATH /var/www/html/ProyectoPrueba/resources/views/Vermas.blade.php ENDPATH**/ ?>