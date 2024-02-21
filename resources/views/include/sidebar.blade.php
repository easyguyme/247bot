<div class="app-sidebar colored">
    <div class="sidebar-header">
        <a class="header-brand" href="{{route('dashboard')}}">
            <div class="logo-img">
               <img height="30" src="{{ asset('img/logo_white.png')}}" class="header-brand-img" title="RADMIN">
            </div>
        </a>
        <div class="sidebar-action"><i class="ik ik-arrow-left-circle"></i></div>
        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
    </div>

    @php
        $segment1 = request()->segment(1);
        $segment2 = request()->segment(2);
    @endphp

    <div class="sidebar-content">
        <div class="nav-container">
            <nav id="main-menu-navigation" class="navigation-main">
                <div class="nav-item {{ ($segment1 == 'dashboard') ? 'active' : '' }}">
                    <a href="{{route('dashboard')}}"><i class="ik ik-bar-chart-2"></i><span>{{ __('Dashboard')}}</span></a>
                </div>

                <div class="nav-item {{ ($segment1 == 'customers') ? 'active' : '' }}">
                    <a href="{{url('/customers')}}"><i class="ik ik-users"></i><span>{{ __('Registrations')}}</span></a>
                </div>
                <div class="nav-item {{ ($segment1 == 'deposits') ? 'active' : '' }}">
                    <a href="{{url('/deposits')}}"><i class="ik ik-dollar-sign"></i><span>{{ __('Deposits')}}</span></a>
                </div>

                <div class="nav-item {{ ($segment1 == 'withdrawals') ? 'active' : '' }}">
                    <a href="{{url('/withdrawals')}}"><i class="ik ik-arrow-left-circle"></i><span>{{ __('Withdrawals')}}</span></a>
                </div>
                <div class="nav-item {{ ($segment1 == 'recoveries') ? 'active' : '' }}">
                    <a href="{{url('/recoveries')}}"><i class="ik ik-file-minus"></i><span>{{ __('Recoveries')}}</span></a>
                </div>

                <div class="nav-item {{ ($segment1 == 'users' || $segment1 == 'roles'||$segment1 == 'permission' ||$segment1 == 'user') ? 'active open' : '' }} has-sub">
                    <a href="#"><i class="ik ik-user"></i><span>{{ __('Administrator')}}</span></a>
                    <div class="submenu-content">
                        <!-- only those have manage_user permission will get access -->
                        @can('manage_user')
                        <a href="{{url('users')}}" class="menu-item {{ ($segment1 == 'users') ? 'active' : '' }}">{{ __('Users')}}</a>
                        <a href="{{url('user/create')}}" class="menu-item {{ ($segment1 == 'user' && $segment2 == 'create') ? 'active' : '' }}">{{ __('Add User')}}</a>
                         @endcan
                         <!-- only those have manage_role permission will get access -->
                        @can('manage_roles')
                        <a href="{{url('roles')}}" class="menu-item {{ ($segment1 == 'roles') ? 'active' : '' }}">{{ __('Roles')}}</a>
                        @endcan
                        <!-- only those have manage_permission permission will get access -->
                        @can('manage_permission')
                        <a href="{{url('permission')}}" class="menu-item {{ ($segment1 == 'permission') ? 'active' : '' }}">{{ __('Permission')}}</a>
                        @endcan
                    </div>
                </div>

                <div class="nav-lavel">{{ __('Documentation')}} </div>
                <div class="nav-item {{ ($segment1 == 'rest-api') ? 'active' : '' }}">
                    <a href="{{url('rest-api')}}"><i class="ik ik-cloud"></i><span>{{ __('REST API')}}</span> </a>
                </div>
{{--                <div class="nav-item {{ ($segment1 == 'permission-example') ? 'active' : '' }}">--}}
{{--                    <a href="{{url('permission-example')}}"><i class="ik ik-unlock"></i><span>{{ __('Laravel Permission')}}</span> </a>--}}
{{--                </div>--}}

                <!-- end inventory pages -->


            </nav>

        </div>
    </div>
</div>
