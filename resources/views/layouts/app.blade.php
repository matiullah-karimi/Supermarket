<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        {{--  <link href="{{ asset('css/app.css') }}" rel="stylesheet">  --}}
        <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min09a2.css?v2.1.0') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-extend.min09a2.css?v2.1.0') }}">
        <link rel="stylesheet" href="{{ asset('css/site.min09a2.css?v2.1.0') }}">

        <!-- Plugins -->
        <link rel="stylesheet" href="{{ asset('vendor/animsition/animsition.min09a2.css?v2.1.0') }}">
        <link rel="stylesheet" href="{{ asset('vendor/asscrollable/asScrollable.min09a2.css?v2.1.0') }}">
        <link rel="stylesheet" href="{{ asset('vendor/switchery/switchery.min09a2.css?v2.1.0') }}">
        <link rel="stylesheet" href="{{ asset('vendor/intro-js/introjs.min09a2.css?v2.1.0') }}">
        <link rel="stylesheet" href="{{ asset('vendor/slidepanel/slidePanel.min09a2.css?v2.1.0') }}">
        <link rel="stylesheet" href="{{ asset('vendor/flag-icon-css/flag-icon.min09a2.css?v2.1.0') }}">

        <!-- Plugins For This Page -->
        <link rel="stylesheet" href=".{{ asset('vendor/chartist-js/chartist.min09a2.css?v2.1.0') }}">
        <link rel="stylesheet" href="{{ asset('vendor/jvectormap/jquery-jvectormap.min09a2.css?v2.1.0') }}">
        <link rel="stylesheet" href="{{ asset('vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.min09a2.css?v2.1.0') }}">

        <!-- Page -->
        <link rel="stylesheet" href="{{ asset('css/v1.min09a2.css?v2.1.0') }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('fonts/web-icons/web-icons.min09a2.css?v2.1.0') }}">
        <link rel="stylesheet" href="{{ asset('fonts/brand-icons/brand-icons.min09a2.css?v2.1.0') }}">
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

        <link rel="stylesheet" href="{{ asset('fonts/weather-icons/weather-icons.min09a2.css?v2.1.0') }}">

        <!--[if lt IE 9]>
            <script src=".{{ asset('vendor/html5shiv/html5shiv.min.js') }}"></script>
            <![endif]-->

        <!--[if lt IE 10]>
            <script src="{{ asset('vendor/media-match/media.match.min.js') }}"></script>
            <script src="{{ asset('vendor/respond/respond.min.js') }}"></script>
            <![endif]-->

        <!-- Scripts -->
        <script src="{{ asset('vendor/modernizr/modernizr.min.js') }}"></script>
        <script src="{{ asset('vendor/breakpoints/breakpoints.min.js') }}"></script>
        <script>
            Breakpoints();
        </script>

    </head>
    <body class="dashboard">
        <div id="app">
            @include('partials.navbar')
            @include('partials.sidebar')
            <div class="page animation">
                <div class="page-content padding-30 container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>

        @yield('scripts')
        <!-- Core  -->
        <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/bootstrap.min.js') }}"></script>
        <script src="{{ asset('vendor/animsition/animsition.min.js') }}"></script>
        <script src="{{ asset('vendor/asscroll/jquery-asScroll.min.js') }}"></script>
        <script src="{{ asset('vendor/mousewheel/jquery.mousewheel.min.js') }}"></script>
        <script src="{{ asset('vendor/asscrollable/jquery.asScrollable.all.min.js') }}"></script>
        <script src="{{ asset('vendor/ashoverscroll/jquery-asHoverScroll.min.js') }}"></script>

        <!-- Plugins -->
        <script src="{{ asset('vendor/switchery/switchery.min.js') }}"></script>
        <script src="{{ asset('vendor/intro-js/intro.min.js') }}"></script>
        <script src="{{ asset('vendor/screenfull/screenfull.min.js') }}"></script>
        <script src="{{ asset('vendor/slidepanel/jquery-slidePanel.min.js') }}"></script>

        <!-- Plugins For This Page -->
        <script src="{{ asset('vendor/skycons/skycons.js') }}"></script>
        <script src="{{ asset('vendor/chartist-js/chartist.min.js') }}"></script>
        <script src="{{ asset('vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.min.js') }}"></script>
        <script src="{{ asset('vendor/aspieprogress/jquery-asPieProgress.min.js') }}"></script>
        <script src="{{ asset('vendor/jvectormap/jquery.jvectormap.min.js') }}"></script>
        <script src="{{ asset('vendor/jvectormap/maps/jquery-jvectormap-au-mill-en.js') }}"></script>
        <script src="{{ asset('vendor/matchheight/jquery.matchHeight-min.js') }}"></script>

        <!-- Scripts -->
        <script src="{{ asset('js/core.min.js') }}"></script>
        <script src="{{ asset('js/site.min.js') }}"></script>

        <script src="{{ asset('js/menu.min.js') }}"></script>
        <script src="{{ asset('js/menubar.min.js') }}"></script>
        <script src="{{ asset('js/sidebar.min.js') }}"></script>

        <script src="{{ asset('js/config-colors.min.js') }}"></script>
        <script src="{{ asset('js/config-tour.min.js') }}"></script>

        <script src="{{ asset('js/asscrollable.min.js') }}"></script>
        <script src="{{ asset('js/animsition.min.js') }}"></script>
        <script src="{{ asset('js/slidepanel.min.js') }}"></script>
        <script src="{{ asset('js/switchery.min.js') }}"></script>

        <script src="{{ asset('js/matchheight.min.js') }}"></script>
        <script src="{{ asset('js/jvectormap.min.js') }}"></script>


        <script src="{{ asset('js/v1.min.js') }}"></script>
    </body>
</html>
