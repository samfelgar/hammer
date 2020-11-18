@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md">
            <form method="post" action="{{ route('login') }}" class="row justify-content-center">
                @csrf
                <div class="col-9">
                    <h1 class="h3 mb-3 font-weight-normal">Login de clientes</h1>
                    <div class="form-group">
                        <label for="inputEmail" class="sr-only">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                               name="email"
                               value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputPassword" class="sr-only">{{ __('Password') }}</label>
                        <input id="password" type="password"
                               class="form-control @error('password') is-invalid @enderror"
                               name="password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember"
                                       id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-block btn-primary" type="submit">{{ __('Login') }}</button>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                    <a href="{{ route('register') }}" class="btn btn-link">Clique aqui para se cadastrar</a>
                </div>
            </form>
        </div>
        <div class="col-md">
            <div>
                <h3>Sou profissional</h3>
                <a href="{{route('login.professional')}}" class="btn btn-primary">Acesso de profissionais</a>
            </div>
        </div>

    </div>
@endsection
