@extends('layouts.app')
@section('content')
<h1>Novo anúncio</h1>
<form action="{{ route('professionals.advertisements.store', [$professional]) }}" method="post">
    @csrf


    <div class="form-group row">
        <label for="titulo" class="col-sm-2 col-form-label">Titulo</label>
        <div class="col-sm-4">
            <input type="text" name="titulo" id="titulo" class="form-control @error('titulo') is-invalid @enderror">
            @error('titulo')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>


    <div class="form-group row">
        <label for="price" class="col-sm-2 col-form-label">Valor</label>
        <div class="col-sm-4">
            <input type="text" name="preco" id="price" class="form-control @error('preco') is-invalid @enderror">
            @error('preco')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>


    <div class="form-group row">
        <label for="price" class="col-sm-2 col-form-label">Categoria</label>
        <div class="col-sm-4">
            <select name="categoria" id="" class="form-control  @error('categoria') is-invalid @enderror">
                <option value="">Selecione a Categoria</option>
                @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->nome }}</option>
                @endforeach
            </select>
            @error('categoria')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>


    <div class="form-group row">
        <label for="deion" class="col-sm-2 col-form-label">Descrição do serviço</label>
        <div class="col-sm-6">
            <textarea name="descricao" id="deion" cols="30" rows="10" class="form-control  @error('descricao') is-invalid @enderror"></textarea>
            @error('descricao')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
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