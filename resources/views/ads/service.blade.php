@extends('layouts.app')
@section('content')
    <h1 style="">Serviços Contratados</h1>
    <div class="row">
        <div class="col" style="width: 100px">
            <div class="card" style="width: 20rem;">
                <img src="{{ asset('images/pintura.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Serviço</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia repellat ipsa perspiciatis autem! Necessitatibus assumenda sed repudiandae ad quisquam quas perspiciatis saepe, quis impedit mollitia, quos atque, at fugiat earum.</p>
                    <a href="#" class="btn btn-primary">Visualizar</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 20rem;">
                <img src="{{ asset('images/pintura.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Serviço</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia repellat ipsa perspiciatis autem! Necessitatibus assumenda sed repudiandae ad quisquam quas perspiciatis saepe, quis impedit mollitia, quos atque, at fugiat earum.</p>
                    <a href="#" class="btn btn-primary">Visualizar</a>
                </div>
            </div>
        </div>
    </div>

@endsection
