@extends('auth.auth')

@section('content')
    @include('websites.inc.main-nav')
    <div class="container w-container">
        <div class="row justify-content-center">
            <div class="register-box">
                <div class="card">
                    <div class="card-body register-card-body">
                        <p class="login-box-msg">{{ __('auth.register_message') }}</p>
                        <form action="{{ route('register') }}" method="post">
                            {{ csrf_field() }}

                            <div class="input-group mb-3">
                                <input
                                    type="text"
                                    name="name"
                                    class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                    value="{{ old('name') }}"
                                    placeholder="{{ __('auth.full_name') }}"
                                    autofocus
                                >
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>

                                @if ($errors->has('name'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="input-group mb-3">
                                <input
                                    type="email"
                                    name="email"
                                    class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                    value="{{ old('email') }}"
                                    placeholder="{{ __('auth.email') }}"
                                >
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                                @if ($errors->has('email'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
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
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="input-group mb-3">
                                <input
                                    type="password"
                                    name="password_confirmation"
                                    class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}"
                                    placeholder="{{ __('auth.retype_password') }}"
                                >
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                                @if ($errors->has('password_confirmation'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </div>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary btn-block btn-flat">
                                {{ __('auth.register') }}
                            </button>
                        </form>
                        <p class="mt-2 mb-1">
                            <a href="{{ route('login') }}">
                                {{ __('auth.i_already_have_a_membership') }}
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
