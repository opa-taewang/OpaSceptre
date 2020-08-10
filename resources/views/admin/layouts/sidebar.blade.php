<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="/storage/adminLTE/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">TraffiCMS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/storage/adminLTE/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        {{-- Dashboard --}}
            <li class="nav-item">
                <a href="/dashboard" class="nav-link {{'/' == request()->path() || 'dashboard' == request()->path() ? 'active' : ''}}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                </p>
                </a>
            </li>

            {{-- Offenders --}}
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link {{'offenders' == request()->segment(1) ? 'active' : ''}}">
                    <i class="nav-icon fas fa-users"></i>
                <p>
                    Offenders
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                {{-- Branch of Starter page --}}
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/offenders/add" class="nav-link {{'offenders/add' == request()->path() ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Offenders</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/offenders/index" class="nav-link {{'offenders/index' == request()->path() ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Offenders</p>
                    </a>
                </li>
                </ul>
          </li>
          {{-- Offenders Ended --}}
          {{-- Vehicle starts --}}
          <li class="nav-item">
                <a href="/vehicle/index" class="nav-link {{'vehicle' == request()->segment(1) ? 'active' : ''}}">
                <i class="nav-icon fas fa-truck-pickup"></i>
                <p>
                    Vehicle
                </p>
                </a>
            </li>
          {{-- Vehicle --}}

          {{-- Vehicle ended --}}

          {{-- Offences links --}}
          <li class="nav-item has-treeview">
                <a href="#" class="nav-link {{'offences' == request()->segment(1) || 'crime' == request()->segment(1) ? 'active' : ''}}">
                <i class="nav-icon fas fa-exclamation-triangle"></i>
                <p>
                    Offences
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                {{-- Branch of Starter page --}}
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/offences/add" class="nav-link {{'offences/add' == request()->path() ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add offences</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/offences/index" class="nav-link {{'offences/index' == request()->path() ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Offences</p>
                    </a>
                </li>
                </ul>
          </li>
          {{-- Offences Ended --}}

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
