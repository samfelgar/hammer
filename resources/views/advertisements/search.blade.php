@extends('layouts.app')
@section('content')
    <h1>Busca de Anuncios</h1>
    <form method="post">
    <div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <button type="button" class="btn btn-outline-secondary">Categorias</button>
            <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Pinturas</a>
                <a class="dropdown-item" href="#">Reformas</a>
                <a class="dropdown-item" href="#">Construção</a>

            </div>
        </div>
    <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
    <button type="button" class="btn btn-outline-secondary">Buscar</button>
    </div>
    <div>
    <p class="h3">Resultados encontrados para "Pinturas"</p>
    </div>
    <div class="row">
        <div class="col">
            <div class="border" style="width: 100%; height: 300px; background-color: #95c5ed"></div>
            <p class="mt-2"><span class="h3">R$ 200,00</span>/dia</p>
            <button class="btn btn-primary btn-block btn-lg">Contratar</button>
        </div>
        <div class="col">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pulvinar quam vel nunc porta sagittis.
                Fusce a mi pharetra, volutpat dolor eget, accumsan purus. Aliquam pretium enim eu erat tristique
                pretium. Sed vestibulum venenatis dui a iaculis. In hac habitasse platea dictumst. Suspendisse mattis
                urna a lacus bibendum mollis. Fusce in lacus venenatis, placerat ligula ultrices, interdum tortor. Nunc
                id nulla mi. Sed enim ex, faucibus nec turpis vitae, consectetur porta urna. Donec rhoncus, tellus vitae
                semper consequat, arcu magna vehicula quam, eget elementum elit diam finibus sapien. Nulla vel enim
                lacinia, condimentum nulla id, luctus orci. Donec scelerisque neque quis erat dignissim, vel imperdiet
                augue scelerisque. Nullam laoreet ante enim, a pretium elit accumsan ut. Integer non dolor in justo
                gravida aliquam. In ex turpis, placerat eget tempus non, mollis sit amet quam. Suspendisse elementum
                ipsum augue, eu molestie ante ornare ac.
            </p>
        <div>
            <p class="h4">Paulo Nogueira</p>
            <p>61 99999-9999</p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="border" style="width: 100%; height: 300px; background-color: #95c5ed"></div>
            <p class="mt-2"><span class="h3">R$ 200,00</span>/dia</p>
            <button class="btn btn-primary btn-block btn-lg">Contratar</button>
        </div>
        <div class="col">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pulvinar quam vel nunc porta sagittis.
                Fusce a mi pharetra, volutpat dolor eget, accumsan purus. Aliquam pretium enim eu erat tristique
                pretium. Sed vestibulum venenatis dui a iaculis. In hac habitasse platea dictumst. Suspendisse mattis
                urna a lacus bibendum mollis. Fusce in lacus venenatis, placerat ligula ultrices, interdum tortor. Nunc
                id nulla mi. Sed enim ex, faucibus nec turpis vitae, consectetur porta urna. Donec rhoncus, tellus vitae
                semper consequat, arcu magna vehicula quam, eget elementum elit diam finibus sapien. Nulla vel enim
                lacinia, condimentum nulla id, luctus orci. Donec scelerisque neque quis erat dignissim, vel imperdiet
                augue scelerisque. Nullam laoreet ante enim, a pretium elit accumsan ut. Integer non dolor in justo
                gravida aliquam. In ex turpis, placerat eget tempus non, mollis sit amet quam. Suspendisse elementum
                ipsum augue, eu molestie ante ornare ac.
            </p>
        <div>
            <p class="h4">Paulo Nogueira</p>
            <p>61 99999-9999</p>
        </div>
        </div>
    </div>
    </form>
@endsection
