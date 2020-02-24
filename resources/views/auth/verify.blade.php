@extends('auth.auth')

@section('content')
    <div class="login-box">
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">{{ __('auth.verify_message') }}</p>
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                         __('auth.verify_email_sent') }}
                    </div>
                @endif
                {{ __('auth.verify_check_your_email') }}
                {{ __('auth.verify_if_not_recieved') }},
                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button type="submit" class="btn btn-link p-0 m-0 align-baseline">
                        {{ __('auth.verify_request_another') }}
                    </button>.
                </form>
            </div>
        </div>
    </div>
@endsection
