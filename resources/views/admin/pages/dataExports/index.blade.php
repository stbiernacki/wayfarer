@extends('admin.admin')

@section('title', __('admin.pages.data_export.index.heading'))

@section('admin-content-header')
    <h1>{{ __('admin.pages.data_export.index.heading') }}</h1>
@endsection

@section('admin-content')
    <p>Data Export</p>
@endsection

@section('x-template')
    {{-- attaching 'x-template' type script as template --}}
@endsection

@section('admin-admin-css')
    {{-- <link rel="stylesheet" href="custom.css"> --}}
@endsection

@section('admin-admin-js')
    {{-- <script src="custom.js"></script> --}}
@endsection
