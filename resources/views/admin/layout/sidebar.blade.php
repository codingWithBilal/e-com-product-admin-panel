<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('admin_asset/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Code97 Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('admin_asset/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->guard('admin')->user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item {{ request()->routeIs('admin-dashboard') ? 'menu-open' : '' }}">
            <a href="{{ route('admin-dashboard')}}" class="nav-link {{ request()->routeIs('admin-dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          
          <li class="nav-item {{ request()->routeIs('admin-addons') ? 'menu-open' : '' }}{{ request()->routeIs('admin-create-addons') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ request()->routeIs('admin-addons') ? 'active' : '' }}{{ request()->routeIs('admin-create-addons') ? 'active' : '' }}">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Addons
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin-addons') }}" class="nav-link {{ request()->routeIs('admin-addons') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Addons List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin-create-addons') }}" class="nav-link {{ request()->routeIs('admin-create-addons') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Addons</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ request()->routeIs('admin-addons-category') ? 'menu-open' : '' }}{{ request()->routeIs('admin-create-addons-category') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ request()->routeIs('admin-addons-category') ? 'active' : '' }} {{ request()->routeIs('admin-create-addons-category') ? 'active' : '' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Addons Category
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin-addons-category') }}" class="nav-link {{ request()->routeIs('admin-addons-category') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Addons Category List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin-create-addons-category') }}" class="nav-link {{ request()->routeIs('admin-create-addons-category') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Category</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ request()->routeIs('admin-products') ? 'menu-open' : '' }} {{ request()->routeIs('admin-create-product') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ request()->routeIs('admin-products') ? 'active' : '' }} {{ request()->routeIs('admin-create-product') ? 'active' : '' }}">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Product
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin-products') }}" class="nav-link {{ request()->routeIs('admin-products') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin-create-product') }}" class="nav-link {{ request()->routeIs('admin-create-product') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Product</p>
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