@extends('admin.admin')

@section('title', __('admin.pages.stock_status.index.heading'))

@section('admin-content-header')
    <h1>{{ __('admin.pages.stock_status.index.heading') }}</h1>
@endsection

@section('admin-content')
    <v-list-of-stock-status-component></v-list-of-stock-status-component>
@endsection

@section('x-template')
    {{-- attaching 'x-template' type script as template --}}
    @include('admin.pages.stockStatus.components.x-list-of-stock-status-component')
@endsection

@section('admin-admin-css')
    {{-- <link rel="stylesheet" href="custom.css"> --}}
@endsection

@section('admin-admin-js')
    {{-- <script src="custom.js"></script> --}}
@endsection
