@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm">
            <div class="h2 text-center">Destaques</div>
            <article id="carousel" class="d-flex justify-content-center">
                <div id="carouselExampleCaptions" class="carousel slide w-50" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner rounded">
                        @foreach($featured as $item)
                            <div class="carousel-item @if($loop->first) active @endif">
                                @php
                                    $photo = $item->photos()->first();
                                    $src = 'https://via.placeholder.com/600';
                                    if($photo) {
                                        $src = Storage::disk('public')->url($photo->path);
                                    }
                                @endphp
                                <img
                                    src="{{ $src }}"
                                    class="d-block w-100">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>{{$item->titulo}}</h5>
                                    <p>{{$item->descricao}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </article>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-sm">
            <form action="{{ route('advertisements.search') }}" method="post">
                @csrf
                <label for="search" class="h4">Procure o serviço que você deseja</label>
                <input class="form-control" id="search" name="search"
                       placeholder="Digite o termo desejado e tecle enter" type="text">
            </form>
        </div>
    </div>
    <div>
        <h3 class="mt-3">Mais recentes</h3>
        <div class="row">
            @foreach($advertisements as $item)
                @php
                    $photo = $item->photos()->first();
                    $src = 'https://via.placeholder.com/600';
                    if($photo) {
                        $src = Storage::disk('public')->url($photo->path);
                    }
                @endphp
                <div class="col-sm-3 mt-3">
                    <div class="card">
                        <img class="card-img-top"
                             src="{{ $src }}"
                             alt="Sem foto">
                        <div class="card-body">
                            <h5 class="card-title">{{$item->titulo}}</h5>
                            <p class="card-text">
                                {{$item->descricao}}
                            </p>
                            <a href="{{route('advertisements.show', [$item])}}" class="btn btn-primary">Ver anúncio</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
