@extends('layouts._body.auth')

@section('title', 'Login')

@section('content')
    <section class="section">
        <div class="d-flex flex-wrap align-items-stretch">
            <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
                <div class="p-4 m-3">
                    <img
                        src="{{ asset('assets/img/manado.png') }}"
                        alt="logo" width="80"
                        class="shadow-light mb-5 mt-2"
                    >
                    <h4 class="text-dark font-weight-normal">
                        Welcome to
                        <span class="font-weight-bold">{{ config('app.name', 'laravel') }} v{{ config('app.version', '1') }}</span>
                    </h4>
                    <p class="text-muted">
                        Before you get started, you must login or register if you don't already have an account.
                    </p>

                    <form method="POST" class="needs-validation" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <div class="d-block">
                                <label for="email" class="control-label">{{ __('E-Mail Address') }}</label>
                            </div>

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" tabindex="1" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="d-block">
                                <label for="password" class="control-label">{{ __('Password') }}</label>
                            </div>

                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" tabindex="2">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="remember"> {{ __('Remember Me') }}</label>
                            </div>
                        </div>


                        <div class="form-group text-right">
                            @if (Route::has('password.request'))
                                <a  href="{{ route('password.request') }}" class="float-left mt-3">
                                    Forgot Password?
                                </a>
                            @endif

                            <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                                {{ __('Login') }}
                            </button>
                        </div>

                        <div class="mt-5 text-center">
                            Don't have an account? <a href="{{ route('register') }}">Create new one</a>
                        </div>
                    </form>

                    <div class="text-center mt-5 text-small">
                        Copyright &copy; Pemerintah Kota Manado</a>.
                        <div class="mt-2">
                            <a href="{{ route('faqs') }}" target="_blank">FAQs</a>
                            <div class="bullet"></div>
                            <a href="{{ route('docs') }}" target="_blank">Docs</a>
                            <div class="bullet"></div>
                            <a href="{{ route('helps') }}" target="_blank">Helps</a>
                        </div>
                    </div>
                </div>
            </div>
            @include('auth.items.background-walk')
        </div>
    </section>
@endsection
