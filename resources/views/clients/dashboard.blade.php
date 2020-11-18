@extends('layouts.app')
@section('sidebar')
@endsection
@section('content')
    <h3>Meus serviços</h3>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
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
                <td>
                    @if($service->status->equals(\App\Enums\Status::emAndamento()))
                        <form action="{{ route('clients.services.finish', [$service]) }}" method="post"
                              class="d-inline">
                            @csrf
                            @method('put')
                            <button type="submit" class="btn btn-sm btn-success">Informar conclusão</button>
                        </form>
                    @endif
                    <a href="{{ route('services.show', [$service]) }}" class="btn btn-primary btn-sm">Detalhes</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
