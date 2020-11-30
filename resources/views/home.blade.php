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
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block"
                            src="https://ww2.ufps.edu.co/public/imagenes/seccion/Banner_UFPS_conTICgo_header.jpg"
                            alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block"
                            src="https://ingsistemas.cloud.ufps.edu.co/rsc/img/Preparaci%C3%B3n%20Pruebas%20Saber%20Pro.jpg"
                            alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="https://ww2.ufps.edu.co/public/imagenes/seccion/sistem1.png"
                            alt="Third slide">
                    </div>
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
    <div class="row">
        <div class="col-lg-12 text-center bg-dark text-white-50 shadow">
            <span>Carousel texto</span>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 overlay-gradient bg-cover bg-center p-5"
            style="background: url(https://i.postimg.cc/Xqdb0gzM/forest-1.jpg)">
            <div class="overlay-content text-white text-center p-5">
                <h2>Evento 1</h2>
                <p class="lead demo-text mb-1">Ejemplo de evento 1
                </p>
                <p class="lead demo-text mb-1">Demostración de un evento</p>
                <p class="lead demo-text mb-4">Poner la descripción del evento</p>
                <a class="btn btn-outline-light rounded-0 px-5" href="#">Ver evento</a>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 overlay-gradient bg-cover bg-center p-5"
            style="background: url(https://i.postimg.cc/Xqdb0gzM/forest-1.jpg)">
            <div class="overlay-content text-white text-center p-5">
                <h2>Evento 2</h2>
                <p class="lead demo-text mb-1">Ejemplo de evento 2
                </p>
                <p class="lead demo-text mb-1">Demostración de un evento</p>
                <p class="lead demo-text mb-4">Poner la descripción del evento</p>
                <a class="btn btn-outline-light rounded-0 px-5" href="#">Ver evento</a>
            </div>
        </div>
    </div>
</div>

