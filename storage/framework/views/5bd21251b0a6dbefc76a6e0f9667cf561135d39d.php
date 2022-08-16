

<?php $__env->startSection('title', 'Admin mostrar usuarios'); ?>

<?php $__env->startSection('main_content'); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <p class="display-4">Usuarios..</p>
            </div>
            <div class="col-md-5">
                <form method="post" class="form-inline order-form">
                    <?php echo e(csrf_field()); ?>

                    <select class="input-group-text dropbar" id="inputGroupSelect01" name="searchBy" required>
                            <option value="name">Nombre</option>
                            <option value="email">Correo electronico</option>
                            <option value="phone">Telefono</option>
                            <option value="address">Dirección</option>
                            <option value="gender">Genero</option>
                            <option value="created_at">fecha de creación de cuenta</option>
                    </select>
                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search" name="word" required>
                    <button class="btn my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </div>
        </div>
        <hr>
          <div class="row">
              <div class="col-md-12">
                  <table class="table table-striped">
                        <thead>
                          <tr class="table-header table-row">
                            <th scope="col">Nombre del usuario</th>
                            <th scope="col">Correo electronico</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Dirección</th>
                            <th scope="col">Genero</th>
                            <th scope="col">Fecha de creación de cuenta</th>
                            <th scope="col">Acción</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="table-row">
                                    <?php if($employee->is_admin): ?>
                                        <?php continue; ?>
                                    <?php endif; ?>
                                    <td><?php echo e($employee->name); ?></td>
                                    <td><?php echo e($employee->email); ?></td>
                                    <td><?php echo e($employee->phone); ?></td>
                                    <td><?php echo e($employee->address); ?></td>
                                    <td><?php echo e($employee->gender); ?></td>
                                    <td><?php echo e($employee->created_at); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('admin.removeEmployee', ['id' => $employee->id])); ?>" type="button" class="btn btn-danger">Eliminar</a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                  </table>
              </div>
          </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.adminLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\log_in\resources\views/admin/employees/show.blade.php ENDPATH**/ ?>