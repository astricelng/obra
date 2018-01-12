<!doctype html>
<html lang="es">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <!-- STYLES -->
        <link href="{{ asset('/assets/www/css/app.css') }}" rel="stylesheet">

        <!-- FAVICON -->
        <link rel="shortcut icon" href="favicon.ico" />

    </head>

    <!-- Remove 'loading' class on finish loading -->
    <body class="">

        <!-- INSERT PRELOADER PARTIAL -->

        <div class="global-container">

            @include('www.layouts.partials._header')

            <div class="page-container">

                @yield('content')

            </div>

             @include('www.layouts.partials._footer')

        </div>

        <!-- COMPATIBILITY SCRIPTS -->
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- SCRIPTS -->
        <script type="text/javascript" src="{{ asset('/assets/www/js/manifest.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/assets/www/js/vendor.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/assets/www/js/app.js') }}"></script>

    </body>

</html>