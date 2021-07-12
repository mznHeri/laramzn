<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-body">
        <a href="<?php echo e(route('createusers')); ?>" class="btn btn-info"><i class="fas fa-plus-circle"></i> Add User</a>
        </br></br>
        <table id="usertable" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">Name</th>
            <th class="text-center">Username</th>
            <th class="text-center">Email</th>
            <th class="text-center">Active</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <tbody>
            <?php 
                $no = 1;
                foreach($datas as $key => $value) :
                    $active = 'active';
                    if($value->active == 1) {
                        $active = 'btn-warning ';
                    }

            ?>
                <tr class="<?php echo e($active); ?>">
                    <td class="text-center"><?php echo e($no); ?></td>
                    <td><?php echo e($value->name); ?></td>
                    <td><?php echo e($value->username); ?></td>
                    <td><?php echo e($value->email); ?></td>
                    <td class="text-center"><?php if($active != 'active') echo '<span class="btn btn-warning btn-sm">not Active'; else echo '<span class="btn btn-success btn-sm">Active'?></span></td>
                    <td class="text-center">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-search">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <?php if($active == 'active') : ?>
                            <span class="btn btn-danger btn-sm" onclick="showalert(<?php echo e($value->id); ?>)">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </span>
                        <?php else : ?>
                            <span class="btn btn-success btn-sm" onclick="showalert(<?php echo e($value->id); ?>, 1)">
                                <i class="fas fa-trash">
                                </i>
                                Activited
                            </span>
                        <?php endif ?>
                    </td>
                </tr>
        
            <?php $no++; endforeach;?>

        </tbody>
        </table>
    </div>
</div>
<?php if(Session::has('message')): ?>
    <div id="toastsContainerTopRight" class="toasts toasts-top-right fixed" style="display: none;">
        <div class="toast bg-warning fade show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header"><strong class="mr-auto"><i class="fas fa-info"></i> info :</strong></div>
            <div class="toast-body"><?php echo e(Session::get('message')); ?></div>
        </div>
    </div>
<?php endif; ?>

<!-- Modal Delete-->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background: #ff8d00;">
          <h4 class="modal-title" style="color: #FFF;">Warning</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p>Are you sure to delete this ?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <a id="link" class="btn" rel="tooltip" href="">Delete</a>
        </div>
      </div>
  
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        $(document).ready( function () {
            $('#usertable').DataTable();
            var hideinfo = function(){
                $('#toastsContainerTopRight').hide(1000);
            };

            var showinfo = function(){
            $('#toastsContainerTopRight').show(1000);
                setTimeout(hideinfo, 6000);
            };
            setTimeout(showinfo, 1000);
        });

        function showalert(id, flag) {
            var link = '<?php echo e(URL::to('/dashboard/users/delete/')); ?>\/';
           
            if(flag == 1) {
                $('#link').html('Activited');
                $('#link').addClass('btn-success');
                $("#link").attr("href", link + id + '?flag=1');
            } else {
                $('#link').html('Delete');
                $('#link').addClass('btn-danger');
                $("#link").attr("href", link + id);
            }
               
            $("#myModal").modal();
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel8/backend/resources/views/admin/users/index.blade.php ENDPATH**/ ?>