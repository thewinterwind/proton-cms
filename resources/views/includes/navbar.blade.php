<nav class="navbar container nav-screen pt-4" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="mt-3" href="{{ url('/') }}">
            <img src="/images/PROTON.png">
        </a>

        <span class="navbar-burger" data-target="navMenu">
            <span ></span>
            <span ></span>
        </span>
    </div>
    <div id="navMenu" class="navbar-menu pt-0">
        <div class="navbar-menu">
            <div class="navbar-start mx-auto">
                <a class="navbar-item active has-text-weight-semibold {{ Request::path() == 'dashboard' ? 'active' : '' }}">
                    Dashboard
                </a>
                <a class="navbar-item has-text-weight-semibold">
                    Collections
                </a>
                <a class="navbar-item has-text-weight-semibold">
                    Assets
                </a>
                <a class="navbar-item has-text-weight-semibold">
                    Posts
                </a>
                <a class="navbar-item has-text-weight-semibold">
                    Templates
                </a>
                <a class="navbar-item has-text-weight-semibold">
                    Settings
                </a>
        </div>
        <div class="navbar-end">
            <a class="navbar-item has-text-weight-semibold pr-3 login-btn">
                Login
            </a>
        </div>

        {{-- User Navbar --}}
        {{-- <div class="navbar-end">
            <a class="navbar-item active has-text-weight-semibold pr-3">
                Home
            </a>
            <a class="navbar-item has-text-weight-semibold pr-3">
                Categories
            </a>
        </div> --}}
    </div>
</nav>