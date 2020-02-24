@extends('layouts.app')

@section('title', 'Admin')

@section('styles')
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    @yield('admin-css')
@endsection

@section('classes-body', 'sidebar-mini control-sidebar-push')

@section('content')
    @yield('admin-body')
@endsection

@section('scripts')
    @yield('admin-js')
@endsection
