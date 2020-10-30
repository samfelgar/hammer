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
        <div class="d-flex justify-content-between mb-2">
            <h4>Meus anúncios</h4>
            <div>
                <a href="{{ route('professionals.advertisements.create', [$professional]) }}"
                   class="btn btn-primary btn-sm">Novo anúncio</a>
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
            @forelse($professional->advertisements()->withTrashed()->get() as $advertisement)
                <tr>
                    <td>{{ $advertisement->titulo }}</td>
                    <td>{{ $advertisement->data_formatted }}</td>
                    <td>{{ $advertisement->preco_formatted }}</td>
                    <td>{{ $advertisement->category->nome }}</td>
                    <td>
                        @if(isset($advertisement->deleted_at))
                            <form action="{{route('advertisements.restore', $advertisement)}}" method="post" class="d-inline">
                                @csrf
                                <button class="btn btn-danger btn-sm col-4" type="submit">Restaurar Anuncio</button>
                            </form>
                        @else
                            <form action="{{route('advertisements.destroy', $advertisement)}}" method="post" class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm col-4" type="submit">Pausar Anuncio</button>
                            </form>
                        @endif

                            <a href="{{route('advertisements.edit', $advertisement)}}"
                               class="btn btn-primary btn-sm col-4">Editar Anuncio</a>
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
