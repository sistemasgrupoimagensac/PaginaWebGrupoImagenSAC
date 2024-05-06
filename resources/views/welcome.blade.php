@extends('layouts.app')

@section('estilos')
    <style>
        .container-img {
            width: 100%;
            text-align: center;
        }

        .elementor-video {
            width: 100%;
            margin: 0 auto;

        }

        #hero:before {
            content: "";
            background: #23326D;
            position: absolute;
            bottom: 0;
            top: 0;
            left: 0;
            right: 0;
        }

        .about .video-box {
            background: url('{{ asset('galeria_imagenes/' . $configuracion->url_prestamo) }}') center center no-repeat;
            background-size: contain;
            min-height: 300px;
        }

        #hero {
            background-attachment: fixed;
            height: auto;
        }

        .img-logo {
            max-width: 100%;
            height: auto;
            max-height: 100px;
        }
    </style>
@endsection

@section('content')


    <section id="hero">

        <div class="container">
            <div class="row">
                <div class="col-lg-7 pt-5 pt-lg-0 order-1 order-lg-1 d-flex align-items-center">
                    <div data-aos="zoom-out">
                        <h1><span>Financiamiento</span> para
                            empresas en Perú </h1>
                        <h2>Financiamiento de capital de trabajo a trav&eacute;s de las finanzas participativas.</h2>
                        <div class="text-center text-lg-left">

                            <a href="{{ url('prestamos') }}"
                               class="btn-get-started scrollto mr-2">
                                Préstamos
                            </a>

                            <a href="{{ url('invertir') }}"
                               class="btn-get-started scrollto ml-2">
                                Invertir
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 order-2 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
                    <div class="container-img hero-img">
                        <img src="{{ asset('galeria_imagenes/' . $configuracion->url_portada_inicio) }}" class=""
                             alt="">
                    </div>
                </div>
            </div>
        </div>

        {{--<svg class="hero-waves-3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
            </g>
        </svg>--}}

    </section>

    {{--<div id="carouselImagen" class="carousel slide mt-5" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach($carrusels as $carrusel)
                <li data-target="#carouselImagen" data-slide-to="{{ $loop->iteration }}"
                    class="{{ $loop->iteration == 1 ? 'active' : '' }}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach($carrusels as $carrusel)
                <div class="carousel-item {{ $loop->iteration == 1 ? 'active' : '' }}">
                    <img src="{{ asset('carrusel_imagenes/'. $carrusel->no_carrusel) }}"
                         class="d-block w-100 carousel-imagen">
                    <div class="carousel-caption d-none d-md-block">
                        --}}{{--<h1 class="font-weight-bold" style="color : #F4A528;">{{ $carrusel->no_cabecera_carrusel }}</h1>
                        <p>{{ $carrusel->no_detalle_carrusel }}</p>
                        @if($carrusel->no_boton_carrusel != '' and $carrusel->no_link_carrusel)
                            <div class="text-center">
                                <a href="{{ $carrusel->no_link_carrusel }}" target="_blank"
                                   class="btn btn-get-ir my-3">{{ $carrusel->no_boton_carrusel }}</a>
                            </div>
                        @endif--}}{{--
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselImagen" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon text-dark" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselImagen" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>--}}


    <main id="main">

        <section id="counts" class="counts">
            <div class="container">

                <div class="row" data-aos="fade-up">

                    <div class="col-lg-4 col-md-6">
                        <div class="count-box">
                            <i class="icofont-simple-smile"></i>
                            <span>+S/</span><span data-toggle="counter-up">200</span><span>millones</span>
                            <p>Desembolsados</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="icofont-document-folder"></i>
                            <span>+</span><span data-toggle="counter-up">126</span>
                            <p>Inversionistas</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="icofont-live-support"></i>
                            <span>+</span><span data-toggle="counter-up">2,000</span>
                            <p>Empresarios</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <section id="details" class="details">
            <div class="container">

                @foreach($productos as $producto)
                    @if($loop->iteration%2 == 0)

                        <div class="row content">

                            @if($producto->no_link_video != '')
                                <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
                                    <div class="video-box-2"
                                         style="background: url('{{ asset('productos_imagenes/'. $producto->no_producto) }}') center center no-repeat; background-size: contain;
                                                 min-height: 200px;"
                                         data-aos="fade-right">
                                        <a href="{{ $producto->no_link_video }}"
                                           class="venobox play-btn-2 mb-4"
                                           data-vbtype="video" data-autoplay="true"></a>
                                    </div>
                                    <div class="text-center">
                                        <a href="{{ $producto->no_link_producto }}"
                                           class="btn-get-ir mt-2">{{ $producto->no_boton_producto }} <span
                                                    class="icofont-long-arrow-right"></span></a>
                                    </div>
                                </div>
                            @else
                                <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
                                    <img src="{{ asset('productos_imagenes/'. $producto->no_producto) }}"
                                         class="img-fluid" alt="">
                                    <div class="text-center">
                                        <a href="{{ $producto->no_link_producto }}"
                                           class="btn-get-ir my-1">{{ $producto->no_boton_producto }} <span
                                                    class="icofont-long-arrow-right"></span></a>

                                        @if($producto->no_link_video != '')
                                            <a href="{{ $producto->no_link_video }}"
                                               class="venobox play-btn my-2 btn-get-blue"
                                               data-vbtype="video" data-autoplay="true">Ver video</a>
                                        @endif
                                    </div>
                                </div>
                            @endif


                            <div class="col-md-8 order-2 order-md-1" data-aos="fade-up">
                                <h3>{{ $producto->no_cabecera_producto }}</h3>
                                <p class="font-weight-bold">
                                    {{ $producto->no_detalle_producto }}
                                </p>
                                @php
                                    $requisitos = \App\Http\Controllers\PaginaWebController::requisitosDeProducto($producto->co_producto);
                                @endphp
                                <ul>
                                    @foreach($requisitos as $requisito)
                                        <li><i class="icofont-check"></i>{{ $requisito->de_detalle_producto }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @else
                        <div class="row content">
                            @if($producto->no_link_video != '')
                                <div class="col-md-4" data-aos="fade-right">
                                    <div class="video-box-2"
                                         style="background: url('{{ asset('productos_imagenes/'. $producto->no_producto) }}') center center no-repeat; background-size: contain;
                                                 min-height: 200px;"
                                         data-aos="fade-right">
                                        <a href="{{ $producto->no_link_video }}"
                                           class="venobox play-btn-2 mb-4"
                                           data-vbtype="video" data-autoplay="true"></a>
                                    </div>
                                    <div class="text-center">
                                        <a href="{{ $producto->no_link_producto }}"
                                           class="btn-get-ir mt-2">{{ $producto->no_boton_producto }} <span
                                                    class="icofont-long-arrow-right"></span></a>
                                    </div>
                                </div>
                            @else
                                <div class="col-md-4" data-aos="fade-right">
                                    <img src="{{ asset('productos_imagenes/'. $producto->no_producto) }}"
                                         class="img-fluid" alt="">
                                    <div class="text-center">
                                        <a href="{{ $producto->no_link_producto }}"
                                           class="btn-get-ir my-1">{{ $producto->no_boton_producto }}
                                            <span class="icofont-long-arrow-right"></span>
                                        </a>
                                        @if($producto->no_link_video != '')
                                            <a href="{{ $producto->no_link_video }}"
                                               class="venobox play-btn my-2 btn-get-blue"
                                               data-vbtype="video" data-autoplay="true">Ver video</a>
                                        @endif
                                    </div>
                                </div>
                            @endif

                            <div class="col-md-8" data-aos="fade-up">
                                <h3>{{ $producto->no_cabecera_producto }}</h3>
                                <p class="font-weight-bold">
                                    {{ $producto->no_detalle_producto }}
                                </p>
                                @php
                                    $requisitos = \App\Http\Controllers\PaginaWebController::requisitosDeProducto($producto->co_producto);
                                @endphp
                                <ul>
                                    @foreach($requisitos as $requisito)
                                        <li><i class="icofont-check"></i>{{ $requisito->de_detalle_producto }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif
                @endforeach

                @if($configuracion->link_presentacion != '')
                    <div class="row">
                        <div class="col-md-12" data-aos="fade-right">
                            <div class="embed-responsive embed-responsive-16by9">

                                <iframe src="{{ $configuracion->link_presentacion }}"
                                        class="embed-responsive-item" frameborder="0" allowfullscreen="1"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        title="YouTube video player"></iframe>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </section>

        <section id="testimonials" class="testimonials"
                 style="background: url('{{ asset('images/segundo.png') }}') no-repeat;">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Testimonios</h2>
                    <p style="color: #F4A528;">Nuestros clientes opinan</p>
                </div>

                <div class="owl-carousel testimonials-carousel" data-aos="zoom-in">

                    @foreach($testimonios as $testimonio)
                        <div class="testimonial-item">
                            <img src="{{ asset('testimonios_imagenes/'. $testimonio->no_img_testimonio )  }}"
                                 class="testimonial-img" alt="">
                            <h3>{{ $testimonio->no_testimonio }}</h3>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                {{ $testimonio->de_testimonio }}
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                <br>

                                @if($testimonio->no_link_video != '')
                                    <a href="{{ $testimonio->no_link_video }}"
                                       class="venobox play-btn mb-4"
                                       data-vbtype="video" data-autoplay="true">Click aquí para ver video de
                                        testimonio</a>
                                @endif
                            </p>
                        </div>
                    @endforeach

                </div>

            </div>
        </section>

        <section id="team" class="team section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Trabajamos</h2>
                    <p>¿Quiénes hablan de Grupo Imagen?</p>
                </div>

                <div class="row" data-aos="fade-left">


                    @foreach($opiniones as $opinion)
                        <div class="col-lg-3 col-md-6">
                            <div class="member">
                                <div class="pic">
                                    <img src="{{ asset('testimonios_imagenes/'. $opinion->no_img_testimonio )  }}"
                                         class="img-fluid"
                                         style="min-height: 126.85px !important; max-height: 126.85px" alt="">
                                    <br>
                                    <a href="{{ $opinion->no_link_video }}"
                                       target="_blank"
                                       class="btn btn-get-ir mt-3">Ver nota</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </section>

        <section id="team" class="team section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Marcas</h2>
                    <p>Nuestras principales marcas</p>
                </div>

                <div class="row text-center align-items-center" data-aos="fade-left">


                    <div class="col-6 col-md-4 col-lg-2">
                        <a href="https://prestacapital.com.pe/" target="_blank">
                            <img src="{{ asset('images/logoprestacapital.jpg') }}" class="img-logo"
                                 alt="">
                        </a>
                    </div>

                    <div class="col-6 col-md-4 col-lg-2">
                        <a href="https://ginversiones.pe/" target="_blank">
                            <img src="{{ asset('images/ginversiones.jpg') }}" class="img-logo"
                                 alt="">
                        </a>
                    </div>

                    <div class="col-6 col-md-4 col-lg-2">
                        <a href="https://www.facebook.com/agencia360creativemedia" target="_blank">
                            <img src="{{ asset('images/logo360.jpg') }}" class="img-logo"
                                 alt="">
                        </a>
                    </div>

                    <div class="col-6 col-md-4 col-lg-2">
                        <a href="https://www.facebook.com/CasaImagenn" target="_blank">
                            <img src="{{ asset('images/logocasa.jpg') }}" class="img-logo"
                                 alt="">
                        </a>
                    </div>
                </div>

            </div>
        </section>

        <section id="team" class="team section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Aliados</h2>
                    <p>Nuestros principales aliados</p>
                </div>

                <div class="row text-center align-items-center" data-aos="fade-left">

                    <div class="col-6 col-md-4 col-lg-2">
                        <a href="https://x-cambio.com/" target="_blank">
                            <img src="{{ asset('images/logo-x-cambio.png') }}" class="img-logo"
                                 alt="">
                        </a>

                    </div>

                    <div class="col-6 col-md-4 col-lg-2">
                        <a href="https://soluciones.equifax.com.pe/efx-portal-web/" target="_blank">
                            <img src="{{ asset('images/equifax.png') }}" class="img-logo"
                                 alt="">
                        </a>
                    </div>

                    <div class="col-6 col-md-4 col-lg-2">
                        <a href="https://portal.sentinelperu.com/pages/Inicio" target="_blank">
                            <img src="{{ asset('images/sentinel.png') }}" class="img-logo"
                                 alt="">
                        </a>
                    </div>

                    <div class="col-6 col-md-4 col-lg-2">
                        <a href="https://www.fintechperu.com/" target="_blank">
                            <img src="{{ asset('images/fintech4.png') }}" class="img-logo"
                                 alt="">
                        </a>
                    </div>

                    <div class="col-6 col-md-4 col-lg-2">
                        <a href="https://www.camaralima.org.pe/" target="_blank">
                            <img src="{{ asset('images/ccl.jpg') }}" class="img-logo"
                                 alt="">
                        </a>
                    </div>


                </div>

            </div>
        </section>


    </main>

@endsection