@extends('layouts.app')
@section('sidebar')
@endsection
@section('content')
    <h3>Meu perfil</h3>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="form-row">
        <div class="col-sm-6 form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control @error('nome') is-invalid @enderror" readonly
                   value="{{ $professional->nome }}">
        </div>
        <div class="col-sm-4">
            <label for="email">E-mail</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email"
                   readonly value="{{ $professional->email  }}">
        </div>
        <div class="col-sm-2">
            <label for="nascimento">Nascimento</label>
            <input type="text" class="form-control @error('nascimento') is-invalid @enderror" name="nascimento"
                   id="nascimento" readonly value="{{ $professional->nascimento->format('d/m/Y') }}">
        </div>
    </div>
    <div class="form-row">
        <div class="col-sm-3 form-group">
            <label for="rg">RG</label>
            <input type="text" class="form-control @error('rg') is-invalid @enderror" name="rg" id="rg" readonly
                   value="{{ $professional->rg }}">
        </div>
        <div class="col-sm-3 form-group">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control @error('cpf') is-invalid @enderror" name="cpf" id="cpf" readonly
                   value="{{ $professional->cpf_formatted }}">
        </div>
    </div>
    <div class="form-row">
        <div class="col-sm-7">
            <h5>Telefones
            </h5>
            <table class="table table-dark">
                <thead>
                <tr>
                    <th>DDD</th>
                    <th>Telefone</th>
                    <th>Opções</th>
                </tr>
                </thead>
                <tbody>
                @forelse($professional->phones as $phone)
                    <tr>
                        <td>{{ $phone->ddd }}</td>
                        <td>{{ $phone->numero }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">Sem telefones cadastrados.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <div class="form-row">
        <div class="col-sm">
            <h5>Endereços</h5>
            <table class="table table-dark">
                <thead>
                <tr>
                    <th>Logradouro</th>
                    <th>Número</th>
                    <th>Complemento</th>
                    <th>Bairro</th>
                    <th>Cidade</th>
                    <th>UF</th>
                    <th>CEP</th>
                </tr>
                </thead>
                <tbody>
                @forelse($professional->addresses as $address)
                    <tr>
                        <td>{{ $address->logradouro }}</td>
                        <td>{{ $address->numero }}</td>
                        <td>{{ $address->complemento }}</td>
                        <td>{{ $address->bairro }}</td>
                        <td>{{ $address->cidade }}</td>
                        <td>{{ $address->uf }}</td>
                        <td>{{ $address->cep }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">Sem endereços cadastrados.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
