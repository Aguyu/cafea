

<?php $__env->startSection('title', 'Admin Eliminar usuario'); ?>

<?php $__env->startSection('home'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/admin.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
    <!-- Navbar -->
    <div class="container">
        <p class="display-4" style="text-align:center;">Eliminar?</p>
        <hr>
        <form method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-8 new-item">
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" name="employee_id" value="<?php echo e($employee->id); ?>">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nombre</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Employee Name" name="name" value="<?php echo e($employee->name); ?>" readonly>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Correo electrónico</label>
                          <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Employee Email" name="email" value="<?php echo e($employee->email); ?>" readonly>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Telefono</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Employee Phone" name="phone" value="<?php echo e($employee->phone); ?>" readonly>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Contraseña</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Employee Password" name="password" value="<?php echo e($employee->password); ?>" readonly>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Dirección</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Employee Address" name="address" value="<?php echo e($employee->address); ?>" readonly>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Genero</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Employee Address" name="address" value="<?php echo e($employee->gender); ?>" readonly>
                        </div>
                      <button type="submit" class="btn btn-danger">Eliminar</button>
                    <?php if($errors->any()): ?>
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <li><?php echo e($err); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <?php endif; ?>
                </div>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.adminLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\log_in\resources\views/admin/employees/remove.blade.php ENDPATH**/ ?>