<!--
<section class="py-5 text-center">
    <div class="container">
        <h2 class="text-center">Luckmoshy`s Services</h2>
        <p class="text-muted mb-5 text-center">There are many variations of passages of Lorem Ipsum available, but the
            majority have suffered alteration in some form.</p>
        <div class="row">
            <div class="col-sm-6 col-lg-4 mb-3">
                <svg class="lnr text-primary services-icon">
                    <use xlink:href="#lnr-magic-wand"></use>
                </svg>
                <h6>Ex cupidatat eu</h6>
                <p class="text-muted">Ex cupidatat eu officia consequat incididunt labore occaecat ut veniam labore et
                    cillum id et.</p>
            </div>
            <div class="col-sm-6 col-lg-4 mb-3">
                <svg class="lnr text-primary services-icon">
                    <use xlink:href="#lnr-heart"></use>
                </svg>
                <h6>Tempor aute occaecat</h6>
                <p class="text-muted">Tempor aute occaecat pariatur esse aute amet.</p>
            </div>
            <div class="col-sm-6 col-lg-4 mb-3">
                <svg class="lnr text-primary services-icon">
                    <use xlink:href="#lnr-rocket"></use>
                </svg>
                <h6>Voluptate ex irure</h6>
                <p class="text-muted">Voluptate ex irure ipsum ipsum ullamco ipsum reprehenderit non ut mollit commodo.
                </p>
            </div>
            <div class="col-sm-6 col-lg-4 mb-3">
                <svg class="lnr text-primary services-icon">
                    <use xlink:href="#lnr-paperclip"></use>
                </svg>
                <h6>Tempor commodo</h6>
                <p class="text-muted">Tempor commodo nostrud ex Lorem occaecat duis occaecat minim.</p>
            </div>
            <div class="col-sm-6 col-lg-4 mb-3">
                <svg class="lnr text-primary services-icon">
                    <use xlink:href="#lnr-screen"></use>
                </svg>
                <h6>Et fugiat sint occaecat</h6>
                <p class="text-muted">Et fugiat sint occaecat voluptate incididunt anim nostrud ea cillum cillum
                    consequat.</p>
            </div>
            <div class="col-sm-6 col-lg-4 mb-3">
                <svg class="lnr text-primary services-icon">
                    <use xlink:href="#lnr-inbox"></use>
                </svg>
                <h6>Et labore tempor et</h6>
                <p class="text-muted">Et labore tempor et adipisicing dolor.</p>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <h3 class="h3">shopping Demo-2 </h3>
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="product-grid2">
                <div class="product-image2">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-1.jpeg">
                        <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-2.jpeg">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Vista rápida"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Favorito"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#" data-tip="Agregar al carro"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <a class="add-to-cart" href="">Agregar al carro</a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                    <span class="price">$599.99</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid2">
                <div class="product-image2">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-3.jpeg">
                        <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-4.jpeg">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Vista rápida"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Favorito"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#" data-tip="Agregar al carro"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <a class="add-to-cart" href="">Agregar al carro</a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Women's Yellow Top</a></h3>
                    <span class="price">$699.99</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid2">
                <div class="product-image2">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-5.jpeg">
                        <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-6.jpeg">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Vista rápida"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Favorito"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#" data-tip="Agregar al carro"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <a class="add-to-cart" href="">Agregar al carro</a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                    <span class="price">$599.99</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid2">
                <div class="product-image2">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-7.jpeg">
                        <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-8.jpeg">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Vista rápida"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Favorito"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#" data-tip="Agregar al carro"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <a class="add-to-cart" href="">Agregar al carro</a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                    <span class="price">$599.99</span>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>-->

<!-- FOOTER -->

<div class="container py-5">
    <div class="row py-4">
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <p class="font-italic text-muted">Redes sociales de la carrera</p>
            <ul class="list-inline mt-4">
                <li class="list-inline-item"><a href="https://facebook.com" target="_blank" title="twitter"><i
                            class="fab fa-facebook-f white-text mr-4"> </i></a></li>
                <li class="list-inline-item"><a href="https://twitter.com" target="_blank" title="facebook"><i
                            class="fab fa-twitter white-text mr-4"> </i></a></li>
                <li class="list-inline-item"><a href="https://youtube.com" target="_blank" title="instagram"><i
                            class="fab fa-youtube white-text mr-4"> </i></a></li>
                <li class="list-inline-item"><a href="https://instagram.com" target="_blank" title="pinterest"><i
                            class="fab fa-instagram white-text"> </i></a></li>
            </ul>
        </div>
        <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
            <h6 class="text-uppercase font-weight-bold mb-4">Información</h6>
            <ul class="list-unstyled mb-0">
                <li class="mb-2"><a href="#" class="text-muted">Graduados</a></li>
                <li class="mb-2"><a href="#" class="text-muted">Noticias</a></li>
                <li class="mb-2"><a href="#" class="text-muted">Eventos</a></li>
                <li class="mb-2"><a href="#" class="text-muted">Ofertas Laborales</a></li>
            </ul>
        </div>
        <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
            <h6 class="text-uppercase font-weight-bold mb-4">Ingeniería de Sistemas</h6>
            <ul class="list-unstyled mb-0">
                <li class="mb-2"><a href="#" class="text-muted">Docentes</a></li>
                <li class="mb-2"><a href="#" class="text-muted">Estudiantes</a></li>
                <li class="mb-2"><a href="#" class="text-muted">Página oficial</a></li>
            </ul>
        </div>
        <div class="col-lg-4 col-md-6 mb-lg-0">
            <h6 class="text-uppercase font-weight-bold mb-4">Contacto</h6>
            <p class="text-muted mb-4">Envíe un correo para contactarse</p>
            <div class="p-1 rounded border">
                <div class="input-group">
                    <input type="email" placeholder="Ingrese su correo electrónico" aria-describedby="button-addon1"
                        class="form-control border-0 shadow-0">
                    <div class="input-group-append">
                        <button id="button-addon1" type="submit" class="btn btn-link"><i
                                class="fa fa-paper-plane"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection