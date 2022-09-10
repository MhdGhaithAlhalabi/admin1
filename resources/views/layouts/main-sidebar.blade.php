<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
        <img src="{{asset('assets/dist/img/AdminLTELogo.png')}}" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLte</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">

                <a href="#" class="d-block">{{__('messages.adminName')}}</a>

            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="{{__('messages.search')}}" aria-label="Search">
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
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link {{request()->path() ==  LaravelLocalization::getCurrentLocale() .'/'.
                        'dashboard' ? 'active' :  ''}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                           {{__('messages.dashboard')}}
                        </p>
                    </a>
                <li class="nav-item">
                    <a href="/customers" class="nav-link {{request()->path() ==  LaravelLocalization::getCurrentLocale() .'/'.
                        'customers' ? 'active' :  ''}}">
                        <i class="nav-icon fa fa-address-card" aria-hidden="true"></i>
                        <p>
                            {{__('messages.customers')}}
                        </p>
                    </a>
                </li>

                </li>
                <li class="nav-item">
                    <a href="/product" class="nav-link {{request()->path() ==  LaravelLocalization::getCurrentLocale() .'/'.
                        'product' ? 'active' :  ''}}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            {{__('messages.products')}}

                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/contact" class="nav-link {{request()->path() ==  LaravelLocalization::getCurrentLocale() .'/'.
                        'contact' ? 'active' :  ''}}">
                        <i class="nav-icon fa fa-paper-plane" aria-hidden="true"></i>
                        <p>
                            {{__('messages.contacts')}}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/report" class="nav-link {{request()->path() ==  LaravelLocalization::getCurrentLocale() .'/'.
                        'report' ? 'active' :  ''}}">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            {{__('messages.reports')}}
                        </p>
                    </a>
                </li>

                <footer style="bottom: 0;position:fixed;">
                    <li class="nav-item">
                        <a {{--href="{{ route('logout') }}"--}} class="nav-link" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="nav-icon fa fa-sign-out"></i>
                            <p>
                                {{__('messages.logout')}}
                            </p>
                        </a>
      {{--                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>--}}
                    </li>
                </footer>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->

    </div>

    </div>

    <!-- /.sidebar -->
</aside>

