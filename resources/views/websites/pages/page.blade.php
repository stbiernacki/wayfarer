@extends('websites.website')

@section('title', __('websites.page.title'))

@section('web-body')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h1 class="text-center">{{ __('websites.page.title') }}</h1>
        </div>
        <div class="card-body">
            <div class="container-fluid">
                <p>Lorem ipsum dolor.</p>
                @include('websites.pages.components.paragraph')
                @include('websites.pages.components.paragraph')
            </div>
        </div>
        <div class="card-footer">
            @include('websites.pages.components.paragraph')
        </div>
    </div>
@endsection

@section('web-css')
    {{-- <link rel="stylesheet" href="custom.css"> --}}
@endsection

@section('web-js')
    {{-- <script src="custom.js"></script> --}}
@endsection
