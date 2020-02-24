@extends('admin.master')

@section('admin-css')
    @stack('css')
    @yield('css')
    <style>
        body {
            background-color: #0c525d;
        }
        .w-container {
            margin-top: 10%;
        }
    </style>
@endsection

@section('admin-js')
    <script src="{{ asset('assets/admin/js/admin.min.js') }}"></script>
    @stack('js')
    @yield('js')
@endsection
