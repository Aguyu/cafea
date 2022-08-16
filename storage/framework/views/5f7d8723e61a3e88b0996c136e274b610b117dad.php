<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo e(asset('css/admin.css')); ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <title><?php echo $__env->yieldContent('title'); ?></title>
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <a class="navbar-brand" href="#">Café la abuelita</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse nav-holders" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo e(route('admin.home')); ?>">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Reservaciones</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="<?php echo e(route('admin.showReservations')); ?>">Ver Reservaciones</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Usuarios</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="<?php echo e(route('admin.showEmployees')); ?>">Ver usuarios</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Mesas</a>
                <div class="dropdown-menu">
                <a class="dropdown-item" href="<?php echo e(route('admin.showTables')); ?>">ver mesas</a>
                  <a class="dropdown-item" href="<?php echo e(route('admin.showAvailableTables')); ?>">ver mesas disponibles</a>
  
                  <a class="dropdown-item" href="<?php echo e(route('admin.newTable')); ?>">Añadir mesa</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Perfil</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="<?php echo e(route('admin.showProfile')); ?>">Ver perfil</a>
                  <a class="dropdown-item" href="<?php echo e(route('admin.editProfile')); ?>">Editar perfil</a>
                  <a class="dropdown-item" href="<?php echo e(route('admin.editPassword')); ?>">Cambiar contraseña</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php echo e(route('logout')); ?>">cerrar sesión</a>
                </div>
            </li>
          </ul>
        </div>
    </nav>
    <?php echo $__env->yieldContent('main_content'); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
<?php /**PATH C:\laragon\www\log_in\resources\views/admin/layouts/adminLayout.blade.php ENDPATH**/ ?>