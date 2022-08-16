

<?php $__env->startSection('title', 'usuario Inicio'); ?>

<?php $__env->startSection('home'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/admin.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
    <!-- Navbar -->
    <div class="container">
        
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('employee.layouts.employeeLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\log_in\resources\views/employee/home.blade.php ENDPATH**/ ?>