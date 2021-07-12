@extends("admin.layouts.app")

@section('content')
<div class="col-md-6">
    <div class="card">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title"><i class="fas fa-cog"></i> View Config</h3>
            </div>
            <!-- /.card-header -->
           
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#userdata" data-toggle="tab">Config</a></li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="userdata">
                                <!-- Post -->
                                <div class="card card-primary">
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <strong><i class="fas fa-user-alt mr-1"></i> Meta Key</strong>
                                
                                        <p class="text-muted">
                                            {{$data->meta_key}}
                                        </p>
                                
                                        <hr>

                                        <strong><i class="fas fa-book mr-1"></i> Meta Value</strong>
                                
                                        <p class="text-muted">
                                            {{$data->value_key}}
                                        </p>
                                
                                        <hr>

                                        <strong><i class="fas fa-envelope mr-1"></i> Info</strong>
                                
                                        <p class="text-muted">
                                            {{$data->ket}}
                                        </p>
                                
                                        <hr>
                                
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.post -->
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="activity">
                               
                            </div>
                            <!-- /.tab-pane -->
            
                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>

        </div>
    </div>
</div>



@endsection

@section('script')

@endsection