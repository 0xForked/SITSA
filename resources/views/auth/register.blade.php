@extends('layouts._body.auth')

@section('title', 'Register')

@section('content')
<section class="section">
    <div class="d-flex flex-wrap align-items-stretch">
        <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
            <div class="p-4 m-3">
                <img
                    src="{{ asset('assets/img/p-250.png') }}"
                    alt="logo" width="80"
                    class="shadow-light mb-5 mt-2"
                >
                <h4 class="text-dark font-weight-normal">
                    {{ __('Register') }}
                </h4>
                <p class="text-muted">
                    Get started with
                    <span class="font-weight-bold">{{ config('app.name', 'laravel') }} v{{ config('app.version', '1') }}</span>
                </p>

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <div class="d-block">
                            <label for="name" class="control-label">{{ __('Name') }}</label>
                        </div>

                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="d-block">
                            <label for="username" class="control-label">{{ __('Username') }}</label>
                        </div>

                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autofocus>

                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
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

                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password-confirm" class="control-label">{{ __('Confirm Password') }}</label>

                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                            {{ __('Register') }}
                        </button>
                    </div>
                    <div class="mt-5 text-center">
                        Already have an account? <a href="{{ route('login') }}">Sign in</a>
                    </div>
                </form>
                @include('auth.items.footer-nav')
            </div>
        </div>
        @include('auth.items.background-walk')
    </div>
</section>
@endsection
