@extends('layouts.app')
@section('content')
    <h1>{{$advertisement->titulo}}</h1>
    <div class="row">
        <div class="col">
            <img src="{{ $photo }}" alt="Photo" class="w-100">
        </div>
        <div class="col">
            <p>
                {{$advertisement->descricao}}
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <p class="mt-1"><span class="h3" id="">{{ $advertisement->preco_formatted }}</span>/dia</p>
            <a href="{{ route('advertisements.services.create', [$advertisement]) }}"
               class="btn btn-primary btn-block btn-lg">Contratar</a>
            <a class="btn btn-secondary mt-2" href="{{url()->previous()}}">Voltar</a>
        </div>
        <div class="col">
            <p class="h4 mt-sm-2">{{$professional->nome}}</p>
            <p class="mt-sm-4 ">{{$professional->phones()->first()->ddd ?? ''}}
                - {{$professional->phones()->first()->numero ?? ''}}</p>
        </div>
    </div>
@endsection
