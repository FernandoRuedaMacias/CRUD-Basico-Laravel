<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Post</title>
</head>
<body>
    <h1>Actualizar Post</h1>

    <form action="<?php echo e(route('Actualizar',$post->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="titulo">Titulo</label><br>
        <input type="text" id="titulo" name="titulo"><br>


        <p><label for="contenido">Contenido</label></p>
        <textarea id="contenido" name="contenido"></textarea><br><br>

        <label for="autor">Autor</label><br>
        <input type="text" id="autor" name="autor"><br><br>

        <input type="submit" value="Actualizar Posts"><br>

      <?php $__errorArgs = ['titulo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <br><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

      <?php $__errorArgs = ['contenido'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <br><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

      <?php $__errorArgs = ['autor'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?>  <br><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      
      </form> 

      

      <br><br>
      <a href="<?php echo e(route('Inicio')); ?>"><button>Volver</button></a>
    
</body>
</html><?php /**PATH /var/www/html/ProyectoPrueba/resources/views/Vistactualizar.blade.php ENDPATH**/ ?>