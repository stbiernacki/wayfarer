 <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body class="@yield('classes-body')" @yield('body-data')>

    <div id="app">
        @yield('content')
    </div>
    @yield('x-template')
    <script src="{{ asset('assets/js/app.js') }}"></script>
    @yield('scripts')

</body>
</html>
