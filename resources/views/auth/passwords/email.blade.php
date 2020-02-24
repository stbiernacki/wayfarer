@extends('auth.auth')

@section('content')
    @include('websites.inc.main-nav')
    <div class="container w-container">
        <div class="row justify-content-center">
            <div class="login-box">
                <div class="card">
                    <div class="card-body login-card-body">
                        <p class="login-box-msg">{{ __('auth.password_reset_message') }}</p>
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form action="#" method="post">
                            {{ csrf_field() }}
                            <div class="input-group mb-3">
                                <input
                                    type="email"
                                    name="email"
                                    class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                    value="{{ old('email') }}"
                                    placeholder="{{ __('auth.email') }}"
                                    autofocus
                                >
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                                @if ($errors->has('email'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary btn-block btn-flat">
                                {{ __('auth.send_password_reset_link') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
