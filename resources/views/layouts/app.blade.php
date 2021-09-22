<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="@stack('html-class')">
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
    <div id="row_level_components">
        @include('includes.navbar')

        <main>
            @yield('content')
        </main>

        @include('includes.footer')

        @stack('js')
    </div>

</div>

</body>

<script>
    (function (){
        // Open menu
        var burger = document.querySelector('.navbar-burger');
        var nav = document.querySelector('#'+burger.dataset.target);
        var dropdown = document.querySelector('.dropdown');

        burger.addEventListener('click', function() {
            nav.classList.toggle('is-active');
        });

        dropdown.addEventListener('click', function(event) {
          event.stopPropagation();
          dropdown.classList.toggle('is-active');
        });

        burger.addEventListener('click', function() {
            nav.classList.toggle('is-active');
        });

        bulmaTagsinput.attach();
    })();
</script>
</html>