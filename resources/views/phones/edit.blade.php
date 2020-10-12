@extends('layouts.app')
@section('sidebar')
@endsection
@section('content')
    <h3>Editar telefone</h3>
    <form action="{{ route('phones.update', [$phone, 'redirectTo' => $redirectTo]) }}" method="post">
        @csrf
        @method('put')
        <div class="form-row">
            <div class="col-sm-2 form-group">
                <label for="ddd">DDD</label>
                <input type="text" name="ddd" id="ddd" value="{{ $phone->ddd }}" class="form-control @error('ddd') is-invalid @enderror" required>
                @error('ddd')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="col-sm-3 form-group">
                <label for="numero">Número</label>
                <input type="text" name="numero" id="numero" value="{{ $phone->numero }}" class="form-control @error('numero') is-invalid @enderror" required>
                @error('numero')
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
