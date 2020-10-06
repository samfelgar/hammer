@extends('layouts.app')

@section('content')
<h1>Entre em Contato com a Gente!</h1>
<div class="row">
    <div class="col-9">
        <form action="">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Nome</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" placeholder="Nome">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Telefone</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Telefone">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Descrição</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary justify-content-center">Enviar</button>
        </form>
    </div>
</div>
@endsection