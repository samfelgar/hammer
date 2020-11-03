@extends('layouts.app')
@section('sidebar')
@endsection
@section('content')
    <h3>Meus serviços</h3>
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Descrição</th>
            <th>Situação</th>
            <th>Data de início</th>
            <th>OS</th>
            <th>Opções</th>
        </tr>
        </thead>
        <tbody>
        @foreach($client->services as $service)
            <tr>
                <td>{{ $service->id }}</td>
                <td>{{ $service->advertisement->titulo }}</td>
                <td>{{ $service->status->label }}</td>
                <td>{{ $service->data->format('d/m/Y') }}</td>
                <td>{{ $service->os }}</td>
                <td><a href="{{ route('services.show', [$service]) }}" class="btn btn-primary btn-sm">Detalhes</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
