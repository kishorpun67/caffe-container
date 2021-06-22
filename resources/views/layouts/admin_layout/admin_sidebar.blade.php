  <!-- Main Sidebar Container -->

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
  <a href="{{route('admin.dashboard')}}" class="brand-link">
      <img src="{{asset('image/admin_image/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin | Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('image/admin_image/admin_photos/'.Auth::guard('admin')->user()->image)}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::guard('admin')->user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->
          @if(Session::get('page')=="dashboard")
           <?php $active = "active"; ?>
            @else
            <?php $active = ""; ?>
          @endif
          <li class="nav-item">
            <a href="{{route('admin.dashboard')}}" class="nav-link {{$active}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          @if(Session::get('page')=="setting" || Session::get('page')=="updateAdminDetail")
           <?php $active = "active";
           $menuOpen="menu-open"; ?>
            @else
            <?php $active = "";
            $menuOpen=""; ?>
          @endif
          <li class="nav-item has-treeview {{$menuOpen ??''}} ">
            <a href="#" class="nav-link {{$active}}">
              <i class="fas fa-cogs"></i>
              <p>
                Settings
                <i class="fas fa-angle-left right"></i>
                <span class="right badge badge-danger"></span>
              </p>
            </a>

            @if(Session::get('page')=="setting")
           <?php $active = "active"; ?>
            @else
            <?php $active = ""; ?>
            @endif
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.settings')}}" class="nav-link {{$active}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Update Admin Password</p>
                </a>
              </li>
              @if(Session::get('page')=="updateAdminDetail")
              <?php $active = "active"; ?>
              @else
              <?php $active = ""; ?>
              @endif
              <li class="nav-item">
                <a href="{{route('admin.update.admin.details')}}" class="nav-link {{$active}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Update Admin Details</p>
                </a>
              </li>
            </ul>
          </li>
          @if(Session::get('page')=="category")
           <?php $active = "active";
           $menuOpen="menu-open"; ?>
            @else
            <?php $active = "";
            $menuOpen=""; ?>
          @endif
          <li class="nav-item has-treeview {{$menuOpen ??''}} ">
            <a href="#" class="nav-link {{$active}}">
              <i class="fas fa-bars"></i>
              <p>
                Category
                <i class="fas fa-angle-left right"></i>
                <span class="right badge badge-danger"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @if(Session::get('page')=="category")
              <?php $active = "active"; ?>
              @else
              <?php $active = ""; ?>
              @endif
              <li class="nav-item">
                <a href="{{route('admin.category')}}" class="nav-link {{$active}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Category</p>
                </a>
              </li>
            </ul>
          </li>
          @if(Session::get('page')=="item")
           <?php $active = "active";
           $menuOpen="menu-open"; ?>
            @else
            <?php $active = "";
            $menuOpen=""; ?>
          @endif
          <li class="nav-item has-treeview {{$menuOpen ??''}} ">
            <a href="#" class="nav-link {{$active}}">
                <i class="fas fa-utensils"></i>
                <p>
                Item
                <i class="fas fa-angle-left right"></i>
                <span class="right badge badge-danger"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @if(Session::get('page')=="item")
              <?php $active = "active"; ?>
              @else
              <?php $active = ""; ?>
              @endif
              <li class="nav-item">
                <a href="{{route('admin.item')}}" class="nav-link {{$active}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Item</p>
                </a>
              </li>
            </ul>
          </li>

          @if(Session::get('page')=="banner")
          <?php $active = "active";
          $menuOpen="menu-open"; ?>
           @else
           <?php $active = "";
           $menuOpen=""; ?>
         @endif
         <li class="nav-item has-treeview {{$menuOpen ??''}} ">
           <a href="#" class="nav-link {{$active}}">
            <i class="fa fa-" aria-hidden="true"></i>
            <p>
               Banner
               <i class="fas fa-angle-left right"></i>
               <span class="right badge badge-danger"></span>
             </p>
           </a>
           <ul class="nav nav-treeview">
             @if(Session::get('page')=="banner")
             <?php $active = "active"; ?>
             @else
             <?php $active = ""; ?>
             @endif
             <li class="nav-item">
               <a href="{{route('admin.banner')}}" class="nav-link {{$active}}">
                 <i class="far fa-circle nav-icon"></i>
                 <p>View Banner</p>
               </a>
             </li>
           </ul>
         </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

