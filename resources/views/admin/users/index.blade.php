@extends("admin.layouts.app")

@section('content')
<div class="card">
    <div class="card-body">
        <a href="{{route('createusers')}}" class="btn btn-info"><i class="fas fa-plus-circle"></i> Add User</a>
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
                <tr class="{{$active}}">
                    <td class="text-center">{{$no}}</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->username}}</td>
                    <td>{{$value->email}}</td>
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
                            <span class="btn btn-danger btn-sm" onclick="showalert({{$value->id}})">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </span>
                        <?php else : ?>
                            <span class="btn btn-success btn-sm" onclick="showalert({{$value->id}}, 1)">
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
@if (Session::has('message'))
    <div id="toastsContainerTopRight" class="toasts toasts-top-right fixed" style="display: none;">
        <div class="toast bg-warning fade show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header"><strong class="mr-auto"><i class="fas fa-info"></i> info :</strong></div>
            <div class="toast-body">{{ Session::get('message') }}</div>
        </div>
    </div>
@endif

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

@endsection

@section('script')
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
            var link = '{{URL::to('/dashboard/users/delete/')}}\/';
           
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
@endsection