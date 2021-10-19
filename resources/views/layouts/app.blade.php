<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" {{-- class="dark" --}}>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    {{-- Styles --}}
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('css/global.css') }}" rel="stylesheet">

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bulma-tagsinput@2.0.0/dist/js/bulma-tagsinput.min.js"></script>
</head>
<body>

<div id="app">
    <div id="row_level_components" >
        @include('includes.navbar')

        {{-- Login modal --}}
        <div id="login-modal" class="login-modal modal is-active">
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

        @yield('content')

        @include('includes.footer')
    </div>

    @stack('js')
</div>

</body>

<script>
    (function (){

        // Tags Input
        bulmaTagsinput.attach();

        // Open menu
        var burger = document.querySelector('.navbar-burger');
        var nav = document.querySelector('#'+burger.dataset.target);
        var dropdown = document.querySelector('.dropdown');
        var loginModal = document.querySelector('.login-modal');

        // Navbar
        burger.addEventListener('click', function() {
            nav.classList.toggle('is-active');
        });

        // Nav tabs
        dropdown.addEventListener('click', function(event) {
          event.stopPropagation();
          dropdown.classList.toggle('is-active');
        });

        burger.addEventListener('click', function() {
            nav.classList.toggle('is-active');
        });

        // Dark mode
        document.querySelectorAll('.dark').forEach((result)=> {
            result.classList.toggle('invert');
        })

        // Login Modal
        document.querySelector('.login-btn').addEventListener('click', function() {
            loginModal.classList.toggle('is-active');
        });
        document.querySelector('.login-modal-close').addEventListener('click', function() {
            loginModal.classList.toggle('is-active');
        });
    })();

    window.onload = () => {
        // Tabs Start
        document.querySelectorAll('.tabs').forEach((tab)=>{
            tab.querySelectorAll('li').forEach((li)=>{
              li.onclick = () => {
                  tab.querySelector('li.is-active').classList.remove('is-active')
                  li.classList.add('is-active')
                  tab.nextElementSibling.querySelector('.tab-pane.is-active').classList.remove('is-active')
                  tab.nextElementSibling.querySelector('.tab-pane#'+li.firstElementChild.getAttribute('id'))
                    .classList.add("is-active")
              }
            })
        })
    }
</script>
</html>