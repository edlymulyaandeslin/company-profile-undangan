            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="#" class="brand-link">
                    <img src="{{ asset('img') }}/icon2.png" alt="Logo"
                        class="brand-image bg-light img-circle elevation-3">
                    <span class="brand-text
                        font-weight-light">UndanganKita</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- SidebarSearch Form -->
                    <div class="form-inline mt-2">
                        <div class="input-group" data-widget="sidebar-search">
                            <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                                aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-sidebar">
                                    <i class="fas fa-search fa-fw"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">

                            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                            <li class="nav-item">
                                <a href="/dashboard" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
                                    <p>
                                        <i class="nav-icon fas fa-tachometer-alt "></i> Dashboard
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/dashboard/categories"
                                    class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}">
                                    <p>
                                        <i class="nav-icon fas fa-th-large"></i>
                                        Kategori
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/dashboard/paket"
                                    class="nav-link {{ Request::is('dashboard/paket*') ? 'active' : '' }}">
                                    <p>
                                        <i class="nav-icon fas far fa-list " style="color: #ffffff;"></i>
                                        Daftar Paket Pilihan
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/dashboard/testimonial"
                                    class="nav-link {{ Request::is('dashboard/testimonial*') ? 'active' : '' }}">
                                    <p>
                                        <i class="nav-icon fas fa-users"></i>
                                        Testimonial
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/dashboard/theme"
                                    class="nav-link {{ Request::is('dashboard/theme*') ? 'active' : '' }}">
                                    <p>
                                        <i class="nav-icon fas fa-solid fa-palette"></i>
                                        Themes
                                    </p>
                                </a>
                            </li>
                        </ul>

                        <h6
                            class="sidebar-heading d-flex justify-content-between align-items-center  mt-4 mb-1 text-muted">
                            <span>ADMINISTRATOR</span>
                        </h6>
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">
                            <li class="nav-item">
                                <a href="/dashboard/user"
                                    class="nav-link {{ Request::is('dashboard/user*') ? 'active' : '' }}">
                                    <p>
                                        {{-- <i class="nav-icon fas fa-solid fa-palette"></i> --}}
                                        <i class="nav-icon fas fa-solid fa-user-cog"></i>
                                        Admin
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>
