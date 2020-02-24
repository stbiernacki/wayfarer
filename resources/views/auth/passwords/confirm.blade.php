@extends('auth.auth')

@section('content')
    <div class="lockscreen-wrapper">
        <div class="lockscreen-name">
            {{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}
        </div>
        <div class="lockscreen-item">
            <form method="POST" action="{{ route('password.confirm') }}" class="lockscreen-credentials ml-0">
                @csrf
                <div class="input-group">
                    <input
                        id="password"
                        type="password"
                        class="form-control @error('password') is-invalid @enderror"
                        name="password"
                        required autocomplete="current-password"
                        placeholder="{{ __('auth.password') }}"
                        autofocus
                    >
                    <div class="input-group-append">
                        <button type="submit" class="btn"><i class="fas fa-arrow-right text-muted"></i></button>
                    </div>
                </div>
            </form>
        </div>
        @error('password')
            <div class="lockscreen-subitem text-center" role="alert">
                <b class="text-danger">{{ $message }}</b>
            </div>
        @enderror
        <div class="help-block text-center">
            {{ __('auth.confirm_password_message') }}
        </div>
        <div class="text-center">
            <a href="{{ route('password.request') }}">
                {{ __('auth.i_forgot_my_password') }}
            </a>
        </div>
    </div>
@endsection
