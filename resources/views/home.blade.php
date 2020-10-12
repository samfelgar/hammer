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
                        <img src="https://image.freepik.com/vetores-gratis/imagens-animadas-abstratas-neon-lines_23-2148344065.jpg" class="d-block w-100">
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
<div>
    <h3 class="mt-3">Mais recentes</h3>
    <div class="row">
        @foreach($advertisements as $item)
        <div class="col-sm-3 mt-3">
            <div class="card" >
                <img class="card-img-top" src="https://image.freepik.com/vetores-gratis/imagens-animadas-abstratas-neon-lines_23-2148344065.jpg" alt="Card image cap">
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
