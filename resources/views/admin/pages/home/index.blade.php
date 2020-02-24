@extends('admin.admin')

@section('title', __('admin.pages.home.index.heading'))

@section('admin-content-header')
    <h1>{{ __('admin.pages.home.index.heading') }}</h1>
@endsection

@section('admin-content')
    <v-home-general-component></v-home-general-component>
@endsection

@section('x-template')
    {{-- attaching 'x-template' type script as template --}}
    @include('admin.pages.home.components.x-get-this-year-component')
    @include('admin.pages.home.components.x-get-spanning-days-component')
    @include('admin.pages.home.components.x-general-component')
@endsection

@section('admin-admin-css')
    <style>
        .home-size {
            font-size: 1.4em;
        }
    </style>
@endsection

@section('admin-admin-js')
    {{-- <script src="custom.js"></script> --}}
@endsection
