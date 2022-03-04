    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="{{ URL::asset('assets/pharm.png')}}" alt="Pharm Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">{{ env('APP_NAME') }}</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ URL::asset('assets/img/profile.jpg')}}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                        <span class="right badge badge-success">
                            @if (!empty(Auth::user()->getRoleNames()))
                                @foreach (Auth::user()->getRoleNames() as $v)
                                    {{ $v }}
                                @endforeach
                            @endif
                        </span>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            {{-- <div class="form-inline">
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

                    {{-- <li class="nav-item ">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                Products
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/charts/chartjs.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>New Product</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/charts/flot.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View Products</p>
                                </a>
                            </li>

                        </ul>
                    </li>--}}
                    <li class="nav-item">
                        <a href="{{route('viewcategory') }}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                {{ __('tran.categories') }}
                                <span class="right badge badge-danger"> {{\App\models\category::count()}} </span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('viewunit') }}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                {{__('tran.units')}}
                                <span class="right badge badge-danger">{{\App\models\Unit::count()}}</span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('viewwarehouses') }}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                {{ __('tran.warehouse') }}
                                <span class="right badge badge-danger"> {{\App\models\Warehouse::count()}} </span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                {{ __('tran.product') }}
                                <span class="right badge badge-danger"> {{\App\models\Product::count()}} </span>
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('product.view') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> {{ __('tran.view') . __('tran.product') }}</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('product.create') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> {{ __('tran.new') . __('tran.product') }}</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('roles.view') }}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                {{ __('tran.roles') }}
                                {{-- <span class="right badge badge-danger"> {{\App\models\Rolse::count()}} </span> --}}
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('users.view') }}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                {{ __('tran.users') }}
                                <span class="right badge badge-danger"> {{\App\models\User::count()}} </span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('orders.view') }}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                {{ __('tran.order') }}
                                <span class="right badge badge-danger"> {{\App\models\Order::count()}}  </span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('setting.view') }}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                {{ __('tran.settingfront') }}
                     
                            </p>
                        </a>
                    </li>

                    {{-- <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                Warehouse
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/charts/chartjs.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>New Warehouse</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/charts/flot.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View Warehouse</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                Orders
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/charts/chartjs.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View Orders</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/charts/flot.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View Warehouse</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                Brands
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/charts/chartjs.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>New Brand</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/charts/flot.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View Warehouse</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-header">EXAMPLES</li>
                    <li class="nav-item">
                        <a href="pages/calendar.html" class="nav-link">
                            <i class="nav-icon far fa-calendar-alt"></i>
                            <p>
                                Calendar
                                <span class="badge badge-info right">2</span>
                            </p>
                        </a>
                    </li> --}}

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
