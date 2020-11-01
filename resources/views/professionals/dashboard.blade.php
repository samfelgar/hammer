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
                <th>Início</th>
                <th>OS</th>
                <th>Status</th>
                <th>Data de solicitação</th>
                <th>Opções</th>
            </tr>
            </thead>
            <tbody>
            @forelse($professional->services as $service)
                <tr>
                    <td>{{ $service->data_formatted }}</td>
                    <td>{{ $service->os }}</td>
                    <td>{{ $service->status->label }}</td>
                    <td>{{ $service->created_at->format('d/m/Y') }}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary">Ver andamento</a>
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
        <div class="d-flex justify-content-between mb-2">
            <h4>Meus anúncios</h4>
            <div>
                <a href="{{ route('professionals.advertisements.create', [$professional]) }}" class="btn btn-primary btn-sm">Novo anúncio</a>
            </div>
        </div>
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
                        <a href="#" class="btn btn-danger btn-sm">Pausar anúncio</a>
                        <a href="{{route('advertisements.edit', $advertisement)}}" class="btn btn-primary btn-sm">Editar Anuncio</a>
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
