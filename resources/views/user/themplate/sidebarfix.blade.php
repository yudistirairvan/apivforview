<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/user/dashboard" class="brand-link">
      <img src="@yield('logo')" alt="adminlte Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">View for View</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../images/users/{{ $user[0]->Picture }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/user/profile" class="d-block">{{ $user[0]->name ?? '' }} {{ $user[0]->LastName ?? '' }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="/user" class="nav-link @yield('menudashboard')">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="/user/profile" class="nav-link @yield('menuuser')">
                <i class="fas fa-users"></i>
                <p>
                    User
                </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/user/link" class="nav-link @yield('menulink')">
                <i class="fab fa-instagram"></i>
                <p>
                    Link
                </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/user/view" class="nav-link @yield('menugetcoin')">
                <i class="fab fa-youtube"></i>
                <p>
                    Get Coin
                </p>
                </a>
            </li>
            <!-- <li class="nav-item">
                <a href="/user/log" class="nav-link @yield('menulog')">
                
                <i class="fas fa-list"></i>
                <p>
                    Log
                </p>
                </a>
            </li> -->
            
            <!-- <li class="nav-item has-treeview @yield('menupembukuan') ">
            <a href="#" class="nav-link @yield('menupembukuan')">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Pembukuan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/pp/satuan" class="nav-link @yield('menusatuan')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PP Satuan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/pp/borongan" class="nav-link @yield('menuborongan')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Borongan</p>
                </a>
              </li>
              
            </ul>
            </li> -->

            <!-- <li class="nav-item">
                <a href="/admin/pembukuan" class="nav-link">
                <i class="fas fa-book"></i>
                <p>
                    Pembukuan
                </p>
                </a>
            </li> -->





          
          

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
