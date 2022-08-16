

<?php $__env->startSection('title', 'Admin mostrar reservaciones'); ?>

<?php $__env->startSection('main_content'); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <p class="display-4">Reservaciones..</p>
            </div>
            <div class="col-md-5">
                <form method="post" class="form-inline order-form">
                    <?php echo e(csrf_field()); ?>

                    <select class="input-group-text dropbar" id="inputGroupSelect01" name="searchBy" required>
                            <option value="name">id</option>
                            <option value="table_id">id de la mesa</option>
                            <option value="employee_id">id del usuario</option>
                            <option value="name">nombre del usuario</option>
                            <option value="date">fecha </option>
                            <option value="created_at">fecha de la reservación</option>
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
                            <th scope="col">id de la reservación</th>
                            <th scope="col">id de la mesa</th>
                            <th scope="col">id del usuario</th>
                            <th scope="col">nombre del usuario</th>
                            <th scope="col">fecha</th>
                            <th scope="col">Fecha de reservación</th>
                            <th scope="col">Acción</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $reservaciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reservacion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="table-row">
                                    <td><?php echo e($reservacion->id); ?></td>
                                    <td><?php echo e($reservacion->table_id); ?></td>
                                    <td><?php echo e($reservacion->employee_id); ?></td>
                                    <td><?php echo e($reservacion->name); ?></td>
                                    <td><?php echo e($reservacion->date); ?></td>
                                    <td><?php echo e($reservacion->created_at); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('admin.removeReservation',['id' => $reservacion->id])); ?>" type="button" class="btn btn-danger">Eliminar</a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                  </table>
              </div>
          </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.adminLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\log_in\resources\views/admin/reservations/show.blade.php ENDPATH**/ ?>