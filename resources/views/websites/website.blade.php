@extends('layouts.app')

@section('title', config('app.name', 'Wayfarer'))

@section('styles')
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    @yield('web-css')
@endsection

@section('content')
    @include('websites.inc.main-nav')
    <div class="container-fluid">
        <main class="py-4">
            @yield('web-body')
        </main>
    </div>
@endsection

@section('script')
    @yield('web-js')
@endsection
