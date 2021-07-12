@extends("admin.layouts.app")

@section('content')
<div class="card">
    <div class="card-body">
        <a href="{{route('createconfig')}}" class="btn btn-info"><i class="fas fa-cog"></i> Add Config</a>
        </br></br>
        <table id="usertable" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">Meta Key</th>
            <th class="text-center">Value Key</th>
            <th class="text-center">Info</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <tbody>
            <?php 
                $no = 1;
                foreach($datas as $key => $value) :
                    $active = 'active';
                    if($value->delete_flag == 1) {
                        $active = 'btn-warning ';
                    }
            ?>
                <tr class="{{$active}}">
                    <td class="text-center">{{$no}}</td>
                    <td>{{$value->meta_key}}</td>
                    <td>{{$value->value_key}}</td>
                    <td>{{$value->ket}}</td>
                    <td class="text-center">
                        <a class="btn btn-primary btn-sm" href="{{url("dashboard/config/view/$value->id_config")}}" title="View">
                            <i class="fas fa-search">
                            </i>
                            
                        </a>
                        <a class="btn btn-info btn-sm" href="{{url("dashboard/config/edit/$value->id_config")}}" title="Edit">
                            <i class="fas fa-pencil-alt">
                            </i>
                            
                        </a>
                        <?php if($active == 'active') : ?>
                            <span class="btn btn-danger btn-sm" onclick="showalert({{$value->id_config}})" title="Delete">
                                <i class="fas fa-trash">
                                </i>
                                
                            </span>
                        <?php else : ?>
                            <span class="btn btn-success btn-sm" onclick="showalert({{$value->id_config}}, 1)" title="Activited">
                                <i class="fas fa-toggle-on">
                                </i>

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
          <p id="content_modal_body">Are you sure to delete this ?</p>
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
            var link = '{{URL::to('/dashboard/config/delete/')}}\/';
           
            if(flag == 1) {
                $('#link').html('Activited');
                $("#content_modal_body").html('Are you sure to Activited this ?');
                $('#link').addClass('btn-success');
                $("#link").attr("href", link + id + '?flag=1');
            } else {
                $('#link').html('Delete');
                $("#content_modal_body").html('Are you sure to delete this ?');
                $('#link').addClass('btn-danger');
                $("#link").attr("href", link + id);
            }
               
            $("#myModal").modal();
        }
    </script>
@endsection