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
        {{-- <div class="navbar-start mx-auto">
            <a class="navbar-item active has-text-weight-semibold {{ Request::path() == 'dashboard' ? 'active' : '' }}">
                <span>Dashboard</span>
            </a>
            <a class="navbar-item has-text-weight-semibold">
                <span>Collections</span>
            </a>
            <a class="navbar-item has-text-weight-semibold">
                <span>Assets</span>
            </a>
            <a class="navbar-item has-text-weight-semibold">
                <span>Posts</span>
            </a>
            <a class="navbar-item has-text-weight-semibold">
                <span>Templates</span>
            </a>
            <a class="navbar-item has-text-weight-semibold">
                <span>Settings</span>
            </a>
            <a class="navbar-item has-text-weight-semibold">
                <span class="logout">Logout</span>
            </a>
        </div> --}}

        {{-- User Navbar --}}
        <div class="navbar-end">
            <a class="navbar-item active has-text-weight-semibold pr-3">
                Home
            </a>
            <a class="navbar-item has-text-weight-semibold pr-3">
                Categories
            </a>
        </div>
    </div>
</nav>