<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halosis Test</title>
    <link rel='stylesheet' href='{{ asset('web/css/woocommerce-layout.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ asset('web/css/woocommerce-smallscreen.css') }}' type='text/css' media='only screen and (max-width: 768px)'/>
    <link rel='stylesheet' href='{{ asset('web/css/woocommerce.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ asset('web/css/font-awesome.min.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ asset('web/css/style.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500,700%7CHerr+Von+Muellerhoff:400,500,700%7CQuattrocento+Sans:400,500,700' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ asset('web/css/easy-responsive-shortcodes.css') }}' type='text/css' media='all'/>

    @yield('styles')

    @livewireStyles
</head>

<body class="home page page-template page-template-template-portfolio page-template-template-portfolio-php">
    <div id="page">
        <div class="container">

            <livewire:web.layout.header></livewire:web.layout.header>

            {{ $slot }}

        </div>
        <!-- .container -->

        <livewire:web.layout.footer></livewire:web.layout.footer>

        <a href="#top" class="smoothup" title="Back to top"><span class="genericon genericon-collapse"></span></a>
    </div>

    @livewireScripts
<!-- #page -->
    <script src='{{ asset('web/js/jquery.js') }}'></script>
    <script src='{{ asset('web/js/plugins.js') }}'></script>
    <script src='{{ asset('web/js/scripts.js') }}'></script>
    <script src='{{ asset('web/js/masonry.pkgd.min.js') }}'></script>
</body>
</html>
