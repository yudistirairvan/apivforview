<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin/dashboard" class="brand-link">
      <img src="@yield('logo')" alt="adminlte Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SIP</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="@yield('profile')" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="/admin/dashboard" class="nav-link @yield('menudashboard')">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="/admin/user" class="nav-link @yield('menuuser')">
                <i class="fas fa-users"></i>
                <p>
                    User
                </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/admin/akun" class="nav-link @yield('menuakun')">
                <i class="fab fa-instagram"></i>
                <p>
                    Akun IG
                </p>
                </a>
            </li>
            <li class="nav-item has-treeview @yield('menupembukuan') ">
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
            </li>

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
