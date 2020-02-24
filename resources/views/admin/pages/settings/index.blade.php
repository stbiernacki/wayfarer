@extends('admin.admin')

@section('title', __('admin.pages.settings.index.heading'))

@section('admin-content-header')
    <h1>{{ __('admin.pages.settings.index.heading') }}</h1>
@endsection

@section('admin-content')
    <v-settings-general-component></v-settings-general-component>
@endsection

@section('x-template')
    {{-- attaching 'x-template' type script as template --}}
    @include('admin.pages.settings.components.x-general-component')
    @include('admin.pages.settings.components.x-select-language-component')
@endsection

@section('admin-admin-css')
    {{-- <link rel="stylesheet" href="custom.css"> --}}
@endsection

@section('admin-admin-js')
    {{-- <script src="custom.js"></script> --}}
@endsection
