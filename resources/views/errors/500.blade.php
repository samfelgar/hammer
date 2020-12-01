@extends('layouts.app')
@section('sidebar')
@endsection
@section('content')
    <h1>Houve um erro sua requisição.</h1>
    <a href="{{ url()->previous() }}" class="btn btn-primary">Voltar</a>
@endsection
