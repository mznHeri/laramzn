<!DOCTYPE html>

<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Starter</title>
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo e(url('/public/adminlte/fontawesome-free/css/all.min.css')); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(url('/public/adminlte/css/adminlte.css')); ?>">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
  
  <link rel="stylesheet" href="<?php echo e(url('/public/adminlte/css/style.css')); ?>">
  <?php echo $__env->yieldContent('css'); ?>
</head>
<body class="dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

    <?php echo $__env->make('admin.layouts.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php echo $__env->make('admin.layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Main content -->
    <div class="content">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php echo $__env->make('admin.layouts.sidebar-right', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('admin.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo e(url('/public/adminlte/jquery/jquery.min.js')); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(url('/public/adminlte/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(url('/public/adminlte/js/adminlte.min.js')); ?>"></script>
<script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<?php echo $__env->yieldContent('script'); ?>
<?php echo $__env->yieldContent('script1'); ?>
<?php echo $__env->yieldContent('script2'); ?>
<?php echo $__env->yieldContent('script3'); ?>
<?php echo $__env->yieldContent('script4'); ?>
<?php echo $__env->yieldContent('script5'); ?>
</body>
</html>
<?php /**PATH /var/www/html/laravel8/backend/resources/views/admin/layouts/app.blade.php ENDPATH**/ ?>