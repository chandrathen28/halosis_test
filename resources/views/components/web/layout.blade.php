<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Lugx Gaming Shop HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/web/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('/web/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('/web/assets/css/templatemo-lugx-gaming.css') }}">
    <link rel="stylesheet" href="{{ asset('/web/assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('/web/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('/web/https://unpkg.com/swiper@7/swiper-bundle.min.css') }}"/>
.
    @yield('styles')

    @livewireStyles
</head>

<body>

    <livewire:web.layout.header></livewire:web.layout.header>

    {{ $slot }}

    <livewire:web.layout.footer></livewire:web.layout.footer>


    <script src="{{ asset('/web/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/web/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/web/assets/js/isotope.min.js') }}"></script>
    <script src="{{ asset('/web/assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('/web/assets/js/counter.js') }}"></script>
    <script src="{{ asset('/web/assets/js/custom.js') }}"></script>

    @livewireScripts
</body>
</html>
