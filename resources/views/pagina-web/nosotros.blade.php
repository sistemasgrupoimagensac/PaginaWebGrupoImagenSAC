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
    </style>


@endsection


@section('content')


    <section id="details" class="details mt-5 bg-light">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <p class="text-center">Nosotros</p>
            </div>

            <div class="row content">
                <div class="col-md-12 pt-4 text-justify" data-aos="fade-up">
                    <h5>Los socios fundadores desde hace más de 10 años cuentan con amplia experiencia en el campo
                        financiero de bienes y raíces. Por lo que, desde el año 2014 se constituyó la empresa peruana
                        GRUPO INMOBILIARIO IMAGEN S.A.C., con la finalidad de contribuir al progreso económico del país
                        apoyando a pequeños y medianos empresarios con mente emprendedora.


                    </h5>
                    <h5>
                        Grupo imagen cuenta con asesores financieros comerciales, que se encargarán de darte la mejor
                        propuesta de acuerdo a tu necesidad; además, contamos con aliados estratégicos que nos dan el
                        soporte de la valorización de los bienes inmuebles, con el propósito de rentabilizar al máximo
                        tu propiedad. Nuestra empresa te da la confianza y seguridad para que todas las oportunidades
                        estén al alcance de tus manos.
                    </h5>
                </div>

            </div>


        </div>
    </section>

    <section id="team" class="team">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Equipo</h2>
                <p>Nuestro equipo de trabajo</p>
            </div>

            <div class="row" data-aos="fade-left">

                @foreach($colaboradores as $colaborador)
                    <div class="col-lg-4 col-md-6">
                        <div class="member" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pic"><img
                                        src="{{ asset('colaboradores_imagenes/' . $colaborador->no_colaborador) }}"
                                        class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>{{ $colaborador->no_nombre_colaborador }}</h4>
                                <span>{{ $colaborador->no_cargo_colaborador }}</span>
                                <div class="social">
                                    @if($colaborador->no_link_colaborador != '')
                                        <a href="{{ $colaborador->no_link_colaborador }}" target="_blank"><i
                                                    class="icofont-linkedin"></i></a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <div class="section-title mt-5" data-aos="fade-up">
                <h2>Equipo</h2>
                <p>Nuestro equipo de trabajo</p>
            </div>

            <div class="row" data-aos="fade-left">

                @foreach($colaboradores as $colaborador)
                    <div class="col-lg-4 col-md-6">
                        <div class="member" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pic"><img
                                        src="{{ asset('colaboradores_imagenes/' . $colaborador->no_colaborador) }}"
                                        class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>{{ $colaborador->no_nombre_colaborador }}</h4>
                                <span>{{ $colaborador->no_cargo_colaborador }}</span>
                                <div class="social">
                                    @if($colaborador->no_link_colaborador != '')
                                        <a href="{{ $colaborador->no_link_colaborador }}" target="_blank"><i
                                                    class="icofont-linkedin"></i></a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section>

    <section id="details" class="details bg-imagen-azul">
        <div class="container">

            <div class="row content">
                <div class="col-md-6 pt-4" data-aos="fade-up">
                    <div class="text-center mb-2">
                        <img src="{{ asset('images/mision.png') }}" style="width: 60px; height: 60px;" alt="">
                    </div>
                    <h3 class="text-center text-amarillo-imagen">Misión</h3>
                    <p class="text-justify text-white">Contribuir a solucionar los problemas de liquidez de las personas
                        emprendedoras con ganas de
                        sacar adelante al Perú, otorgándole un crédito con Garantía Hipotecaria de manera rápida,
                        oportuna y segura.</p>
                </div>
                <div class="col-md-6 pt-4" data-aos="fade-up">
                    <div class="text-center mb-2">
                        <img src="{{ asset('images/vision.png') }}" style="width: 60px; height: 60px;" alt="">
                    </div>
                    <h3 class="text-center text-amarillo-imagen">Visión</h3>
                    <p class="text-justify text-white">Ser la empresa líder en el mercado de créditos con garantía
                        hipotecaria en
                        Banca paralela, en
                        expansión progresiva a nuevas plazas, a través de una red de oficinas interconectadas, con
                        procedimientos óptimos.</p>
                </div>
            </div>


        </div>
    </section>

    <section id="details" class="details bg-light">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <p class="text-center">Nuestros valores</p>
            </div>

            <div class="row content">
                <div class="col-md-6 pt-4" data-aos="fade-up">
                    <div class="text-center mb-2">
                        <img src="{{ asset('images/atencion.png') }}" style="width: 60px; height: 60px;" alt="">
                    </div>
                    <h3 class="text-center">Orientación al cliente</h3>
                    <p class="text-justify">Uno de nuestros objetivos estratégicos, es trabajar de forma profesional y
                        constante para lograr la plena satisfacción del cliente. Para ello, enfatizamos una relación de
                        confianza y transparencia, donde la profesionalidad y cercanía en el servicio facilitado al
                        cliente, es parte de la cultura de la compañía.</p>
                </div>
                <div class="col-md-6 pt-4" data-aos="fade-up">
                    <div class="text-center mb-2">
                        <img src="{{ asset('images/innovacion.png') }}" style="width: 60px; height: 60px;" alt="">
                    </div>
                    <h3 class="text-center">Innovación</h3>
                    <p class="text-justify">GI fomenta, como clave de éxito organizacional, la continua actualización de
                        conocimientos de su personal, estableciendo el apoyo necesario para configurar un espacio de
                        trabajo dónde se potencie el espíritu de emisión y recepción de propuestas de mejora
                        innovadoras. Toda innovación, mejora e investigación abierta, deberá de ser escrupulosa con el
                        cumplimiento de las distintas normativas existentes.</p>
                </div>
                <div class="col-md-6 pt-4" data-aos="fade-up">
                    <div class="text-center mb-2">
                        <img src="{{ asset('images/trabajo.png') }}" style="width: 60px; height: 60px;" alt="">
                    </div>
                    <h3 class="text-center">Trabajo en equipo</h3>
                    <p class="text-justify">GI facilita e incentiva la colaboración y el trabajo en equipo de las
                        personas que forman parte de la compañía. Considera que la cooperación, el trabajo en equipo y
                        la búsqueda de sinergias son requisitos imprescindibles para lograr la misión empresarial y para
                        aprovechar al máximo las capacidades de su capital humano, los recursos y la diversidad de
                        conocimientos.</p>
                </div>
                <div class="col-md-6 pt-4" data-aos="fade-up">
                    <div class="text-center mb-2">
                        <img src="{{ asset('images/compromiso.png') }}" style="width: 60px; height: 60px;" alt="">
                    </div>
                    <h3 class="text-center">Compromiso</h3>
                    <p class="text-justify">GI, es sinónimo de honestidad, nosotros hacemos nuestros los objetivos de
                        los clientes; y nos enfocamos en darlo todo para conseguirlo.</p>
                </div>
            </div>


        </div>
    </section>

@endsection