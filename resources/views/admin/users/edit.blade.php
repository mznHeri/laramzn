@extends("admin.layouts.app")

@section('content')
<div class="col-md-6">
    <div class="card">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title"><i class="fas fa-plus-circle"></i> Add Users</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{url('dashboard/users/edit').'/'.$id}}" method="post">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required value="{{$data->name}}">
                    </div>

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter Username" required value="{{$data->username}}">
                    </div>

                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required value="{{$data->email}}">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    </div>

                    <div class="form-group">
                        <label>Select Role</label>
                        <select class="form-control" name="role" required>
                            <option value="">--Choose Role--</option>
                            <option value="2" <?php if($data->role == 2) echo 'selected'?>>General Admin</option>
                            <option value="3" <?php if($data->role == 3) echo 'selected'?>>Admin</option>
                        </select>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="status_active" <?php if($data->active != 1) echo 'checked'?>>
                        <label class="form-check-label" name="active" for="status_active">Status Active</label>
                    </div>
                    
                </div>
                <!-- /.card-body -->
        
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@if (Session::has('message'))
    <div id="toastsContainerTopRight" class="toasts toasts-top-right fixed">
        <div class="toast bg-warning fade show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header"><strong class="mr-auto"><i class="fas fa-info"></i> info :</strong></div>
            <div class="toast-body">{{ Session::get('message') }}</div>
        </div>
    </div>
@endif



@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        var hideinfo = function(){
          $('#toastsContainerTopRight').hide(1000);
        };

        var showinfo = function(){
          $('#toastsContainerTopRight').show(1000);
          setTimeout(hideinfo, 6000);
        };
        setTimeout(showinfo, 1000);

    });
</script>
@endsection