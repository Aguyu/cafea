

<?php $__env->startSection('title', 'Admin mesas disponibles'); ?>

<?php $__env->startSection('main_content'); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="display-4">
                    Lista de todas las mesas disponibles...
                </p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                      <thead>
                        <tr class="table-header table-row">
                          <th scope="col">ID</th>
                          <th scope="col">Estado</th>
                          <th scope="col">Capacidad</th>
                          <th scope="col">fecha</ht>
                          <th scope="col">hora</ht>
                          <th scope="col">acción</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php $__currentLoopData = $tables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $table): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="table-row">
                              <th scope="row"><?php echo e($table->id); ?></th>
                              <td><span class="badge badge-pill <?php echo e($table->status == 'Available' ? 'badge-success' : 'badge-danger'); ?>"><?php echo e($table->status); ?></span></td>
                              <td scope="row"><?php echo e($table->capacity); ?></td>
                              <td scope="row"><?php echo e($table->date); ?></td>
                              <td scope="row"><?php echo e($table->time); ?></td>
                              <td>
                                  <form method="post">
                                      <?php echo e(csrf_field()); ?>

                                      <input type="hidden" name="table_id" value="<?php echo e($table->id); ?>">
                                      <button type="submit" class="btn btn-light">
                                          Cambiar estado
                                      </button>
                                      <a href="<?php echo e(route('admin.removeTable', ['id' => $table->id])); ?>" type="submit" class="btn btn-danger">
                                          Eliminar mesa
                                      </a>
                                  </form>
                              </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                </table>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.adminLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\log_in\resources\views/admin/tables/available.blade.php ENDPATH**/ ?>