@extends('layouts.app')
@section('sidebar')
@endsection
@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success')}}
        </div>
    @endif
    <form action="{{ route('clients.update', [ $client ]) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group col-sm-6 offset-sm-2">
            <img src="{{ asset('images/avatar.png') }}" alt="Sua foto" width="100">
        </div>

        <div class="form-group offset-md-2 col-sm-6">
            <div class="custom-file">
                <input type="file" name="photo" id="photo" class="custom-file-input">
                <label class="custom-file-label" for="photo">Selecione uma nova foto</label>
            </div>
        </div>

        <div class="form-group row">
            <label for="nome" class="col-sm-2 col-form-label">Nome</label>
            <div class="col-sm-6">
                <input type="text" name="nome" value="{{ $client->nome }}" id="nome" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">E-mail</label>
            <div class="col-sm-6">
                <input type="email" class="form-control" value="{{ $client->email }}" name="email" id="email">
            </div>
        </div>

        <div class="form-group row">
            <label for="rg" class="col-sm-2 col-form-label">{{ __('RG') }}</label>
            <div class="col-md-6">
                <input id="rg" type="text" class="form-control @error('rg') is-invalid @enderror" name="rg"
                       value="{{ $client->rg }}" required autocomplete="name" autofocus>
            </div>
        </div>

        <div class="form-group row">
            <label for="rg" class="col-sm-2 col-form-label">{{ __('CPF') }}</label>

            <div class="col-md-6">
                <input id="cpf" oninput="mascara(this)" type="text"
                       class="form-control @error('cpf') is-invalid @enderror" name="cpf" value="{{ $client->cpf }}"
                       required autocomplete="name" autofocus maxlength="11">
            </div>
        </div>

        <div class="form-group row">
            <label for="nascimento" class="col-sm-2 col-form-label">{{ __('Data de Nascimento') }}</label>
            <div class="col-md-6">
                <input id="nascimento" type="text" oninput="mascaraNascimento(this)"
                       class="form-control @error('nascimento') is-invalid @enderror" name="nascimento"
                       value="{{ $client->nascimento->format('d/m/Y') }}" required
                       autocomplete="nascimento" autofocus>
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label">Nova senha</label>
            <div class="col-sm-6">
                <input type="password" class="form-control" name="password" id="password">
            </div>
        </div>

        <div class="form-group row">
            <label for="password_confirmation" class="col-sm-2 col-form-label">Confirmar a nova senha</label>
            <div class="col-sm-6">
                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
            </div>
        </div>

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Salvar alterações</button>
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Voltar</a>
        </div>
    </form>


@endsection
