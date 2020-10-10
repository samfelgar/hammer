@extends('layouts.app')
@section('sidebar')
@endsection
@section('content')
    <h3>Olá, {{ $professional->nome }}!</h3>
    <div class="mt-4">
        <h4>Meus serviços</h4>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Previsão término</th>
                <th>OS</th>
                <th>Status</th>
                <th>Data de solicitação</th>
                <th>Opções</th>
            </tr>
            </thead>
            <tbody>
            @forelse($professional->services as $service)
                <tr>
                    <td>{{ $service->data }}</td>
                    <td>{{ $service->data_formatted }}</td>
                    <td>{{ $service->status }}</td>
                    <td>{{ $service->created_at->format('d/m/Y') }}</td>
                    <td>
                        <a href="#" class="btn btn-info">Ver andamento</a>
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
    <div class="mt-4">
        <h4>Meus anúncios</h4>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Título</th>
                <th>Data</th>
                <th>Preço</th>
                <th>Categoria</th>
                <th>Opções</th>
            </tr>
            </thead>
            <tbody>
            @forelse($professional->advertisements as $advertisement)
                <tr>
                    <td>{{ $advertisement->titulo }}</td>
                    <td>{{ $advertisement->data_formatted }}</td>
                    <td>{{ $advertisement->preco_formatted }}</td>
                    <td>{{ $advertisement->category->nome }}</td>
                    <td>
                        <a href="#" class="btn btn-danger">Pausar anúncio</a>
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
