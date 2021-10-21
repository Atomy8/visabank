@extends('layouts.others')

@section('content')

    <!-- Login -->
    <div class="login-page d-flex align-items-center vh-100">
        <div class="overlay"></div>
        <div class="login-form">
            <!-- Container -->
            <div class="container">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="login-social-icon">
                        <h2>Login</h2>
                        <ul class="social-buttons">

                        </ul>
                    </div>

                    <div class="input-group">
                        <span class="login-form-icon"><i class="uil uil-envelope"></i></span>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="input-group">
                        <span class="login-form-icon"><i class="uil uil-lock"></i></span>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Password" autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="input-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>

                    </div>

                    <div class="row justify-content-center mb-md-3">
                        <div class="col-sm-6 mb-md-3 mb-sm-0">
                            <button type="submit" class="btn theme-btn-1">{{ __('Login') }}</button>
                        </div>

                        @if (Route::has('password.request'))
                            <div class="col-sm-6 text-sm-end">
                                <a class="" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                            </div>
                        @endif

                    </div>

                    <div class="login-footer">Don't have an account? <a href="{{ route('register') }}">Register</a>
                    </div>
                </form>
            </div>
            <!-- /Container -->
        </div>
    </div>
    <!-- /Login -->


@endsection
