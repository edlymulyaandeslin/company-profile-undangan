<!-- Navigation -->
<nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
    <div class="container">

        <!-- Image Logo -->
        <a class="navbar-brand text-decoration-none" href="/"
            style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;color: #686de0"><img
                src="img/icon2.png" width="65px" style="border: 1px solid white; border-radius: 50%" alt="alternative">
            UndanganKita</a>

        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text" href="index.html">Ioniq</a> -->

        <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        @if (!Request::is('admin'))
            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#header">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#theme">Theme</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimoni">Testimonial</a>
                    </li>
                </ul>
                {{-- <span class="nav-item">
                <a class="btn-outline-sm" href="log-in.html">Log in</a>
            </span> --}}
            </div> <!-- end of navbar-collapse -->
        @endif
    </div> <!-- end of container -->
</nav> <!-- end of navbar -->
<!-- end of navigation -->
