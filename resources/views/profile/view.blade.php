@extends('layouts.profile')
@section('content')
    <form action="" method="post">
        @csrf
        <div class="form-group col-sm-6 offset-sm-2">
            <img src="{{ asset('images/avatar.png') }}" alt="Sua foto" width="100">
        </div>
        <div class="form-group offset-md-2 col-sm-6">
            <div class="custom-file">
                <input type="file" name="photo" id="photo" class="custom-file-input">
                <label class="custom-file-label" for="photo">Ou selecione uma nova foto</label>
            </div>
        </div>
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Nome</label>
            <div class="col-sm-6">
                <input type="text" name="name" id="name" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">E-mail</label>
            <div class="col-sm-6">
                <input type="email" class="form-control" name="email" id="email">
            </div>
        </div>
        <div class="form-group row">
            <label for="phone" class="col-sm-2 col-form-label">Telefone</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="phone" id="phone">
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
            <button class="btn btn-primary">Salvar alterações</button>
        </div>
    </form>
@endsection
