

<?php $__env->startSection('title', 'Página de inicio de sesión'); ?>

<?php $__env->startSection('login'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
<footer>
<div class="container-fluid background">
        <p class="display-2 header">Restaurante de la abuelita</p>
        <div class="row">
            <div class="col-md-5 login-box col-sm-5">
                <p class="h3">Inicia sesión son tu correo y contraseña</p>
                <form method="post">
                  <div class="form-group">
                      <?php echo e(csrf_field()); ?>

                    <label for="email">Correo electronico</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="correo electronico">
                  </div>
                  <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Contraseña">
                  </div>
                  <button type="submit" class="btn">Iniciar sesión</button>
                  <?php if($errors->any()): ?>
                  <ul>
                      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($err); ?></li>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </ul>
                  <?php endif; ?>
                  <?php if(session('message')): ?>
		                <?php echo e(session('message')); ?>

                  <?php endif; ?>
                </form>
                <div>
                    <a href="<?php echo e(route('registro')); ?>">¿aún no tienes cuenta?</a>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

</footer>
    
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\log_in\resources\views/login.blade.php ENDPATH**/ ?>