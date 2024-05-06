@extends('layouts.app')

@section('estilos')

    <style>
        .about .video-box {
            background: url('{{ asset('galeria_imagenes/' . $configuracion->url_invertir) }}') center center no-repeat;
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
                        <h1><span>Financia</span> a empresarios</h1>
                        <h2>Convierte solicitudes de crédito de personas con necesidades de financiación en
                            oportunidades de financiación a través de las finanzas colaborativas.</h2>
                        <div class="text-center text-lg-left">
                            <a href="https://sistema.grupoimagensac.com.pe/invertir?t=1"
                               target="_blank"
                               class="btn-get-started">Invierte con nosotros aquí
                                <span
                                        class="icofont-long-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 order-2 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
                    <div class="container-img hero-img">
                        <img src="{{ asset('galeria_imagenes/' . $configuracion->url_portada_invertir) }}" class=""
                             alt="">
                    </div>
                </div>
            </div>
        </div>

        <svg class="hero-waves-3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
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

        <section id="pricing" class="pricing">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Simulador</h2>
                    <p>Prueba nuestro simulador financiero</p>
                </div>


                <div class="box text-center" id="simulador">
                    <span class="advanced">Nuevo</span>
                    <h3 class="font-weight-bold" id="texto-cabecera">COMPLETA LOS DATOS</h3>

                    <div class="row" id="simulador">
                        <div class="form-group text-center col-md-12 col-lg-4 col-sm-12">
                            <label for="" id="span-moneda" class="font-weight-bold text-center text-amarillo-imagen"
                                   style="">Moneda</label>
                            <select name="moneda" id="moneda" class="form-control text-center" autofocus
                                    onchange="validarMoneda3(this.value)">
                                <option value="">Seleccione moneda</option>
                                @foreach($monedas as $moneda)
                                    <option data-simbolo="{{ $moneda->nc_tipo_moneda }}"
                                            data-monto-minimo="{{ number_format($moneda->nu_monto_minimo, 0, '', '') }}"
                                            data-monto-minimo-format="{{ number_format($moneda->nu_monto_minimo, 2 ,'.', ',') }}"
                                            data-texto="{{ $moneda->no_tipo_moneda }}"
                                            value="{{ $moneda->co_tipo_moneda }}">{{ $moneda->no_tipo_moneda }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group text-center col-md-12 col-lg-4 col-sm-12">
                            <label for="" id="span-quiero" class="font-weight-bold text-center text-amarillo-imagen">Quiero</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend c-pointer mr-1">
                                <span onclick="restarMonto();"
                                      class="input-group-text bg-imagen-azul text-white icofont-minus-circle rounded-circle"></span>
                                </div>
                                <input type="text" class="form-control" id="texto-monto" name="texto-monto" readonly
                                       disabled=""
                                       onfocus="textoMonto()" onblur="textoFormateado();"
                                       onkeypress="return soloNumerosYPunto(event);"
                                       onkeyup="actualizarMonto();">
                                <input type="hidden" id="monto" name="monto" value="20000">
                                <div class="input-group-append c-pointer ml-1">
                                <span onclick="aumentarMonto();"
                                      class="input-group-text bg-imagen-azul text-white icofont-plus-circle rounded-circle"></span>
                                </div>
                            </div>
                            <small class="font-weight-bold" id="descripcion-monto"></small>
                        </div>


                        <div class="form-group text-center col-md-12 col-lg-4 col-sm-12">
                            <label for="" id="span-plazo" class="font-weight-bold text-center text-amarillo-imagen ">En
                                un plazo</label>
                            <select id="plazo" name="plazo" class="form-control" onchange="simularInvertir(this.value);"
                                    readonly disabled="">
                                <option value="">Seleccione plazo de pago</option>
                                <option value="12">1 año</option>
                                <option value="24">2 años</option>
                                <option value="36">3 años</option>
                            </select>
                        </div>

                    </div>


                </div>

                <div class="row">

                    <div class="col-lg-12 col-md-12" id="simulador-completado" style="display: none;">
                        <div class="box" data-aos="zoom-in" data-aos-delay="400">
                            <span class="advanced">Nuevo</span>
                            <h3>GANANCIA CALCULADA CALCULADA CON LOS DATOS INGRESADOS</h3>
                            <h4 id="monto-cuota"></h4>
                            <ul>
                                <li><strong>Tasa :</strong> desde {{ $configuracion->nu_tasa_inversion }}%</li>
                                <li><strong>Moneda :</strong> <span id="moneda-ultimo"></span></li>
                                <li><strong>Monto :</strong> <span id="monto-ultimo"></span></li>
                                <li><strong>Plazo :</strong> <span id="tipo-plazo-ultimo"></span></li>
                                <li><strong>Cuotas :</strong> <span id="cuota-ultimo"></span></li>
                            </ul>
                            <p class="font-weight-bold">La tasa dependerá del tipo de evaluación</p>
                            <div class="btn-wrap">
                                <button class="btn btn-get-ir my-2" type="button"
                                        onclick="reestablecerSimulador()"> Probar de nuevo el simulador
                                </button>
                                <a href="https://sistema.grupoimagensac.com.pe/invertir?t=1" target="_blank"
                                   class="btn btn-get-ir my-2">Completa tus datos aquí</a>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </section>


        <section id="about" class="about">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch"
                         data-aos="fade-right">
                        <a href="{{ $configuracion->link_invertir }}"
                           class="venobox play-btn mb-4"
                           data-vbtype="video" data-autoplay="true"></a>
                    </div>

                    <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5"
                         data-aos="fade-left">
                        <h3>Pasos para invertir</h3>

                        @foreach($pasos as $paso)

                            @php
                                $detalles = \App\Http\Controllers\PaginaWebController::requisitosDeProducto($paso->co_producto);
                            @endphp
                            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                                <div class="icon">
                                    <img src="{{ asset('galeria_imagenes/' . $paso->no_producto) }}"
                                         class="img-fluid animated" alt="">
                                </div>
                                <h4 class="title">
                                    <a href="#">{{ $paso->no_cabecera_producto }}</a>
                                </h4>

                                @foreach($detalles as $detalle)
                                    <p class="description">
                                        <i class="icofont-check text-warning"></i>{{ $detalle->de_detalle_producto }}
                                    </p>
                                @endforeach
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
                    <p>Beneficios de invertir en las finanzas colaborativas</p>
                </div>

                <div class="row">


                    @foreach($beneficios as $beneficio)
                        <div class="col-xl-6 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center"
                             data-aos="fade-left">


                            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                                <div class="icon">
                                    <img src="{{ asset('galeria_imagenes/' . $beneficio->no_producto) }}"
                                         class="img-fluid animated" alt="">
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
                    <h2>Características</h2>
                    <p>Características de inversión</p>
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

        <section id="hero" style="padding: 10px 0 0 0;">

            <div class="container">
                <div class="row text-center justify-content-center">
                    <div class="d-flex align-items-center">
                        <div data-aos="zoom-out">
                            <a href="https://sistema.grupoimagensac.com.pe/invertir?t=1" target="_blank"
                               class="btn-get-ir">Click aquí para invertir con nosotros
                                <span
                                        class="icofont-long-arrow-right"></span></a>
                            <img src="{{ asset('images/personaje.png') }}"
                                 style="z-index:12;width: 100px; height: 300px;" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <svg class="hero-waves-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
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