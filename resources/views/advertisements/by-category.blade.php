@extends('layouts.app')

@section('content')


    <div>
        <div class="row">
            @foreach($advertisements as $item)
                @php
                    $photo = $item->photos()->first();
                    $src = 'https://via.placeholder.com/600';
                    if($photo) {
                        $src = Storage::disk('public')->url($photo->path);
                    }
                @endphp
                <div class="col-sm-3 mt-5">
                    <div class="card">
                        <img class="card-img-top"
                             src="{{ $src }}"
                             alt="Sem foto">
                        <div class="card-body">
                            <h5 class="card-title">{{$item->titulo}}</h5>
                            <p class="card-text">{{$item->descricao}}</p>
                            <a href="{{route('advertisements.show', [$item])}}" class="btn btn-primary">Ver Anuncio</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
