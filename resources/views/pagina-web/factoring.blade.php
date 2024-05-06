@extends('layouts.app')

@section('estilos')

    <style>
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
            background: url('{{ $configuracion->url_factoring }}') center center no-repeat;
            background-size: contain;
            min-height: 300px;
        }
    </style>


@endsection


@section('content')

    <section id="hero">

        <div class="container">
            <div class="row">
                <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                    <div data-aos="zoom-out">
                        <h1><span>Factoring</span> para tu Empresa</h1>
                        <h2>Adelanta tus facturas y obtén liquidez con la mejor tasa.</h2>
                    </div>
                </div>
                <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
                    <img src="{{ asset('images/proceso-seguro.png') }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
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
        </svg>

    </section>

    <main id="main">

        <section id="about" class="about">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch"
                         data-aos="fade-right">
                        <a href="{{ $configuracion->link_factoring }}"
                           class="venobox play-btn mb-4"
                           data-vbtype="video" data-autoplay="true"></a>
                    </div>

                    <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5"
                         data-aos="fade-left">
                        <h3>Pasos para vender tus facturas</h3>

                        @foreach($pasos as $paso)
                            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                                <div class="icon">
                                    <img src="{{ $paso->url_producto }}" class="img-fluid animated" alt="">
                                </div>
                                <h4 class="title"><a href="">0{{ $loop->iteration }}
                                        - {{ $paso->no_cabecera_producto }}</a></h4>
                                <p class="description">{{ $paso->no_detalle_producto }}</p>
                            </div>
                        @endforeach

                    </div>
                </div>

            </div>
        </section>

        <section id="about" class="about">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Beneficios</h2>
                    <p>Beneficios de factoring</p>
                </div>

                <div class="row">

                    @foreach($beneficios as $beneficio)
                        <div class="col-xl-6 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center"
                             data-aos="fade-left">


                            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                                <div class="icon">
                                    <img src="{{ $beneficio->url_producto }}" class="img-fluid animated" alt="">
                                </div>
                                <h4 class="title"><a href="">{{ $beneficio->no_cabecera_producto }}</a></h4>
                                <p class="description">{{ $beneficio->no_detalle_producto }}</p>
                            </div>

                        </div>
                    @endforeach

                </div>

            </div>
        </section>

        <section id="details" class="details">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Requisitos</h2>
                    <p>Requisitos de factoring</p>
                </div>

                <div class="row content">

                    @foreach($requisitos as $requisito)
                        <div class="col-md-6 pt-4" data-aos="fade-up">
                            <h3>{{ $requisito->no_cabecera_producto }}</h3>
                            @php
                                $detalles = \App\Http\Controllers\PaginaWebController::requisitosDeProducto($requisito->co_producto);
                            @endphp
                            <ul>
                                @foreach($detalles as $detalle)
                                    <li><i class="icofont-check"></i>{{ $detalle->de_detalle_producto }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach

                </div>


            </div>
        </section>

        <section id="faq" class="faq section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Preguntas</h2>
                    <p>¿Tienes preguntas?</p>
                </div>

                <div class="faq-list">
                    <ul>
                        @foreach($preguntas as $pregunta)
                            <li data-aos="fade-up">
                                <i class="bx bx-help-circle icon-help"></i>
                                <a data-toggle="collapse" class="{{ $loop->iteration == 1 ? 'collapse' : 'collapsed' }}"
                                   href="#faq-list-{{ $loop->iteration }}">
                                    {{ $pregunta->no_titulo_pregunta_frecuente }}
                                    <i class="bx bx-chevron-down icon-show"></i>
                                    <i class="bx bx-chevron-up icon-close"></i>
                                </a>
                                <div id="faq-list-{{ $loop->iteration }}"
                                     class="collapse {{ $loop->iteration == 1 ? 'show' : '' }}" data-parent=".faq-list">
                                    <p>{{ $pregunta->no_detalle_pregunta_frecuente }}
                                    </p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </section>


    </main><!-- End #main -->

@endsection