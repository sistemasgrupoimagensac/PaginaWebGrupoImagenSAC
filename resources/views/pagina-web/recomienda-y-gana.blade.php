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
                        <h1>Recomienda a Grupo Imagen y podrás ganar <span>S/200</span></h1>
                    </div>
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

    <section id="contact" class="contact ">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Contacto</h2>
                <p>Datos de tu amigo o familiar</p>
            </div>

            <div class="row">

                <div class="col-lg-12" data-aos="fade-left" data-aos-delay="200">
                    <p class="font-weight-bold">Si tienes un amigo o familiar que necesite un préstamo desde
                        S/50,000 para potenciar su negocio, déjanos sus datos y haz que obtenga una de las mejores
                        tasas del mercado y asesoría personalizada.</p>
                    <form action="" class="">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="" class="font-weight-bold"></label>
                                <input type="text" class="form-control" autofocus placeholder="Nombres">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="" class="font-weight-bold"></label>
                                <input type="text" class="form-control" placeholder="Apellidos">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="" class="font-weight-bold"></label>
                                <input type="text" class="form-control" placeholder="Teléfono de contacto">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="" class="font-weight-bold"></label>
                                <input type="text" class="form-control" placeholder="Teléfono adicional">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="" class="font-weight-bold"></label>
                                <input type="text" class="form-control" placeholder="Correo electrónico">
                            </div>
                        </div>
                        <div class="text-center">
                            <input type="submit" class="btn btn-get-ir" value="Enviar mensaje">
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </section>

@endsection