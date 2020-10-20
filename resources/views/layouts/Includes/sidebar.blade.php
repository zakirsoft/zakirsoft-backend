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

            <div class="pcoded-navigation-label">admin</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                        <span class="pcoded-mtext">User</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="{{ url('user') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">All User</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('RoleIndex') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">User Role</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul class="pcoded-item pcoded-left-item">
                <li class="pcoded-hasmenu @yield('portfolio')">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                        <span class="pcoded-mtext">Portfolio</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                        <a href="{{ route('portfolio.create') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">New Portfolio</span>
                            </a>
                        </li>
                        <li class="">
                        <a href="{{ route('portfolio.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Portfolio List</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="pcoded-hasmenu @yield('testimonial')">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="far fa-file-word"></i></span>
                        <span class="pcoded-mtext">Testimonial</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="{{ route('testimonial.create') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Add One</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('testimonial.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Testimonials</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pcoded-hasmenu @yield('contact')">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="far fa-address-card"></i></span>
                        <span class="pcoded-mtext">Contact</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="#" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Message</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="@yield('career')">
                    <a href="{{ route('career.index') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="feather icon-home"></i>
                        </span>
                        <span class="pcoded-mtext">Career</span>
                    </a>
                </li>
            </ul>

            <div class="pcoded-navigation-label">Other</div>
            <ul class="pcoded-item pcoded-left-item">
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fas fa-info-circle"></i></span>
                        <span class="pcoded-mtext">About</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class=" pcoded-hasmenu">
                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">OurTeam</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class="">
                                <a href="{{ route('team.create') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Add Member</span>
                                    </a>
                                </li>
                                <li class="">
                                <a href="{{ route('team.index') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">List Member</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="#" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Who We Are</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="#" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">About Zakirsoft</span>
                            </a>
                        </li>
                    </ul>
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
