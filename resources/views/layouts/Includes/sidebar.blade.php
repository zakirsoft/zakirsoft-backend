<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">
            <div class="pcoded-navigation-label">System</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="@yield('dashboard')">
                    <a href="{{ url('/dashboard') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="feather icon-home"></i>
                        </span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>
                </li>
            </ul>

            <div class="pcoded-navigation-label">Admin</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="pcoded-hasmenu">
                    {{-- @can('user show') --}}
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="far fa-user"></i></span>
                        <span class="pcoded-mtext">User</span>
                    </a>
                    <ul class="pcoded-submenu">
                        {{-- @can('user list') --}}
                        <li class="">
                            <a href="{{ route('user.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">All User</span>
                            </a>
                        </li>
                        {{-- @endcan --}}
                        {{-- @can('role list') --}}
                        <li class="">
                            <a href="{{ route('role.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">User Role</span>
                            </a>
                        </li>
                        {{-- @endcan --}}
                    </ul>
                    {{-- @endcan --}}
                </li>
            </ul>

            <ul class="pcoded-item pcoded-left-item">
                <li class="pcoded-hasmenu @yield('portfolio')">
                    @can('portfolio show')
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="far fa-window-restore"></i></span>
                        <span class="pcoded-mtext">Portfolio</span>
                    </a>
                    <ul class="pcoded-submenu">
                        @can('portfolio list')
                        <li class="">
                            <a href="{{ route('portfolio.category.index') }}" class="waves-effect waves-dark">
                                    <span class="pcoded-mtext">Category List</span>
                            </a>
                        </li>
                        @endcan
                        @can('portfolio list')
                        <li class="">
                            <a href="{{ route('portfolio.index') }}" class="waves-effect waves-dark">
                                    <span class="pcoded-mtext">Portfolio List</span>
                                </a>
                        </li>
                            </li>
                        @endcan
                        @can('portfolio create')
                        <li class="">
                            <a href="{{ route('portfolio.create') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Add Portfolio</span>
                            </a>
                        </li>

                        @endcan
                    </ul>
                    @endcan
                </li>
                <li class="pcoded-hasmenu @yield('testimonial')">
                    @can('testimonial show')
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="far fa-file-word"></i></span>
                        <span class="pcoded-mtext">Testimonial</span>
                    </a>
                    <ul class="pcoded-submenu">
                        @can('testimonial create')
                        <li class="">
                            <a href="{{ route('testimonial.create') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Add Testimonial</span>
                            </a>
                        </li>
                        @endcan
                        @can('testimonial list')
                        <li class="">
                            <a href="{{ route('testimonial.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Testimonials List</span>
                            </a>
                        </li>
                        @endcan
                    </ul>
                    @endcan
                </li>
                <li class="@yield('career')">
                    @can('career show')
                    <a href="{{ route('career.index') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="fas fa-graduation-cap"></i>
                        </span>
                        <span class="pcoded-mtext">Career</span>
                    </a>
                    @endcan
                </li>
                <li class="@yield('team')">
                    <a href="{{ route('team.index') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="fas fa-users"></i>
                        </span>
                        <span class="pcoded-mtext">Team</span>
                    </a>
                </li>

                <li class="@yield('footer')">
                    <a href="{{ route('footer.index') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="fas fa-th-list"></i>
                        </span>
                        <span class="pcoded-mtext">Footer Content</span>
                    </a>
                </li>
                <li class="@yield('about')">
                    <a href="#" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="fas fa-info-circle"></i>
                        </span>
                        <span class="pcoded-mtext">About Us</span>
                    </a>
                </li>
            </ul>

            <div class="pcoded-navigation-label">Other</div>
            <ul class="pcoded-item pcoded-left-item">
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                        <span class="pcoded-mtext">Example</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class=" pcoded-hasmenu">
                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">option</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class="">
                                    <a href="#" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">option-2</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Option-3</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="#" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Option 1</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="#" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="feather icon-menu"></i>
                        </span>
                        <span class="pcoded-mtext">Option</span>
                    </a>
                </li>
            </ul>

        </div>
    </div>
</nav>
