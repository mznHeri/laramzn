<!-- Content Header (Page header) -->
<?php
  $breadcrumbs = json_decode($breadcrumbs);
?>
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0 border-bottom1"><?= $title ?>
            <ol class="breadcrumb float-sm-right dropdown-item-title">
            
              <?php 
                foreach($breadcrumbs as $key => $value) : 
              ?>
                <li class="breadcrumb-item"><small class="badge badge-primary"><?php echo e($value); ?></small></li>
              <?php endforeach;?>
            </ol>
          </h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header --><?php /**PATH /var/www/html/laravel8/backend/resources/views/admin/layouts/breadcrumb.blade.php ENDPATH**/ ?>