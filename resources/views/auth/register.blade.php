@extends('layouts.app')
@section('sidebar')
@endsection
@section('content')

    <div class="container">
        <h3>Cadastro Cliente</h3>
        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-row">
                    <div class="col-sm-6 form-group">
                        <label for="name">{{ __('Name') }}</label>
                        <input id="name" type="text"
                               class="form-control @error('name') is-invalid @enderror" name="name"
                               value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>

                    <div class="form-group col-sm-4">
                        <label for="email">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email"
                               class="form-control @error('email') is-invalid @enderror" name="email"
                               value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-2">
                        <label for="nascimento">{{ __('Data de Nascimento') }}</label>
                        <input id="nascimento" type="text"
                               class="form-control @error('nascimento') is-invalid @enderror"
                               name="nascimento" value="{{ old('nascimento') }}" required
                               autocomplete="dataNascimento" autofocus>
                        @error('nascimento')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-sm-6 form-group">
                        <label for="rg">{{ __('RG') }}</label>
                        <input id="rg" type="text" class="form-control @error('rg') is-invalid @enderror"
                               name="rg" value="{{ old('rg') }}" required autocomplete="name" autofocus>

                        @error('rg')
                        <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                        @enderror
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="rg">{{ __('CPF') }}</label>
                        <input id="cpf" type="text"
                               class="form-control @error('cpf') is-invalid @enderror" name="cpf"
                               value="{{ old('cpf') }}" required autocomplete="cpf" autofocus
                               maxlength="11">

                        @error('cpf')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>

                </div>

                <div class="form-row">
                    <div class="col-sm-4 form-group">
                        <label for="password">{{ __('Password') }}</label>
                        <input id="password" type="password"
                               class="form-control @error('password') is-invalid @enderror" name="password"
                               required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>

                    <div class="form-group col-sm-4">
                        <label for="password-confirm">{{ __('Confirm Password') }}</label>

                        <input id="password-confirm" type="password" class="form-control"
                               name="password_confirmation" required autocomplete="new-password">
                    </div>

                </div>
                <div class="form-group">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                            <a class="btn btn-secondary" href="{{url()->previous()}}">Cancelar</a>
                </div>
            </form>
        </div>


@endsection
