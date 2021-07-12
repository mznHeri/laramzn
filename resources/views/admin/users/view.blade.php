@extends("admin.layouts.app")

@section('content')
<div class="col-md-6">
    <div class="card">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title"><i class="fas fa-search-plus"></i> View Users</h3>
            </div>
            <!-- /.card-header -->
           
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#userdata" data-toggle="tab">Profile</a></li>
                            <li class="nav-item"><a class="nav-link" href="#activity" data-toggle="tab">Activity</a></li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="userdata">
                                <!-- Post -->
                                <div class="card card-primary">
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <strong><i class="fas fa-user-alt mr-1"></i> Name</strong>
                                
                                        <p class="text-muted">
                                            {{$data->name}}
                                        </p>
                                
                                        <hr>

                                        <strong><i class="fas fa-book mr-1"></i> Username</strong>
                                
                                        <p class="text-muted">
                                            {{$data->username}}
                                        </p>
                                
                                        <hr>

                                        <strong><i class="fas fa-envelope mr-1"></i> Email</strong>
                                
                                        <p class="text-muted">
                                            {{$data->email}}
                                        </p>
                                
                                        <hr>

                                        <strong><i class="fas fa-key mr-1"></i> Password</strong>
                                
                                        <p class="text-muted">
                                            {{'******'}}
                                        </p>
                                
                                        <hr>

                                        <strong><i class="fas fa-user-tag mr-1"></i> Role</strong>
                                
                                        <p class="text-muted">
                                            <?php 
                                                if ($data->role == 1) echo 'Superadmin';
                                                if ($data->role == 2) echo 'General Admin';
                                                if ($data->role == 3) echo 'Admin';
                                            ?>
                                        </p>
                                
                                        <hr>

                                        <strong><i class="fas fa-toggle-on mr-1"></i> Status</strong>
                                
                                        <p class="text-muted">
                                            <?= ($data->active != 1) ? '<span class="btn btn-info btn-sm">active</span>' : '<span class="btn btn-warning btn-sm">not active</span>' ?>
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