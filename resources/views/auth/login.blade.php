@extends('layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">{{ __('Login') }}</h5>
                    <form class="form-signin" method="POST" action="{{ route('login') }}" autocomplete="off">
                        @csrf
                        <div class="form-label-group">
                            <input type="email" id="inputEmail"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" placeholder="{{ __('E-Mail Address') }}" required
                                autocomplete="email" autofocus>
                            <label for="inputEmail">{{ __('E-Mail Address') }}</label>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-label-group">
                            <input type="password" id="inputPassword"
                                class="form-control @error('password') is-invalid @enderror" name="password"
                                placeholder="Password" required autocomplete="current-password">
                            <label for="inputPassword">{{ __('Password') }}</label>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="customCheck1" name="remember"
                                {{ old('remember') ? 'checked' : '' }}>
                            <label class="custom-control-label" for="customCheck1">{{ __('Remember Me') }}</label>
                        </div>

                        <button class="btn btn-lg btn-primary btn-block text-uppercase"
                            type="submit">{{ __('Login') }}</button>
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" style="display:block;" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection