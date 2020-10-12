@extends('layouts.app')
@section('content')
    <h1>{{$advertisements->titulo}}</h1>
    <div class="row">
        <div class="col">
            <div class="border" style="width: 100%; height: 300px; background-color: #95c5ed"></div>
        </div>
        <div class="col">
            <p>
                {{$advertisements->descricao}}
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <p class="mt-1"><span class="h3">{{ number_format($advertisements->preco, 2) }}</span>/dia</p>
            <button class="btn btn-primary btn-block btn-lg">Contratar</button>
            <a class="btn btn-secondary mt-2" href="{{url()->previous()}}">Voltar</a>
        </div>
        <div class="col">
            <p class="h4 mt-sm-2">{{$professional->nome}}</p>
            <p class="mt-sm-4 ">{{$professional->phones()->first()->ddd ?? ''}} - {{$professional->phones()->first()->numero ?? ''}}</p>
        </div>
    </div>
@endsection
