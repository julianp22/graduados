@extends('layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ __('Register') }}</h5>
                        <form class="form-signin" method="POST" action="{{ route('register') }}" autocomplete="off">
                            @csrf
                            <div class="form-label-group">
                                <input type="text" id="inputName" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" value="{{ old('name') }}"
                                    placeholder="{{ __('name') }}" required autocomplete="name" autofocus>
                                <label for="inputName">{{ __('Name') }}</label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

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

                            <div class="form-label-group">
                                <input type="password" id="inputPasswordConfirm" class="form-control"
                                    name="password_confirmation" placeholder="Confirmar contraseña" required
                                    autocomplete="new-password">
                                <label for="inputPasswordConfirm">{{ __('Confirm Password') }}</label>
                            </div>

                            <button class="btn btn-lg btn-primary btn-block text-uppercase"
                                type="submit">Registrarse</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
