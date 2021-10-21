@extends('layouts.others')

@section('content')

    <!-- Login -->
    <div class="login-page d-flex align-items-center vh-100">
        <div class="overlay"></div>
        <div class="login-form">
            <!-- Container -->
            <div class="container">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="login-social-icon">
                        <h2>{{ __('Register') }}</h2>
                        <ul class="social-buttons">

                        </ul>
                    </div>

                    <div class="input-group">
                        <span class="login-form-icon"><i class="uil uil-user"></i></span>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Full Name" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="input-group">
                        <span class="login-form-icon"><i class="uil uil-envelope"></i></span>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="input-group">
                        <span class="login-form-icon"><i class="uil uil-lock"></i></span>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="input-group">
                        <span class="login-form-icon"><i class="uil uil-lock"></i></span>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                    </div>

                    <div class="row justify-content-center mb-md-3">
                        <div class="col-sm-6 mb-md-3 mb-sm-0">
                            <button type="submit" class="btn theme-btn-1">{{ __('Register') }}</button>
                        </div>
                    </div>

                    <div class="login-footer">Already have an account? <a href="{{ route('login') }}">Login</a></div>
                </form>
            </div>
            <!-- /Container -->
        </div>
    </div>
    <!-- /Login -->




@endsection
