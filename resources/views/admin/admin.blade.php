@extends('admin.master')

@section('admin-css')
    @stack('admin-admin-css')
    @yield('admin-admin-css')
@endsection

@section('admin-body')
    <div class="wrapper">
        @include('admin.inc.main-admin-nav')
        @include('admin.inc.left-admin-sidebar')
        @include('admin.inc.admin-content')
        @include('admin.inc.admin-footer')
        @include('admin.inc.right-admin-sidebar')
    </div>
@endsection

@section('admin-js')
    @stack('admin-admin-js')
    @yield('admin-admin-js')
@endsection
