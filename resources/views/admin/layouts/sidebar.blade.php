<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="/storage/adminLTE/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">OpaSceptre</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/storage/adminLTE/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->first_name .' '. Auth::user()->last_name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        {{-- Dashboard --}}
            <li class="nav-item">
                <a href="{{route('admin.dashboard')}}" class="nav-link {{'admin/dashboard' == request()->path() ? 'active' : ''}}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                </p>
                </a>
            </li>

            {{-- Category --}}
            <li class="nav-item has-treeview {{'category' == request()->segment(2) || 'subcategory' == request()->segment(2) || 'brand' == request()->segment(2)? 'menu-open' : ''}}">
                <a href="#" class="nav-link {{'category' == request()->segment(2) || 'subcategory' == request()->segment(2) || 'brand' == request()->segment(2)? 'active' : ''}}">
                    <i class="nav-icon fas fa-code-branch"></i>
                <p>
                    Category
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                {{-- Branch of Starter page --}}
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('admin.category.show')}}" class="nav-link {{'category' == request()->segment(2) ? 'active' : ''}}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Category</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.subcategory.show')}}" class="nav-link {{'subcategory' == request()->segment(2) ? 'active' : ''}}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Sub Category</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.brand.show')}}" class="nav-link {{'brand' == request()->segment(2) ? 'active' : ''}}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Brand</p>
                        </a>
                    </li>
                </ul>
          </li>
          {{-- Category Ended --}}

          {{-- Products --}}
            <li class="nav-item has-treeview {{'product' == request()->segment(2) ? 'menu-open' : ''}}">
                <a href="#" class="nav-link {{'product' == request()->segment(2) ? 'active' : ''}}">
                    <i class="nav-icon fab fa-product-hunt"></i>
                <p>
                    Product
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                {{-- Branch of Starter page --}}
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('admin.product.create')}}" class="nav-link {{'admin/product/add' == request()->path() ? 'active' : ''}}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add Product</p>
                        </a>
                    </li>
                </ul>

                {{-- Branch of Starter page --}}
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('admin.product.index')}}" class="nav-link {{'admin/product' == request()->path() ? 'active' : ''}}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Product</p>
                        </a>
                    </li>
                </ul>
          </li>{{-- Product Ended --}}

          {{-- Order --}}
            <li class="nav-item has-treeview {{'order' == request()->segment(2) ? 'menu-open' : ''}}">
                <a href="#" class="nav-link {{'order' == request()->segment(2) ? 'active' : ''}}">
                    <i class="nav-icon fas fa-shopping-cart"></i>
                <p>
                    Order
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                {{-- Branch of Starter page --}}
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('admin.order.index')}}" class="nav-link {{'admin/order' == request()->path() ? 'active' : ''}}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Order</p>
                        </a>
                    </li>
                </ul>
          </li>{{-- Order Ended --}}

           {{-- Coupon --}}
            <li class="nav-item has-treeview {{'coupon' == request()->segment(2) ? 'menu-open' : ''}}">
                <a href="#" class="nav-link {{'coupon' == request()->segment(2) ? 'active' : ''}}">
                    <i class="nav-icon fas fa-tags"></i>
                <p>
                    Coupons
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                {{-- Branch of Starter page --}}
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('admin.coupon.show')}}" class="nav-link {{'coupon' == request()->segment(2) ? 'active' : ''}}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Coupon</p>
                        </a>
                    </li>
                </ul>
          </li>{{-- Coupon Ended --}}

          {{-- Coupon --}}
            <li class="nav-item has-treeview {{'payment-method' == request()->segment(2) ? 'menu-open' : ''}}">
                <a href="#" class="nav-link {{'payment-method' == request()->segment(2) ? 'active' : ''}}">
                    <i class="nav-icon fas fa-tags"></i>
                <p>
                    Payment Methods
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                {{-- Branch of Starter page --}}
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('admin.paymentMethod.show')}}" class="nav-link {{'payment-method' == request()->segment(2) ? 'active' : ''}}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Payment Method</p>
                        </a>
                    </li>
                </ul>
          </li>{{-- Coupon Ended --}}

          {{-- Others --}}
            <li class="nav-item has-treeview {{'newsletter' == request()->segment(2) ? 'menu-open' : ''}}">
                <a href="#" class="nav-link {{'newsletter' == request()->segment(2) ? 'active' : ''}}">
                    <i class="nav-icon fas fa-percent"></i>
                <p>
                    Others
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                {{-- Branch of Starter page --}}
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('admin.newsletter.show')}}" class="nav-link {{'newsletter' == request()->segment(2) ? 'active' : ''}}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Newsletter</p>
                        </a>
                    </li>
                </ul>
          </li>{{-- Category Ended --}}

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
