<html>
    <head>
        <title>App Name - @yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/jquery-ui-1.12.1/jquery-ui.css') }}">

        <link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap-3.3.7/css/bootstrap.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap-3.3.7/css/bootstrap-theme.css') }}">

        @stack('css')
    </head>
    <body ng-app="myApp" ng-controller="myController">
        <a href="/page/1">Page 1</a> | <a href="/page/2">Page 2</a>
        <br>
        @yield('content')

    </body>
    <script src="{{ asset('assets/js/jquery-3.2.1.js') }}"></script>

    <script src="{{ asset('assets/jquery-ui-1.12.1/jquery-ui.js') }}"></script>

    <script src="{{ asset('assets/bootstrap-3.3.7/js/bootstrap.js') }}"></script>

    <script src="{{ asset('assets/angular-1.6.7/angular.js') }}"></script>

    <script src="{{ asset('assets/js/lodash.js') }}"></script>
    <script src="{{ asset('assets/js/moment.js') }}"></script>
    <script src="{{ asset('assets/js/notify.min.js') }}"></script>
    <script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/js/shortcut.js') }}"></script>
    <script src="{{ asset('assets/js/clipboard.js') }}"></script>
    @stack('javascripts')
</html>