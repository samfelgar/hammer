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
                   value="{{ $client->nome }}">
        </div>
        <div class="col-sm-4">
            <label for="email">E-mail</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email"
                   readonly value="{{ $client->email  }}">
        </div>
        <div class="col-sm-2">
            <label for="nascimento">Nascimento</label>
            <input type="text" class="form-control @error('nascimento') is-invalid @enderror" name="nascimento"
                   id="nascimento" readonly value="{{ $client->nascimento->format('d/m/Y') }}">
        </div>
    </div>
    <div class="form-row">
        <div class="col-sm-3 form-group">
            <label for="rg">RG</label>
            <input type="text" class="form-control @error('rg') is-invalid @enderror" name="rg" id="rg" readonly
                   value="{{ $client->rg }}">
        </div>
        <div class="col-sm-3 form-group">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control @error('cpf') is-invalid @enderror" name="cpf" id="cpf" readonly
                   value="{{ $client->cpf_formatted }}">
        </div>
        <div class="col-sm-1" style="margin-top: 30px">
            <a href="{{ route('clients.edit', [$client, 'redirectTo' => route('clients.edit', [$client])]) }}"
               class="btn btn-primary">editar</a>
        </div>
    </div>
    <div class="form-row">
        <div class="col-sm-7">
            <h5>Telefones <a
                    href="{{ route('people.phones.create', [$client, 'redirectTo' => route('professionals.show', [$client])]) }}"
                    class="btn btn-sm btn-primary">novo</a>
            </h5>
            <table class="table table-sm">
                <thead>
                <tr>
                    <th>DDD</th>
                    <th>Telefone</th>
                    <th>Opções</th>
                </tr>
                </thead>
                <tbody>
                @forelse($client->phones as $phone)
                    <tr>
                        <td>{{ $phone->ddd }}</td>
                        <td>{{ $phone->numero }}</td>
                        <td>
                            <a href="{{ route('phones.edit', [$phone, 'redirectTo' => url()->current()]) }}"
                               class="btn btn-primary btn-sm">Editar</a>
                            <form action="{{ route('phones.destroy', [$phone, 'redirectTo' => url()->current()]) }}"
                                  method="post" class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm" type="submit">Excluir</button>
                            </form>
                        </td>
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
            <h5>Endereços <a
                    href="{{ route('people.addresses.create', [$client, 'redirectTo' => url()->current()]) }}"
                    class="btn btn-sm btn-primary">novo</a></h5>
            <table class="table table-sm">
                <thead>
                <tr>
                    <th>Logradouro</th>
                    <th>Número</th>
                    <th>Complemento</th>
                    <th>Bairro</th>
                    <th>Cidade</th>
                    <th>UF</th>
                    <th>CEP</th>
                    <th>Opções</th>
                </tr>
                </thead>
                <tbody>
                @forelse($client->addresses as $address)
                    <tr>
                        <td>{{ $address->logradouro }}</td>
                        <td>{{ $address->numero }}</td>
                        <td>{{ $address->complemento }}</td>
                        <td>{{ $address->bairro }}</td>
                        <td>{{ $address->cidade }}</td>
                        <td>{{ $address->uf }}</td>
                        <td>{{ $address->cep }}</td>
                        <td>
                            <a href="{{ route('addresses.edit', [$address, 'redirectTo' => url()->current()]) }}"
                               class="btn btn-primary btn-sm">Editar</a>
                            <form
                                action="{{ route('addresses.destroy', [$address, 'redirectTo' => url()->current()]) }}"
                                method="post" class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm" type="submit">Excluir</button>
                            </form>
                        </td>
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
