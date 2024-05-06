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
            background: url('{{ asset('images/invertir.jpg')  }}') center center no-repeat;
            background-size: contain;
            min-height: 300px;
        }

        #hero {
            background-attachment: fixed;
            height: auto;
        }
    </style>


@endsection


@section('content')

    <section id="hero">

        <div class="container">
            <div class="row">
                <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                    <div data-aos="zoom-out">
                        <h1>Financiamiento para empresas en <span>Perú</span></h1>
                        <h2>Otorgamos capital de trabajo para micro, pequeñas y medianas empresas.</h2>
                        <div class="text-center text-lg-left">
                            <a href="{{ url('prestamos') }}" class="btn-get-started scrollto mr-3">Préstamos</a>
                            <a href="{{ url('invertir') }}" class="btn-get-started scrollto">Invertir</a>
                        </div>
                    </div>
                </div>
                {{--<div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
                    <img src="{{ asset('img/header.jpg') }}" class="img-fluid animated" alt="">
                </div>--}}
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


        <section id="faq" class="faq section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Preguntas</h2>
                    <p>Preguntas frecuentes</p>
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

    </main>

@endsection