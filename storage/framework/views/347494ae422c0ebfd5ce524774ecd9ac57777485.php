

<?php $__env->startSection('title', 'Usuario cancelar reservación'); ?>

<?php $__env->startSection('home'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/admin.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
    <!-- Navbar -->
    <div class="container">
                <p class="display-4" style="text-align:center;">¿Eliminar reservación?</p>
        <hr>
        <div class="row">
            <div class="col-md-10 new-item">
                <form method="post" >
                    <?php echo e(csrf_field()); ?>

                    <input type="hidden" name="id" value="<?php echo e($reservation->id); ?>" readonly>
                  <div class="form-group">
                    <label for="exampleInputEmail1">nombre del cliente</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre" name="status" value="<?php echo e($reservation->name); ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Hora</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="<?php echo e($reservation->time); ?>" name="capacity" value="<?php echo e($reservation->time); ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword2">Fecha</label>
                    <input type="number" class="form-control" id="exampleInputPassword2" placeholder="<?php echo e($reservation->date); ?>" name="capacity" value="<?php echo e($reservation->date); ?>" readonly>
                  </div>
                  <button type="submit" class="btn">Eliminar reservación </button>
                </form>
                <?php if($errors->any()): ?>
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <li><?php echo e($err); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.adminLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\log_in\resources\views/employee/reservations/remove.blade.php ENDPATH**/ ?>