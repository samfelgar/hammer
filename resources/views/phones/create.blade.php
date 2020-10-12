@extends('layouts.app')
@section('sidebar')
@endsection
@section('content')
    <h3>Novo telefone</h3>
    <form action="{{ route('people.phones.store', [$person, 'redirectTo' => $redirectTo]) }}" method="post">
        @csrf
        <div class="form-row">
            <div class="col-sm-2 form-group">
                <label for="ddd">DDD</label>
                <input type="text" name="ddd" id="ddd" value="{{ old('ddd') }}" class="form-control @error('ddd') is-invalid @enderror" required>
                @error('ddd')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="col-sm-3 form-group">
                <label for="numero">Número</label>
                <input type="text" name="numero" id="numero" value="{{ old('numero') }}" class="form-control @error('numero') is-invalid @enderror" required>
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
                <a class="btn btn-secondary" href="{{url()->previous()}}">Voltar</a>
            </div>
        </div>
    </form>
@endsection
