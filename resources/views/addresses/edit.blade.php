@extends('layouts.app')
@section('sidebar')
@endsection
@section('content')
    <h3>Editar endereço</h3>
    <form action="{{ route('addresses.update', [$address, 'redirectTo' => $redirectTo]) }}" method="post">
        @csrf
        @method('put')
        <div class="form-row">
            <div class="col-sm-6 form-group">
                <label for="logradouro">Logradouro</label>
                <input type="text" name="logradouro" id="logradouro" value="{{ $address->logradouro }}"
                       class="form-control @error('logradouro') is-invalid @enderror" required>
                @error('logradouro')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="col-sm-2 form-group">
                <label for="numero">Número</label>
                <input type="number" name="numero" id="numero" value="{{ $address->numero }}"
                       class="form-control @error('numero') is-invalid @enderror" required>
                @error('numero')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="col-sm-4 form-group">
                <label for="bairro">Bairro</label>
                <input type="text" name="bairro" id="bairro" value="{{ $address->bairro }}"
                       class="form-control @error('bairro') is-invalid @enderror" required>
                @error('bairro')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="col-sm-5 form-group">
                <label for="cidade">Cidade</label>
                <input type="text" name="cidade" id="cidade" value="{{ $address->cidade }}"
                       class="form-control @error('cidade') is-invalid @enderror" required>
                @error('cidade')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="col-sm-3 form-group">
                <label for="uf">Estado</label>
                <select name="uf" id="uf" class="form-control">
                    @foreach(ufs() as $key => $uf)
                        <option value="{{ $key }}" @if($key === $address->uf) selected @endif>{{ $uf }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-4 form-group">
                <label for="complemento">Complemento</label>
                <input type="text" name="complemento" id="complemento" value="{{ $address->complemento }}"
                       class="form-control @error('complemento') is-invalid @enderror">
                @error('complemento')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="col-sm-2 form-group">
                <label for="cep">CEP</label>
                <input type="text" name="cep" id="cep" value="{{ $address->cep }}"
                       class="form-control @error('cep') is-invalid @enderror" required>
                @error('cep')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="col-sm">
                <button class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </form>
@endsection
