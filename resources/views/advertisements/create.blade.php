@extends('layouts.app')
@section('content')
    <h1>Novo anúncio</h1>
    <form action="{{ route('professionals.advertisements.store', [$professional]) }}" method="post"
          enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label for="titulo" class="col-sm-2 col-form-label">Titulo</label>
            <div class="col-sm-4">
                <input type="text" name="titulo" id="titulo" class="form-control @error('titulo') is-invalid @enderror"
                       value="{{ old('titulo') }}">
                @error('titulo')
                <div class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="preco" class="col-sm-2 col-form-label">Valor</label>
            <div class="col-sm-4">
                <input type="text" name="preco" id="preco" class="form-control @error('preco') is-invalid @enderror"
                       value="{{ old('preco') }}">
                @error('preco')
                <div class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="photo" class="col-sm-2 col-form-label">Foto</label>
            <div class="col-sm-4">
                <input type="file" name="photo" id="photo" class="@error('photo') is-invalid @enderror"
                       value="{{ old('photo') }}">
                <small class="form-text text-muted">Somente .jpg ou .png.</small>
                @error('photo')
                <div class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="categoria" class="col-sm-2 col-form-label">Categoria</label>
            <div class="col-sm-4">
                <select name="categoria" id="categoria" class="form-control  @error('categoria') is-invalid @enderror">
                    <option value="">Selecione a Categoria</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}"
                                @if(old('categoria') == $category->id) selected @endif>{{ $category->nome }}</option>
                    @endforeach
                </select>
                @error('categoria')
                <div class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="descricao" class="col-sm-2 col-form-label">Descrição do serviço</label>
            <div class="col-sm-6">
                <textarea name="descricao" id="descricao" cols="30" rows="10"
                          class="form-control  @error('descricao') is-invalid @enderror">{{ old('descricao') }}</textarea>
                @error('descricao')
                <div class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2 offset-2">
                <button type="submit" class="btn btn-primary btn-block">Publicar</button>
            </div>
        </div>
    </form>
@endsection
