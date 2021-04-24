<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="{{route('home')}}" title="Admin" class="text-light">
                <i class="mdi mdi-account-box h2 text-light"></i>
                <span class="brand-name text-truncate">{{auth()->user()->hasRole('admin') ? 'Admin' : 'Client' }}</span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-scrollbar">

            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <li class="has-sub {{ ($currentMenu ?? '' == 'home') ? 'expand active' : ''}}">
                    <a class="sidenav-item-link" href="{{route('home')}}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
                @role('admin')
                <li class="has-sub {{ ($currentMenu ?? '' == 'admin') ? 'expand active' : ''}}">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#documentation" aria-expanded="false" aria-controls="documentation">
                        <i class="mdi mdi-pencil-box-multiple"></i>
                        <span class="nav-text">Admin</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse {{ ($currentMenu ?? '' == 'admin') ? 'show' : ''}}" id="documentation"
                        data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            {{-- <li class="{{ ($currentSubMenu == 'role') ? 'active' : ''}}">
                            <a class="sidenav-item-link" href="{{route('roles.index')}}">
                                <span class="nav-text">Roles</span>
                            </a>
                </li> --}}
                <li class="{{ ($currentSubMenu == 'user') ? 'active' : ''}}">
                    <a class="sidenav-item-link" href="{{route('users.index')}}">
                        <span class="nav-text">User</span>
                    </a>
                </li>
                <li class="{{ ($currentSubMenu == 'member') ? 'active' : ''}}">
                    <a class="sidenav-item-link" href="{{route('members.index')}}">
                        <span class="nav-text">Member</span>
                    </a>
                </li>
                <li class="{{ ($currentSubMenu == 'frontend') ? 'active' : ''}}">
                    <a class="sidenav-item-link" href="{{route('frontends.index')}}">
                        <span class="nav-text">Frontend</span>
                    </a>
                </li>
        </div>
        </ul>
        </li>
        @endrole
        <li class="has-sub {{ ($currentMenu ?? '' == 'profile') ? 'expand active' : ''}}">
            <a class="sidenav-item-link" href="{{route('profiles.index')}}">
                <i class="mdi mdi-account-circle"></i>
                <span class="nav-text">My Profile</span>
            </a>
        </li>
        </ul>

    </div>
    </div>
</aside>