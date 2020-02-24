@extends('websites.website')

@section('title', config('app.name', 'Wayfarer'))

@section('web-body')
    <div class="flex-center position-ref full-height">
        <div class="content text-center">
            <div class="content text-center">
                <h1 class="title">{{ __('websites.welcome.title') }}</h1>
            </div>
        </div>
    </div>
@endsection

@section('web-css')
    <style>
        .full-height {
            height: 100vh;
        }
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .position-ref {
            position: relative;
        }
        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }
    </style>
@endsection

@section('web-js')
    {{-- <script src="custom.js"></script> --}}
@endsection
