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
                        <h1><span>GANA HASTAS/6,000</span></h1>
                        <h2>Por referir 6 clientes que hayan concretado su préstamo</h2>
                        <h1><span>CONTACTANOS</span></h1>
                        <h2><i class="icofont-phone actual"></i> 471-2222 / 960-621-213 / 997-489-557</h2>
                        <h2><i class="icofont-whatsapp actual"></i> 914 105 264</h2>
                    </div>
                </div>
                <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
                    <img src="{{ asset('images/liquidez.png') }}" class="img-fluid animated" alt="">
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
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2></h2>
                    <p>¿Cómo funciona?</p>
                </div>

                <div class="row">
                    <div class="col-xl-6 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center"
                         data-aos="fade-left">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon">
                                <img src="{{ asset('images/operadora.png') }}" class="img-fluid animated" alt="">
                            </div>
                            <h4 class="title"><a href="">01 - Registro</a></h4>
                            <p class="description">Comunícate con nosotros y regístrate para poder programar una
                                reunión.</p>
                        </div>

                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                            <div class="icon">
                                <img src="{{ asset('images/factura.png') }}" class="img-fluid animated" alt="">
                            </div>
                            <h4 class="title"><a href="">02 - Capacitación</a></h4>
                            <p class="description">Capacítate como Asesor Grupo Imagen en nuestras oficinas.</p>
                        </div>

                    </div>
                    <div class="col-xl-6 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center"
                         data-aos="fade-left">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon">
                                <img src="{{ asset('images/bajo-riesgo.png') }}" class="img-fluid animated" alt="">
                            </div>
                            <h4 class="title"><a href="">03 - Empieza</a></h4>
                            <p class="description">Refiere clientes y acompáñalos durante el proceso de préstamo.</p>
                        </div>

                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                            <div class="icon">
                                <img src="{{ asset('images/liquidez.png') }}" class="img-fluid animated" alt="">
                            </div>
                            <h4 class="title"><a href="">04 - Pago</a></h4>
                            <p class="description">Cuando tu cliente haya recibido su préstamo, recibiras el porcentaje
                                acordado.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section id="details" class="details">
            <div class="container">

                <div class="row content">
                    <div class="col-md-6 pt-4" data-aos="fade-up">
                        <h3>Beneficios</h3>
                        <ul>
                            <li><i class="icofont-check"></i> <strong>Flexibilidad:</strong> Puedes trabajar y realizar
                                otras actividades
                                mientras que nos refieres clientes.
                            </li>
                            <li><i class="icofont-check"></i> <strong>Capacitación:</strong> Te brindamos herramientas y
                                capacitación
                                para que puedas asesorar mejor a tus clientes.
                            </li>
                            <li><i class="icofont-check"></i> <strong>Pagos puntuales:</strong> Liquidamos mensualmente
                                la comisión que
                                te corresponde sin retrasos en los pagos.
                            </li>
                            <li><i class="icofont-check"></i> <strong>Seriedad:</strong> Firmarás un contrato con el
                                acuerdo del pago
                                acordado.
                            </li>
                            <li><i class="icofont-check"></i> <strong>Producto atractivo en el mercado:</strong> Para
                                tus clientes
                                contamos con las mejores tasas del mercado y tiempos cortos de desembolso.
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 pt-4" data-aos="fade-up">
                        <h3>Puedes ser un asesor</h3>
                        <p>Si te desarrollas en alguno de estos rubros</p>
                        <ul>
                            <li><i class="icofont-check"></i> <strong>Constructoras e inmobiliarias:</strong> ¿Tus
                                clientes no tienen el
                                financiamiento para realizar los proyectos que te piden? A través de Gruó podrás
                                brindarles una opción de financiamiento flexible.
                            </li>
                            <li><i class="icofont-check"></i> <strong>Agentes inmobiliarios:</strong> Ayuda a tus
                                clientes a financiar sus proyectos.
                            </li>
                            <li><i class="icofont-check"></i> <strong>Ex funcionarios de bancos:</strong> ¿Cuentas con
                                una cartera de
                                clientes que te solicitan financiamiento o un capital adicional? Esta también es una
                                opción para ti.
                            </li>
                            <li><i class="icofont-check"></i> <strong>Broker de seguros:</strong> Realiza consolidación
                                de las deudas o
                                brindarles una opción de financiamiento a tus clientes.
                            </li>
                        </ul>
                    </div>
                </div>


            </div>
        </section>

    </main>

@endsection