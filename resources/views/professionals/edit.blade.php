@extends('layouts.app')
@section('sidebar')
@endsection
@section('content')
    <h3>Alterar dados pessoais</h3>
    <form action="{{ route('professionals.update', [$professional]) }}" method="post">
        @csrf
        @method('put')
        <div class="form-row">
            <div class="col-sm-6 form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control @error('nome') is-invalid @enderror" required value="{{ $professional->nome }}">
                @error('nome')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="col-sm-4">
                <label for="email">E-mail</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" required value="{{ $professional->email  }}">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="col-sm-2">
                <label for="nascimento">Nascimento</label>
                <input type="date" class="form-control @error('nascimento') is-invalid @enderror" name="nascimento" id="nascimento" required value="{{ $professional->nascimento->format('Y-m-d') }}">
                @error('nascimento')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="col-sm-3 form-group">
                <label for="rg">RG</label>
                <input type="text" class="form-control @error('rg') is-invalid @enderror" name="rg" id="rg" required value="{{ $professional->rg }}">
                @error('rg')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="col-sm-3 form-group">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control @error('cpf') is-invalid @enderror" name="cpf" id="cpf" required value="{{ $professional->cpf }}">
                @error('cpf')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="col-sm-4 form-group">
                <label for="senha">Nova senha</label>
                <input type="password" class="form-control @error('senha') is-invalid @enderror" name="senha" id="senha">
                @error('senha')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="col-sm-4 form-group">
                <label for="senha_confirmation">Confirmar a nova senha</label>
                <input type="password" class="form-control" name="senha_confirmation" id="senha_confirmation">
            </div>
        </div>
        <div class="form-group">
            <button class="btn btn-primary">Salvar</button>
            <a href="{{ route('home') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
@endsection
