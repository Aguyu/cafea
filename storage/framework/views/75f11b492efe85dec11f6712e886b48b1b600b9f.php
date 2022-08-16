

<?php $__env->startSection('title', 'Admin cambiar contraseña'); ?>

<?php $__env->startSection('home'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/admin.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
    <!-- Navbar -->
    <div class="container">
        <p class="display-4" style="text-align:center;">cambiar contraseña</p>
        <hr>
        <form method="post" >
            <div class="row">
                <div class="col-md-10 new-item">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                          <label for="exampleInputEmail1">Contraseña actual</label>
                          <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tu contraseña actual" name="oldPass" value="">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Contraseña nueva</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese una nueva contraseña" name="newPass" value="">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Confirmar Contraseña</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirme su contraseña" name="confirmPass" value="">
                        </div>
                      <button type="submit" class="btn">Cambiar contraseña</button>
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
                </div>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.adminLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\log_in\resources\views/admin/profile/password.blade.php ENDPATH**/ ?>