@extends('auth.auth')

@section('content')
    @include('websites.inc.main-nav')
    <div class="container w-container">
        <div class="row justify-content-center">
            <div class="login-box">
                <div class="card">
                    <div class="card-body login-card-body">
                        <p class="login-box-msg">{{ __('auth.login_message') }}</p>
                        <form action="{{ route('login') }}" method="post">
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
                            <div class="input-group mb-3">
                                <input
                                    type="password"
                                    name="password"
                                    class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                    placeholder="{{ __('auth.password') }}"
                                >
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                                @if ($errors->has('password'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('password') }}
                                    </div>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <div class="icheck-primary">
                                        <input type="checkbox" name="remember" id="remember">
                                        <label for="remember">{{ __('auth.remember_me') }}</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <button type="submit" class="btn btn-primary btn-block btn-flat">
                                        {{ __('auth.sign_in') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        <p class="mt-2 mb-1">
                            <a href="{{ route('password.request') }}">
                                {{ __('auth.i_forgot_my_password') }}
                            </a>
                        </p>
                        <p class="mb-0">
                            <a href="{{ route('register') }}">
                                {{ __('auth.register_a_new_membership') }}
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
