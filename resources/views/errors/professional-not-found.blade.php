@extends('layouts.app')
@section('sidebar')
    @endsection
@section('content')
    <div class="text-center text-muted">
        <h4>Ops, profissional não encontrado.</h4>
        <a href="{{ route('home') }}" class="btn btn-primary">Ir para o início</a>
    </div>
@endsection
