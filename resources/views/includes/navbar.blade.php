<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="{{ url('/') }}">
            <img src="/images/PROTON.png" class="pl-4">
        </a>

        <span class="navbar-burger" data-target="navMenu">
            <span ></span>
            <span ></span>
        </span>
    </div>
    <div id="navMenu" class="navbar-menu pt-0">
        <a href="{{ url('/dashboard') }}">Dashboard</a> <br>
        <a href="{{ url('/collections') }}">Collections</a> <br>
        <a href="{{ url('/assets') }}">Assets</a> <br>
        <a href="{{ url('/posts') }}">Posts</a> <br>
        <a href="{{ url('/templates') }}">Templates</a> <br>
        <a href="{{ url('/settings') }}">Settings</a> <br>
        <a href="#" class="logout">Logout</a> <br>

    </div>
</nav>