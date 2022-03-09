    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ route('dashborad') }}" class="brand-link">
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
                    {{-- @can('menuproduct') --}}
                    <li class="nav-header">{{ __('tran.products') }}</li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                {{ __('tran.product') }}
                                {{-- <span class="right badge badge-danger"> {{\App\models\Product::count()}} </span> --}}
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
                    {{-- @endcan --}}

                    {{-- @can('menucategory') --}}
                    <li class="nav-item">
                        <a href="{{route('viewcategory') }}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                {{ __('tran.categories') }}
                                {{-- <span class="right badge badge-danger"> {{\App\models\category::count()}} </span> --}}
                            </p>
                        </a>
                    </li>
                    {{-- @endcan --}}
                    {{-- @can('menuunit') --}}
                    <li class="nav-item">
                        <a href="{{route('viewunit') }}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                {{__('tran.units')}}
                                {{-- <span class="right badge badge-danger">{{\App\models\Unit::count()}}</span> --}}
                            </p>
                        </a>
                    </li>
                    {{-- @endcan --}}

                    {{-- @can('menuorder') --}}
                    <li class="nav-item">
                        <a href="{{route('orders.view') }}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                {{ __('tran.order') }}
                                {{-- <span class="right badge badge-danger"> {{\App\models\Order::count()}}  </span> --}}
                            </p>
                        </a>
                    </li>
                    {{-- @endcan
                    @can('menuwarehouse') --}}
                    <li class="nav-header">{{ __('tran.warehouse') }}</li>
                    <li class="nav-item">
                        <a href="{{route('viewwarehouses') }}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                {{ __('tran.warehouse') }}
                                {{-- <span class="right badge badge-danger"> {{\App\models\Warehouse::count()}} </span> --}}
                            </p>
                        </a>
                    </li>
                    {{-- @endcan
                    @can('menuaccount') --}}
                    <li class="nav-header">{{ __('tran.accounts') }}</li>
                    <li class="nav-item">
                        <a href="{{route('users.view') }}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                {{ __('tran.adminaccount') }}
                                {{-- <span class="right badge badge-danger"> {{\App\models\User::count()}} </span> --}}
                            </p>
                        </a>
                    </li>
                    {{-- @endcan
                    @can('menubrand') --}}
                    <li class="nav-item">
                        <a href="{{route('brand.view') }}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                {{ __('tran.brandaccount') }}
                                {{-- <span class="right badge badge-danger"> {{\App\models\Brand::count()}} </span> --}}
                            </p>
                        </a>
                    </li>
                    {{-- @endcan
                    @can('menuroles') --}}
                    <li class="nav-item">
                        <a href="{{route('roles.view') }}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                {{ __('tran.roles') }}
                                {{-- <span class="right badge badge-danger"> {{\App\models\Rolse::count()}} </span> --}}
                            </p>
                        </a>
                    </li>
                    {{-- @endcan
                    @can('menusetting') --}}
                    <li class="nav-header">{{ __('tran.settings') }}</li>

                    <li class="nav-item">
                        <a href="{{route('setting.view') }}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                {{ __('tran.maininfo') }}
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('dddddd') }}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                {{ __('tran.maininfo') }}
                            </p>
                        </a>
                    </li>
                    {{-- @endcan --}}

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
