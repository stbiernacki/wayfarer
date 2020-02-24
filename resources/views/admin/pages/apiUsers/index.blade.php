@extends('admin.admin')

@section('title', __('admin.pages.api_users.index.heading'))

@section('admin-content-header')
    <h1>{{ __('admin.pages.api_users.index.heading') }}</h1>
@endsection

@section('admin-content')
    <v-api-users-tabs-component
        :tabs="{{
            collect(
                [
                    __('admin.pages.api_users.index.tabs.access_to_api'),
                    __('admin.pages.api_users.index.tabs.create_api_token'),
                    __('admin.pages.api_users.index.tabs.list_of_api_users')
                ]
            )->toJson()
        }}"
    ></v-api-users-tabs-component>
@endsection

@section('x-template')
    {{-- attaching 'x-template' type script as template --}}
    @include('admin.pages.apiUsers.components.x-tabs-component')
    @include('admin.pages.apiUsers.components.x-access-to-api-component')
    @include('admin.pages.apiUsers.components.x-create-api-token-component')
    @include('admin.pages.apiUsers.components.x-list-of-api-users-component')
@endsection

@section('admin-admin-css')
    <style>
        .api-users-tab {
            margin-left: 30px;
            cursor: pointer;
            font-size: 1.6em;
        }
        .api-users-token {
            margin-left: 5px;
            cursor: pointer;
            font-size: 1.3em;
        }
        .api-users-activeTab {
            color: #16C0B0;
            text-decoration: underline;
        }
    </style>
@endsection

@section('admin-admin-js')
    {{-- <script src="custom.js"></script> --}}
@endsection
