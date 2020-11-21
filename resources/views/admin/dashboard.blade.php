@extends('layouts.app')
@section('sidebar')
@endsection
@section('content')
    <h3>Olá, {{ $user->nome }}!</h3>
    <div class="mt-4">
        <h4>Todos os serviços</h4>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Início</th>
                <th>OS</th>
                <th>Status</th>
                <th>Data de solicitação</th>
                <th>Opções</th>
            </tr>
            </thead>
            <tbody>
            @forelse($services as $service)
                <tr>
                    <td>{{ $service->data_formatted }}</td>
                    <td>{{ $service->os }}</td>
                    <td>{{ $service->status->label }}</td>
                    <td>{{ $service->created_at->format('d/m/Y') }}</td>
                    <td>
                        <a href="{{route('services.admin', $service)}}" class="btn btn-sm btn-primary">Visualizar</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Sem registros.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
