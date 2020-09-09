@extends('layouts.app')
@section('content')
    <h1>Novo anúncio</h1>
    <form method="post">
        @csrf
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="photo">Foto</label>
            <div class="col-sm-6">
                <input type="file" name="photo" id="photo" class="">
            </div>
        </div>
        <div class="form-group row">
            <label for="price" class="col-sm-2 col-form-label">Valor</label>
            <div class="col-sm-4">
                <input type="text" name="price" id="price" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">Descrição do serviço</label>
            <div class="col-sm-6">
                <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2 offset-2">
                <button type="submit" class="btn btn-primary btn-block">Publicar</button>
            </div>
        </div>
    </form>
@endsection
