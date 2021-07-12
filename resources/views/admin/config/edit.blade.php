@extends("admin.layouts.app")

@section('content')
<div class="col-md-6">
    <div class="card">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title"><i class="fas fa-cog"></i> Add Config</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{url('dashboard/config/edit').'/'.$id}}" method="post">
                {{ csrf_field() }}
                <div class="card-body">

                    <div class="form-group">
                        <label for="meta_key">Meta Key</label>
                        <input type="text" class="form-control" name="meta_key" id="meta_key" placeholder="Meta Key" required value="{{$data->meta_key}}">
                    </div>

                    <div class="form-group">
                        <label for="meta_value">Meta Value</label>
                        <input type="text" class="form-control" name="meta_value" id="meta_value" placeholder="Meta Value" required value="{{$data->value_key}}">
                    </div>

                    <div class="form-group">
                        <label for="info">Info</label>
                        <textarea class="form-control" name="info" id="info" placeholder="Info">{{$data->ket}}</textarea>
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