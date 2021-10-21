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
                <a class="navbar-item has-text-weight-semibold {{ Request::path() == 'dashboard' ? 'active' : '' }}" href="/dashboard">
                    Dashboard
                </a>
                <a class="navbar-item has-text-weight-semibold {{ Request::path() == 'collections' ? 'active' : '' }}" href="/collections">
                    Collections
                </a>
                <a class="navbar-item has-text-weight-semibold {{ Request::path() == 'assets' ? 'active' : '' }}" href="/assets">
                    Assets
                </a>
                <a class="navbar-item has-text-weight-semibold {{ Request::path() == 'posts' ? 'active' : '' }}" href="/posts">
                    Posts
                </a>
                <a class="navbar-item has-text-weight-semibold {{ Request::path() == 'templates' ? 'active' : '' }}" href="/templates">
                    Templates
                </a>
                <a class="navbar-item has-text-weight-semibold {{ Request::path() == 'settings' ? 'active' : '' }}" href="/settings">
                    Settings
                </a>
        </div>
        <div class="navbar-end">
            <a class="navbar-item has-text-weight-semibold pr-3 login-btn">
                Login
            </a>
        </div>

        {{-- Login modal --}}
        <div id="login-modal" class="login-modal modal">
            <div class="modal-background"></div>
            <div class="modal-content">
                <section class="modal-card-body">
                    <button class="btn-close login-modal-close is-block is-pulled-right mb-5" aria-label="close"><img src="/images/x_icon.png"></button>
                    <div class="px-6 pt-5">
                        @component('components.title_type_3')
                            @slot('title') Login @endslot
                        @endcomponent

                        <div class="mt-5 mb-6">
                            @component('components.input_type_1')
                                @slot('title') Username @endslot
                            @endcomponent
                        </div>

                        @component('components.input_type_1')
                            @slot('title') Password @endslot
                        @endcomponent

                        <div class="my-6">
                            @component('components.button_type_1')
                                @slot('title') Login @endslot
                            @endcomponent
                        </div>
                    </div>
                </section>
            </div>
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

<script>
    (function (){
        var loginModal = document.querySelector('.login-modal');

        // Login Modal
        document.querySelector('.login-btn').addEventListener('click', function() {
            loginModal.classList.toggle('is-active');
        });
        document.querySelector('.login-modal-close').addEventListener('click', function() {
            loginModal.classList.toggle('is-active');
        });
    })();
</script>