@extends('layouts.app')
@section('sidebar')
@endsection
@section('content')
    <div class="d-flex justify-content-between">
        <h3>Serviço nº {{ $service->id }} - {{ $service->advertisement->titulo }}</h3>
        <div>
            <a class="btn btn-secondary mt-2" href="{{url()->previous()}}">Voltar</a>
        </div>
    </div>
    <div class="row my-3">
        <div class="form-group col-sm">
            <h5>Situação do pedido: {{ $service->status->label }}</h5>
        </div>
    </div>
    <div>
        <h4>Dados Cliente <a class="btn btn-sm btn-primary" href="{{route('clients.admin', $cliente)}}">Visualizar</a>
        </h4>
        <div class="form-row">
            <div class="form-group col-sm-4">
                <label for="prestador-nome">Nome do cliente</label>
                <input type="text" value="{{ $cliente->nome }}" class="form-control"
                       readonly>
            </div>
            <div class="form-group col-sm-3">
                <label for="prestador-telefone">Telefone do cliente</label>
                <input type="text" value="{{ $cliente->phones()->first() }}"
                       class="form-control" readonly>
            </div>
        </div>
    </div>
    <div>
        <h4>Dados prestador<a class="btn btn-sm btn-primary" href="{{route('professionals.admin', [$professional])}}">Visualizar</a></h4>
        <div class="form-row">
            <div class="form-group col-sm-4">
                <label for="prestador-nome">Nome do prestador</label>
                <input type="text" value="{{ $professional->nome }}" class="form-control"
                       readonly>
            </div>
            <div class="form-group col-sm-3">
                <label for="prestador-telefone">Telefone do prestador</label>
                <input type="text" value="{{ $professional->phones()->first() }}"
                       class="form-control" readonly>
            </div>
        </div>
    </div>
    <div>
        <h4>Dados Serviço</h4>
        <div class="form-row">
            <div class="form-group col-sm-3">
                <label for="data">Data de início</label>
                <input type="text" value="{{ $service->data->format('d/m/Y') }}" class="form-control" readonly>
            </div>
            <div class="form-group col-sm-3">
                <label for="os">OS</label>
                <input type="text" value="{{ $service->os }}" class="form-control" readonly>
            </div>
            <div class="form-group col-sm-4">
                <label for="payment">Cartão</label>
                <input type="text" value="{{ $service->paymentMethod->number }}" class="form-control" readonly>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-sm">
            <label for="detalhes">Detalhes</label>
            <textarea name="detalhes" id="detalhes" cols="30" rows="10" class="form-control"
                      readonly>{{ $service->detalhes }}</textarea>
        </div>
    </div>
@endsection
