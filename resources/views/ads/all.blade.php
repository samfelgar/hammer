@extends('layouts.app')
@section('sidebar')
@endsection
@section('content')
    <h1>Serviços</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Categoria</th>
            <th>Cliente</th>
            <th>Prestador</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Pintura</td>
            <td>Fulano de Tal</td>
            <td>Ciclano Pereira</td>
            <td>
                <button class="btn btn-primary btn-sm">Visualizar</button>
            </td>
        </tr>
        <tr>
            <td>Gesso</td>
            <td>Fulano de Tal</td>
            <td>Mauricio Marinho</td>
            <td>
                <button class="btn btn-primary btn-sm">Visualizar</button>
            </td>
        </tr>
        </tbody>
    </table>
@endsection
