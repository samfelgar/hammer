@extends('layouts.app')
@section('content')
    @if(isset($search))
        <h1>Resultados para: "{{ $search }}"</h1>
    @else
        <h1>Todos os anúncios</h1>
    @endif
    <div>
        <div class="row">
            @foreach($advertisements as $item)
                <div class="col-sm-3 mt-5">
                    <div class="card">
                        <img class="card-img-top"
                             src="https://image.freepik.com/vetores-gratis/imagens-animadas-abstratas-neon-lines_23-2148344065.jpg"
                             alt="Card image cap">
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
