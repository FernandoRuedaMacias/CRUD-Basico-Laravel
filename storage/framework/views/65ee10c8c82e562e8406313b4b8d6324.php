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
    <a href=" <?php echo e(route('CrearPostVista')); ?>"><button id="button" class="btn btn-light">Crear un post</button></a><br><br>
    <p>Buscar posts por Autor : </p>
    <form action="<?php echo e(route('Filtrar')); ?>" method="GET"><?php echo csrf_field(); ?><input type="text" id="autor" name="autor"><input type="submit" value="Buscar"></form><br><br>
    <table>
        <tr>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Fecha</th>
            <th>Ver Mas</th>
            <th>Eliminar</th>
            <th>Actualizar</th>
            
        </tr>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($post->titulo); ?></td>
        <td><?php echo e($post->autor); ?></td>
        <td><?php echo e($post->fecha); ?></td>
        <td><a href="<?php echo e(route('Vistashow',$post->id)); ?>"><button id="button" class="btn btn-light">Ver Mas</button></a></td>
        <td><a href=" <?php echo e(route('borrarPost',$post->id)); ?>"><button id="button" class="btn btn-light">Eliminar</button></a></td>
        <td><a href="<?php echo e(route('VistaActualizar', $post->id)); ?>"><button id="button" class="btn btn-light">Actualizar</button></a></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<div ><?php echo e($posts->links()); ?></div>
</body>
</html><?php /**PATH /var/www/html/ProyectoPrueba/resources/views/posts.blade.php ENDPATH**/ ?>