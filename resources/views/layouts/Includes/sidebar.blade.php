<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">
            <div class="pcoded-navigation-label">System</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="@yield('dashboard')">
                    <a href="{{ route('dashboard.index') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="feather icon-home"></i>
                        </span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>
                </li>
            </ul>

            <div class="pcoded-navigation-label">Admin</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="@yield('about')">
                    <a href="{{ route('about.index') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="fas fa-file-alt"></i>
                        </span>
                        <span class="pcoded-mtext">About</span>
                    </a>
                </li>
                <li class="pcoded-hasmenu @yield('user')">
                    @can('user show')
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="far fa-user"></i></span>
                        <span class="pcoded-mtext">User</span>
                    </a>
                    <ul class="pcoded-submenu">
                        @can('user list')
                        <li class="">
                            <a href="{{ route('user.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">All User</span>
                            </a>
                        </li>
                        @endcan
                        @can('role list')
                        <li class="">
                            <a href="{{ route('role.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">User Role</span>
                            </a>
                        </li>
                        @endcan
                    </ul>
                    @endcan
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
                        @can('category list')
                        <li class="">
                            <a href="{{ route('portfolio.category.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Category List</span>
                            </a>
                        </li>
                        @endcan
                @can('portfolio create')
                <li class="">
                    <a href="{{ route('portfolio.create') }}" class="waves-effect waves-dark">
                        <span class="pcoded-mtext">Add Portfolio</span>
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
            {{-- @can('technology show' || 'technology-category show') --}}
            <li class="pcoded-hasmenu @yield('technology')">
                <a href="javascript:void(0)" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="fas fa-desktop"></i></span>
                    <span class="pcoded-mtext">Technology</span>
                </a>
                <ul class="pcoded-submenu">
                    {{-- @can('technology-category show') --}}
                    <li class="">
                        <a href="{{ route('technology.category.index') }}" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">Category List</span>
                        </a>
                    </li>
                    {{-- @endcan --}}
                    {{-- @can('technology show') --}}
                    <li class="">
                        <a href="{{ route('technology.index') }}" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">Technology List</span>
                        </a>
                    </li>
                    {{-- @endcan --}}
                </ul>
            </li>
            {{-- @endcan --}}
            {{-- @can('jobpost show') --}}
            <li class="pcoded-hasmenu @yield('career')">
                {{-- @can('testimonial show') --}}
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="far fa-file-word"></i></span>
                        <span class="pcoded-mtext">Career</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="{{ route('jobpost.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Job Posts</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('gallery.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Galleries</span>
                            </a>
                        </li>
                    </ul>
                {{-- @endcan --}}
            </li>
            {{-- @endcan --}}
            {{-- @can('service show') --}}
            <li class="@yield('services')">
                <a href="{{ route('services.index') }}" class="waves-effect waves-dark">
                    <span class="pcoded-micon">
                        <i class="fas fa-briefcase"></i>
                    </span>
                    <span class="pcoded-mtext">Services</span>
                </a>
            </li>
            {{-- @endcan --}}
            {{-- @can('news show') --}}
            <li class="@yield('news')">
                <a href="{{ route('news.index') }}" class="waves-effect waves-dark">
                    <span class="pcoded-micon">
                        <i class="fas fa-newspaper"></i>
                    </span>
                    <span class="pcoded-mtext">News</span>
                </a>
            </li>
            {{-- @endcan --}}
            {{-- @can('subcompany show') --}}
            <li class="@yield('subcompany')">
                <a href="{{ route('subcompany.index') }}" class="waves-effect waves-dark">
                    <span class="pcoded-micon">
                        <i class="fas fa-industry"></i>
                    </span>
                    <span class="pcoded-mtext">Subcompany</span>
                </a>
            </li>
            {{-- @endcan --}}
            @can('team show')
            <li class="@yield('team')">
                <a href="{{ route('team.index') }}" class="waves-effect waves-dark">
                    <span class="pcoded-micon">
                        <i class="fas fa-users"></i>
                    </span>
                    <span class="pcoded-mtext">Team</span>
                </a>
            </li>
            @endcan
            @can('footer show')
            <li class="@yield('footer')">
                <a href="{{ route('footer.index') }}" class="waves-effect waves-dark">
                    <span class="pcoded-micon">
                        <i class="fas fa-th-list"></i>
                    </span>
                    <span class="pcoded-mtext">Footer Content</span>
                </a>
            </li>
            <li class="@yield('contact')">
                <a href="{{ route('contact.index') }}" class="waves-effect waves-dark">
                    <span class="pcoded-micon">
                        <i class="fa fa-envelope"></i>
                    </span>
                    <span class="pcoded-mtext">Contact Messages</span>
                </a>
            </li>
            @endcan
            <hr class="text-light">
            <li class="">
                <a target="_blank" href="{{ url('/') }}" class="h4 waves-effect waves-dark">
                    <span class="pcoded-micon">
                        <i class="fa fa-globe"></i>
                    </span>
                    <span class="pcoded-mtext font-weight-bold">Visit Website</span>
                </a>
            </li>
        </ul>
        </div>
    </div>
</nav>
