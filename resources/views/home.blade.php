@extends('layouts.app')

@section('content')


<div class="h2 text-center">Serviços Oferecidos</div>
<article id="carousel">
    <div class="d-flex justify-content-center">
        <div style="width: 600px; height: 400px;">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner rounded">
                    <div class="carousel-item active">
                        <img src="https://image.freepik.com/vetores-gratis/imagens-animadas-abstratas-neon-lines_23-2148344065.jpg" class="d-block " alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>"Nome do Serviço"</h5>
                            <p>Breve Descrição do Mesmo</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://image.freepik.com/vetores-gratis/imagens-animadas-abstratas-neon-lines_23-2148344065.jpg" class="d-block" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>"Nome do Serviço"</h5>
                            <p>Breve Descrição do Mesmo</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://image.freepik.com/vetores-gratis/imagens-animadas-abstratas-neon-lines_23-2148344065.jpg" class="d-block" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>"Nome do Serviço"</h5>
                            <p>Breve Descrição do Mesmo</p>
                        </div>
                    </div>
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
        </div>
    </div>
</article>
@endsection