@extends('admin.admin')

@section('title', __('admin.pages.api_users.index.heading'))

@section('admin-content-header')
    <h1>{{ __('admin.pages.api_users.index.heading') }}</h1>
@endsection

@section('admin-content')
    <div class="card">
        <div class="card-header">
            <span class="card-title">
                <i class="fa fa-user-plus"></i> {{ __('admin.pages.api_users.token_confirmation.creating_access') }}
            </span>
        </div>

        <div class="card-body">
            <div class="alert alert-success alert-dismissible api-user-token" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                <strong><i class="fa fa-check"></i></strong>
                {{ __('admin.pages.api_users.token_confirmation.your_token_is') }} <strong>{{ $token }}</strong>
            </div>

            <div class="alert alert-warning">
                {{ __('admin.pages.api_users.token_confirmation.alert_warning') }}
            </div>
        </div>

        <div class="card-footer">
            <a href="{{ route('admin.apiUsers.index') }}" class="btn btn-info float-right">
                {{ __('admin.pages.api_users.token_confirmation.return') }}
            </a>
        </div>
    </div>
@endsection

@section('admin-admin-css')
    <style>
        .api-user-token {
            font-size: 1.3em;
        }
    </style>
@endsection

@section('admin-admin-js')
    {{-- <script src="custom.js"></script> --}}
@endsection
