            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-dark">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                                class="fas fa-bars"></i></a>
                    </li>
                </ul>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <form method="post" action="/logout">
                            @csrf
                            <button type="submit" class="btn nav-link">Logout</button>
                        </form>
                        {{-- <a data-widget="control-sidebar" data-slide="true" href="#" role="button">
                            Logout
                        </a> --}}
                    </li>
                </ul>
            </nav>
            <!-- /.navbar -->
