@extends('layouts.app')
@section('sidebar')
@endsection
@section('content')
    <h1>Pagamentos</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Serviço</th>
            <th>Cliente</th>
            <th>Prestador</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1123</td>
            <td>Fulano de Tal</td>
            <td>Ciclano Pereira</td>
            <td>
                <button class="btn btn-primary btn-sm">Visualizar</button>
                <button class="btn btn-primary btn-sm">Confirmar</button>
                <button class="btn btn-primary btn-sm">Deletar</button>
            </td>
        </tr>
        <tr>
            <td>1124</td>
            <td>Fulano de Tal</td>
            <td>Mauricio Marinho</td>
            <td>
                <button class="btn btn-primary btn-sm">Visualizar</button>
                <button class="btn btn-primary btn-sm">Confirmar</button>
                <button class="btn btn-primary btn-sm">Deletar</button>

            </td>
        </tr>
        </tbody>
    </table>
@endsection
