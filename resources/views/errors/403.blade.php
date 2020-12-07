@extends('layouts.app')
@section('sidebar')
@endsection
@section('content')
    <h1>Acesso não autorizado.</h1>
    <a href="{{ route('home') }}" class="btn btn-primary">Retornar à página inicial</a>
@endsection
