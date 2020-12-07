@extends('layouts.app')
@section('sidebar')
@endsection
@section('content')
    <div class="text-muted">
        <h4>Ops, não é possível cancelar o serviço selecionado.</h4>
        <a href="{{ url()->previous() }}" class="btn btn-primary mt-3">Voltar</a>
    </div>
@endsection
