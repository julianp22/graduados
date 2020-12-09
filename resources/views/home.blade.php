@extends('layout')

@section('title', 'Inicio')

@section('content')
<!--<div class="container">
                    <div class="row">
                        <div class="col-lg-12">-->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 p-0">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block" src="{{asset('storage/' . $primernoticia->foto)}}" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <a href="{{ route('noticias.show', $primernoticia) }}"
                                class="btn btn-primary btn-sm">{{ $primernoticia->titulo }}</a>
                        </div>
                    </div>
                    @foreach($noticias as $key => $noticia)
                    @if($key > 0 && $key < 4) <div class="carousel-item">
                        <img class="d-block" src="{{asset('storage/' . $noticia->foto)}}" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <a href="{{ route('noticias.show', $noticia) }}"
                                class="btn btn-primary btn-sm">{{ $noticia->titulo }}</a>
                        </div>
                </div>
                @endif
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
</div>

<div class="container py-1">
    <h2 class="text-center py-4">Eventos</h2>
    <div class="card-deck">
        @foreach($eventos as $key => $evento)
        @if($key < 4) 
        <div class="card">
            <img class="card-img-top" src="{{asset('storage/' . $evento->foto)}}" alt="Card image cap" style="height: 400px; width= 400px;">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="{{ route('eventos.show', $evento) }}">{{ $evento->titulo }}</a>
                </h5>
                <p class="card-text">{{ $evento->descripcion }}</p>
                <p class="card-text"><small class="text-muted">{{ $evento->created_at->diffForHumans() }}</small></p>
            </div>
        </div>
    @endif
    @endforeach
    </div>
</div>

<div class="container py-1">
    <hr>
    <h2 class="text-center py-4">Experiencias de egresados</h2>
    <div class="card-deck">
        @foreach($experiencias as $key => $experiencia)
        @if($key < 4)  
        @foreach($graduados as $graduado)
        @if($graduado->id == $experiencia->graduado_id)
        <div class="card">
            <div class="embed-responsive embed-responsive-16by9">
                {!! $experiencia->url_video !!}
            </div>
            <div class="card-body">
                <h5 class="card-title">
                    <a href="{{ route('experiencias.show', $experiencia) }}">{{ $graduado->nombre }}</a>
                </h5>
                <p class="card-text">{{ $experiencia->descripcion }}</p>
                <p class="card-text"><small class="text-muted">{{ $experiencia->created_at->diffForHumans() }}</small></p>
            </div>
        </div>
    @endif
    @endforeach
    @endif
    @endforeach
    </div>
</div>

<div class="container py-1">
    <hr>
    <h2 class="text-center py-4">Graduados</h2>
    <div class="card-deck">
        @foreach($graduados as $key => $graduado)
        @if($key < 4) 
        <div class="card">
            <img class="card-img-top" src="{{asset('storage/' . $graduado->foto)}}" alt="Card image cap" style="height: 400px; width= 400px;">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="{{ route('graduados.show', $graduado) }}">{{ $graduado->nombre }}</a>
                </h5>
                <p class="card-text">Reside en {{ $graduado->pais_residencia }}</p>
                <p class="card-text"><small class="text-muted">Se graduó el {{ $graduado->fecha_grado }}</small></p>
            </div>
        </div>
    @endif
    @endforeach
    </div>
</div>

<!-- FOOTER -->

<div class="container py-5">
    <hr>
    <div class="row py-4">
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <p class="font-italic text-muted">Redes sociales de la carrera</p>
            <ul class="list-inline mt-4">
                <li class="list-inline-item"><a href="https://www.facebook.com/IngSistUFPS/?fref=ts" target="_blank" title="twitter"><i
                            class="fab fa-facebook-f white-text mr-4"> </i></a></li>
                <li class="list-inline-item"><a href="https://twitter.com/UFPSCUCUTA" target="_blank" title="facebook"><i
                            class="fab fa-twitter white-text mr-4"> </i></a></li>
                <li class="list-inline-item"><a href="https://www.youtube.com/channel/UCgPz-qqaAk4lbHfr0XH3k2g" target="_blank" title="instagram"><i
                            class="fab fa-youtube white-text mr-4"> </i></a></li>
                <li class="list-inline-item"><a href="https://www.instagram.com/ufpscucuta/" target="_blank" title="pinterest"><i
                            class="fab fa-instagram white-text"> </i></a></li>
            </ul>
        </div>
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <h6 class="text-uppercase font-weight-bold mb-4">Información</h6>
            <ul class="list-unstyled mb-0">
                <li class="mb-2"><a href="{{ route('graduados.index') }}" class="text-muted">Graduados</a></li>
                <li class="mb-2"><a href="{{ route('noticias.index') }}" class="text-muted">Noticias</a></li>
                <li class="mb-2"><a href="{{ route('eventos.index') }}" class="text-muted">Eventos</a></li>
                <li class="mb-2"><a href="{{ route('ofertas.index') }}" class="text-muted">Ofertas Laborales</a></li>
            </ul>
        </div>
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <h6 class="text-uppercase font-weight-bold mb-4">Ingeniería de Sistemas</h6>
            <ul class="list-unstyled mb-0">
                <li class="mb-2"><a href="https://ingsistemas.cloud.ufps.edu.co/" class="text-muted">Página oficial</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection