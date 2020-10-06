@extends('layouts.app')
@section('sidebar')
@endsection
@section('content')
    <h1>Prestadores de serviços</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Fulano de Tal</td>
            <td>fulano@example.com</td>
            <td>
                <button class="btn btn-primary btn-sm">Redefinir senha</button>
                <button class="btn btn-danger btn-sm">Desativar</button>
            </td>
        </tr>
        <tr>
            <td>Ciclano de Oliveira</td>
            <td>ciclano@example.com</td>
            <td>
                <button class="btn btn-primary btn-sm">Redefinir senha</button>
                <button class="btn btn-danger btn-sm">Desativar</button>
            </td>
        </tr>
        </tbody>
    </table>
@endsection
