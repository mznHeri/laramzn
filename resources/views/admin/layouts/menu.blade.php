<!-- Main Sidebar Container -->
<?php $idx = '';
  if(isset($id)) $idx = $id;
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{url('/public/adminlte/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <span class="d-block capitalize">{{Auth::user()->name}}</span>
          <span class="d-block capitalize">Role : <?php
            if(Auth::user()->role == 1) echo 'Superadmin';
            if(Auth::user()->role == 2) echo 'General Admin';
            if(Auth::user()->role == 3) echo 'Admin';
          ?></span>
        </div>
      </div> --}}

      {{-- <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
<!-- /.Backend -->
        <li class="nav-header"><i class="nav-icon far fas fa-arrow-circle-right text-info"></i> BackEnd Config</li>
          <li class="nav-item">
            <a href="{{url('dashboard')}}" class="nav-link active" style="background: #639e39;">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard 
              </p>
            </a>
          </li> 
          <li class="nav-item {{ ('users' == str_replace('dashboard/', '', request()->path()) || 'users/create' == str_replace('dashboard/', '', request()->path()) || "users/edit/$idx" == str_replace('dashboard/', '', request()->path()) || "users/view/$idx" == str_replace('dashboard/', '', request()->path()) ) ? 'menu-open' : ''  }}">
            <a href="{{url('dashboard/users')}}" class="nav-link {{ ('users' == str_replace('dashboard/', '', request()->path()) || 'users/create' == str_replace('dashboard/', '', request()->path()) || "users/edit/$idx" == str_replace('dashboard/', '', request()->path()) || "users/view/$idx" == str_replace('dashboard/', '', request()->path()) ) ? 'active' : '' }}">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Users
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="background: #2b2b2b;">
              <li class="nav-item {{ ('users' == str_replace('dashboard/', '', request()->path()) || "users/view/$idx" == str_replace('dashboard/', '', request()->path())  ) ? 'active bg-gr' : '' }}">
                <a href="{{url('dashboard/users')}}" class="nav-link">
                  <i class="far fa-eye nav-icon"></i>
                  <p>View Users</p>
                </a>
              </li>
              <li class="nav-item {{ ('users/create' == str_replace('dashboard/', '', request()->path()) ) ? 'active bg-gr' : '' }}">
                <a href="{{url('dashboard/users/create')}}" class="nav-link">
                  <i class="far fa-plus-square nav-icon"></i>
                  <p>Create User</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item {{ ('config' == str_replace('dashboard/', '', request()->path()) || 'config/create' == str_replace('dashboard/', '', request()->path()) || "config/edit/$idx" == str_replace('dashboard/', '', request()->path()) || "config/view/$idx" == str_replace('dashboard/', '', request()->path()) ) ? 'menu-open' : ''  }}">
            <a href="{{url('dashboard/config')}}" class="nav-link {{ ('config' == str_replace('dashboard/', '', request()->path()) || 'config/create' == str_replace('dashboard/', '', request()->path()) || "config/edit/$idx" == str_replace('dashboard/', '', request()->path()) || "config/view/$idx" == str_replace('dashboard/', '', request()->path()) ) ? 'active' : '' }}">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Config
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="background: #2b2b2b;">
              <li class="nav-item {{ ('config' == str_replace('dashboard/', '', request()->path()) || "config/view/$idx" == str_replace('dashboard/', '', request()->path())  ) ? 'active bg-gr' : '' }}">
                <a href="{{url('dashboard/config')}}" class="nav-link">
                  <i class="far fa-eye nav-icon"></i>
                  <p>View Config</p>
                </a>
              </li>
              <li class="nav-item {{ ('config/create' == str_replace('dashboard/', '', request()->path()) ) ? 'active bg-gr' : '' }}">
                <a href="{{url('dashboard/config/create')}}" class="nav-link">
                  <i class="far fa-plus-square nav-icon"></i>
                  <p>Create Config</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{ ('media' == str_replace('dashboard/', '', request()->path()) ) ? 'active bg-gr' : '' }}">
            <a href="{{url('dashboard/media')}}" class="nav-link">
              <i class="nav-icon fas fa-photo-video"></i>
              <p>
                Media
              </p>
            </a>
          </li>
          
 <!-- /.Frontend -->
          <li class="nav-header"><i class="nav-icon far fas fa-arrow-circle-right text-warning"></i> FrontEnd Config</li>
          <li class="nav-item">
            <a href="{{url('dashboard/frontend')}}" class="nav-link active" style="background: #639e39;">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Frontend Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item {{ ('frontend/post' == str_replace('dashboard/', '', request()->path()) || 'frontend/post/create' == str_replace('dashboard/', '', request()->path()) || 'frontend/post/category' == str_replace('dashboard/', '', request()->path()) ) ? 'menu-open' : ''  }}">
            <a href="{{url('dashboard/frontend/post')}}" class="nav-link {{ ('frontend/post' == str_replace('dashboard/', '', request()->path()) || 'frontend/post/create' == str_replace('dashboard/', '', request()->path()) || 'frontend/post/category' == str_replace('dashboard/', '', request()->path()) ) ? 'active' : ''  }}">
              <i class="nav-icon fas fa-clipboard"></i>
              <p>
                Posts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="background: #2b2b2b;">
              <li class="nav-item">
                <a href="{{url('dashboard/frontend/post')}}" class="nav-link {{ ('frontend/post' == str_replace('dashboard/', '', request()->path())) ? 'active' : ''  }}">
                  <i class="far fa-eye nav-icon"></i>
                  <p>All Posts</p>
                </a>
              </li>
              <li class="nav-item {{ ( 'frontend/post/create' == str_replace('dashboard/', '', request()->path()) ) ? 'active' : ''  }}">
                <a href="{{url('dashboard/frontend/post/create')}}" class="nav-link">
                  <i class="far fa-plus-square nav-icon"></i>
                  <p>Add Post</p>
                </a>
              </li>
              <li class="nav-item {{ ( 'frontend/post/category' == str_replace('dashboard/', '', request()->path()) ) ? 'active' : ''  }}">
                <a href="{{url('dashboard/frontend/post/category')}}" class="nav-link">
                  <i class="far fas fa-project-diagram nav-icon"></i>
                  <p>Add Category</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{url('dashboard/frontend/page')}}" class="nav-link">
              <i class="nav-icon fas fa-paste"></i>
              <p>
                Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="background: #2b2b2b;">
              <li class="nav-item">
                <a href="{{url('dashboard/frontend/page')}}" class="nav-link">
                  <i class="far fa-eye nav-icon"></i>
                  <p>All Pages</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('dashboard/frontend/page/create')}}" class="nav-link">
                  <i class="far fa-plus-square nav-icon"></i>
                  <p>Add Page</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{url('dashboard/frontend/menu')}}" class="nav-link">
              <i class="nav-icon fas fa-bars"></i>
              <p>
                Menu
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('dashboard/frontend/themes')}}" class="nav-link">
              <i class="nav-icon fas fa-tv"></i>
              <p>
                Themes
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('dashboard/frontend/option')}}" class="nav-link">
              <i class="nav-icon fas fa-feather"></i>
              <p>
                Options
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('logout')}}" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>