

<?php $__env->startSection('title', 'Usuario Reservaciones'); ?>

<?php $__env->startSection('main_content'); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="display-4">
                    Reservaciones...
                </p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                      <thead>
                        <tr class="table-header table-row">
                          <th scope="col">Nombre</th>
                          <th scope="col">Fecha</th>
                          <th scope="col">Hora</ht>
                          <th scope="col">acción</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php $__currentLoopData = $reservations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reservation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="table-row">
                              <td><?php echo e($reservation->name); ?></span></td>
                              <td scope="row"><?php echo e($reservation->date); ?></td>
                              <td scope="row"><?php echo e($reservation->time); ?></td>
                              <td>
                                      <a href="<?php echo e(route('employee.cancelReservation', ['id' => $reservation->id])); ?>" type="button" class="btn btn-danger">Eliminar</a>
                              </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                </table>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('employee.layouts.employeeLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\log_in\resources\views/employee/reservations/show.blade.php ENDPATH**/ ?>