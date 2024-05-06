<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Landing Inversión</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="author" content=""/>

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content=""/>
    <meta name="twitter:image" content=""/>
    <meta name="twitter:url" content=""/>
    <meta name="twitter:card" content=""/>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">

    <!-- Animate.css')}} -->
    <link rel="stylesheet" href="{{ asset('landing_invertir/css/animate.css?v=' .rand()) }}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{ asset('landing_invertir/css/icomoon.css?v=' .rand()) }}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css?v=' .rand()) }}">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{ asset('landing_invertir/css/flexslider.css?v=' .rand()) }}">
    <!-- Flaticons  -->
    <link rel="stylesheet" href="{{ asset('landing_invertir/fonts/flaticon/font/flaticon.css?v=' .rand()) }}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('landing_invertir/css/owl.carousel.min.css?v=' .rand()) }}">
    <link rel="stylesheet" href="{{ asset('landing_invertir/css/owl.theme.default.min.css?v=' .rand()) }}">
    <!-- Theme style  -->
    <link rel="stylesheet" href="{{ asset('landing_invertir/css/style.css?v=' .rand()) }}">

    <!-- Modernizr JS -->
    <script src="{{ asset('landing_invertir/js/modernizr-2.6.2.min.js?v=' .rand()) }}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="{{ asset('landing_invertir/js/respond.min.js?v=' .rand()) }}"></script>
    <![endif]-->

</head>
<body>
<div id="colorlib-page">
    <div class="container-wrap">
        <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar"
           aria-expanded="false" aria-controls="navbar"><i></i></a>
        <aside id="colorlib-aside" role="complementary" class="js-fullheight">

            <div class="row bg-white">
                <div class="col-md-12 d-flex flex-wrap align-items-center justify-content-center p-2 mt-3">
                    <img src="{{ asset('landing_invertir/images/ginversiones2.png') }}"
                         class="img-responsive"
                         style="max-width: 75% !important; max-height: 100px;" alt="">
                    <strong class="px-3 text-center mt-2" style="font-family: Arial; line-height: 1.3;">
                        Una forma inteligente de ayudar a crecer a empresas
                    </strong>
                </div>
            </div>
            <br>
            <nav id="colorlib-main-menu" role="navigation" class="navbar">
                <div id="navbar" class="collapse">
                    <ul>
                        <li class="active"><a class="h5" href="#" data-nav-section="home">Inicio</a></li>
                        <li><a class="h5" href="#" data-nav-section="services">Pasos</a></li>
                        <li><a class="h5" href="#" data-nav-section="skills">¿Qué debes saber?</a></li>
                        <li><a class="h5" href="#" data-nav-section="contact">Contacto</a></li>
                        <li><a class="h5" href="#" data-nav-section="work">Galería</a></li>
                    </ul>
                </div>
            </nav>

            <div class="colorlib-footer">
                <ul>
                    <li>
                        <a href="https://www.facebook.com/GrupoImagenInversiones" target="_blank">
                            <i class="icon-facebook2"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/GINVERSIONES1" target="_blank">
                            <i class="icon-twitter2"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/company/grupoinmobiliario-imagen-sac" target="_blank">
                            <i class="icon-linkedin2"></i>
                        </a>
                    </li>
                </ul>
                <hr style="border-top: 1px solid #F4A528;">
                <p class="text-white h5">Asociados a:</p>
                <img src="{{ asset('images/fintech4.png') }}" alt="" style="width: 70%;" class="mb-3 bg-white">
                <img src="{{ asset('images/ccl.jpg') }}" alt="" style="width: 70%; ">

            </div>

        </aside>

        <div id="colorlib-main">

            <section id="" data-section="home">
                <div class="row">

                    <div class="col-md-12">
                        <div class="jumbotron bg-cover text-white"
                             style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.6) 0%,rgba(0,0,0,0.6) 100%), url('{{ asset('landing_invertir/images/fondo-landing.jpeg') }}')">
                            <div class="container">
                                <div class="row text-white">
                                    <div class="col-md-12">
                                        <h1 class="text-white">
                                            Financia a empresarios a través de las finanzas
                                            participativas
                                        </h1>
                                    </div>
                                    <div class="col-md-6">
                                        <span class="h4">🚨 Somos Ginversiones, una forma inteligente de ayudar a crecer empresas</span>
                                        <div class="embed-responsive embed-responsive-16by9">

                                            <iframe src="https://player.vimeo.com/video/549573550?autoplay=0&title=0&sidedock=0&byline=0"
                                                    class="embed-responsive-item" frameborder="0"
                                                    allowfullscreen="1"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    title="YouTube video player"></iframe>
                                        </div>

                                    </div>
                                    <div class="col-md-6" id="navbar-button">
                                        <span>Convierte solicitudes de créditos de personas con necesidades de financiación en oportunidades de inversión</span><br>
                                        <span>
                                                            ¡Obtén desde 1.6% hasta 3.0%  de rendimiento estimado mensual prestándoles dinero a empresarios a través de las finanzas colaborativas!
                                                        </span><br><br>
                                        <span><strong>Solo necesitas 3 simples requisitos:</strong></span>
                                        <br>
                                        <span>1.- Ser residente legal en este país</span> <br>
                                        <span>2.- Ser mayor de 25 años de edad</span> <br>
                                        <span>3.- Tener una cuenta bancaria de una entidad supervisada por la SBS</span>
                                        <br><br>
                                        <a href="#" class="btn btn-warning text-dark btn-block btn-scroll" style="font: bold 100% sans-serif;"
                                           data-nav-section="services">Quiero saber más
                                            <i class="icon-arrow-down3 fa-lg"></i></a>
                                        <a href="#"
                                           class="btn btn-warning text-dark font-weight-bold btn-block btn-scroll" style="font: bold 100% sans-serif;"
                                           data-nav-section="contact">Contáctanos
                                            <i class="icon-arrow-down3 fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </section>


            <section class="colorlib-services" data-section="services">
                <div class="colorlib-narrow-content">
                    <div class="row">
                        <div class="col-md-6 bg-light" style="border: 10px solid #fff !important;">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 d-flex flex-wrap align-items-center justify-content-center p-2">
                                    <img src="{{ asset('landing_invertir/images/paso1.jpg') }}"
                                         class="img-responsive"
                                         style="max-width: 75% !important; max-height: 100px;" alt="">
                                </div>
                                <div class="col-md-9 col-sm-9">
                                    <span class="h3 font-weight-bold">Paso 1</span><br>
                                    <span>Ginversiones, selecciona a empresarios que se registran en nuestra web:
                                                www.grupoimagensac.com.pe, que demuestren capacidad adquisitiva para
                                                devolver el capital financiado por los inversores quienes han sido
                                                evaluados por nuestros analistas financieros.</span>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6 bg-light" style="border: 10px solid #fff !important;">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 d-flex flex-wrap align-items-center justify-content-center p-2">
                                    <img src="{{ asset('landing_invertir/images/paso2.jpg') }}"
                                         class="img-responsive"
                                         style="max-width: 75% !important; max-height: 100px;" alt="">
                                </div>
                                <div class="col-md-9 col-sm-9">
                                    <span class="h3 font-weight-bold">Paso 2</span><br>
                                    <span>Ginversiones, cuenta con expertos legales que recaban, constatan y verifican la idoneidad de los documentos de la propiedad dada en garantía hipotecaria por lo empresarios en virtud al préstamo otorgado por los inversores.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 bg-light" style="border: 10px solid #fff !important;">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 d-flex flex-wrap align-items-center justify-content-center p-2">
                                    <img src="{{ asset('landing_invertir/images/paso3.jpg') }}"
                                         class="img-responsive"
                                         style="max-width: 75% !important; max-height: 100px;" alt="">
                                </div>
                                <div class="col-md-9 col-sm-9">
                                    <span class="h3 font-weight-bold">Paso 3</span><br>
                                    <span>Ginversiones, conecta a los empresarios quienes tienes necesidades de financiación con los inversores convirtiéndolos en oportunidades de inversión, a través de contratos de mutuos con garantía hipotecaria y fideicomiso.</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 bg-light" style="border: 10px solid #fff !important;">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 d-flex flex-wrap align-items-center justify-content-center p-2">
                                    <img src="{{ asset('landing_invertir/images/paso4.jpg') }}"
                                         class="img-responsive"
                                         style="max-width: 75% !important; max-height: 100px;" alt="">
                                </div>
                                <div class="col-md-9 col-sm-9">
                                    <span class="h3 font-weight-bold">Paso 4</span><br>
                                    <span>Ginversiones se encarga de todo el trámite notarial y registral donde se llevará a cabo la formalización de los contratos de mutuo con garantía hipotecaria y/o fideicomiso suscrito entre el empresario y el inversor.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="" data-section="skills">
                <div class="colorlib-narrow-content">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-4 my-2 text-center">
                            <div class="d-flex flex-wrap align-items-center justify-content-center">
                                <div class="card-flipper effect__hover c-pointer" id="card-1" data-id="1"
                                     style="max-width: 400px;" onclick="verCartilla(1);">
                                    <div class="card__front">
                                        <div class="card-01" style="width: 100%">
                                            <div class="profile-box-01">
                                                <img class="card-img-top"
                                                     src="{{ asset('landing_invertir/images/intermediacion.jpg') }}"
                                                     style="height: 300px;"
                                                     alt="Card image cap">
                                            </div>
                                            <div class="card-body text-center"
                                                 style="background-color: #23326D; padding: 0;">
                                                <span class="badge-box"><i class="fa fa-check"></i></span>
                                                <div class="p-3 my-2 bg-white">
                                                    <h4 class="card-title p-1 my-1">No realizamos intermediación
                                                        financiera</h4>
                                                    <button class="btn btn-warning">Ver más</button>
                                                </div>

                                                <div class="text-center" style="background-color: #23326D;">
                                                    <img src="{{ asset('landing_invertir/images/bajo-riesgo.png') }}"
                                                         class="" style="max-width: 30% !important;" alt="">
                                                    <h3 class="text-white">Bajo riesgo</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card__back">
                                        <div class="card card-01">
                                            <div class="card-body text-center">
                                                <small class="card-text">Ginversiones, conecta a personas con
                                                    necesidades de
                                                    financiación (deficitario) con la persona quien tiene los fondos
                                                    para
                                                    cubrir dicha necesidad (superavitario) a través de las finanzas
                                                    colaborativas, basado en el préstamo entre personas. Este sistema
                                                    por el
                                                    cual las personas se prestan entre ellas no implica intermediación
                                                    financiera tal como indica la ley N°26702, ya que Ginversiones no
                                                    capta
                                                    dinero de los prestamistas ni lo hace suyo ni decide qué hacer con
                                                    él.
                                                    Ginversiones, presente perfiles de empresarios óptimos para su
                                                    financiación a los inversionistas, quienes por su propia voluntad
                                                    aceptan y deciden prestar. El servicio que brinda Ginversiones no se
                                                    encuentra regulado ni supervisado por la SBS, ya que los
                                                    inversionistas
                                                    como tú, son quienes evalúan cómo y en dónde invertir su dinero en
                                                    solicitudes de crédito presentadas con la información necesaria para
                                                    una
                                                    toma de decisión adecuada. Ginversiones, no pertenece ni forma parte
                                                    del
                                                    sistema financiero, además no se dedica al giro de negocio propio de
                                                    las
                                                    empresas del sistema financiero; por lo que, no capta, ni recibe
                                                    dinero
                                                    de terceros, bajo ninguna modalidad contractual, según la ley
                                                    N°26702 en
                                                    su artículo 11° acápite 1).
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-4 my-2 text-center">
                            <div class="d-flex flex-wrap align-items-center justify-content-center">
                                <div class="card-flipper effect__hover c-pointer" id="card-2" data-id="1"
                                     style="max-width: 400px;" onclick="verCartilla(2);">
                                    <div class="card__front">
                                        <div class="card-01 " style="width: 100%">
                                            <div class="profile-box-01">
                                                <img class="card-img-top"
                                                     src="{{ asset('landing_invertir/images/rendimiento.jpg') }}"
                                                     style="height: 300px;"
                                                     alt="Card image cap">
                                            </div>
                                            <div class="card-body text-center"
                                                 style="background-color: #23326D; padding: 0;">
                                                <span class="badge-box"><i class="fa fa-check"></i></span>
                                                <div class="p-3 my-2 bg-white">
                                                    <h4 class="card-title p-1 my-1">Tasa de rendimiento de los
                                                        préstamos</h4>
                                                    <button class="btn btn-warning">Ver más</button>
                                                </div>
                                                <div class="text-center" style="background-color: #23326D;">
                                                    <img src="{{ asset('landing_invertir/images/seguridad.png') }}"
                                                         class=""
                                                         style="max-width: 30% !important;" alt="">
                                                    <h3 class="text-white">Seguridad alta</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card__back">
                                        <div class="card card-01">
                                            <div class="card-body text-center">
                                                <small class="card-text">Ginversiones, atiende solicitudes de créditos
                                                    de
                                                    empresarios que requieran capital de trabajo, que son presentados a
                                                    los
                                                    inversores, quienes serán los que decidan a que empresario prestar;
                                                    siendo el plazo de los préstamos desde 06 meses hasta 60 meses para
                                                    pagar, teniendo una rentabilidad promedio desde 1.6% hasta 3%
                                                    mensual,
                                                    siendo esta tasa menor a la fijada por las disposiciones del banco
                                                    central de reserva del Perú, tomadas según Circular N°
                                                    0008-2021-BCRP en
                                                    su Título I, Sub. -Título A Literal A del Numeral 3, de fecha 28 de
                                                    abril 2021. Se tiene entendido que el empresario seleccionado pagará
                                                    las
                                                    cuotas pactadas en el contrato de mutuo con garantía hipotecaria en
                                                    el
                                                    número de cuenta bancaria del inversor prestamista, cada cuota
                                                    comprende
                                                    el interés que produce el saldo capital adeudado más la amortización
                                                    correspondiente a la tasa efectiva mensual pactada las que se
                                                    encuentran
                                                    establecidas en el contrato del préstamo.
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-4 my-2 text-center">
                            <div class="d-flex flex-wrap align-items-center justify-content-center">
                                <div class="card-flipper effect__hover c-pointer" id="card-3" data-id="1"
                                     style="max-width: 400px;" onclick="verCartilla(3);">
                                    <div class="card__front">
                                        <div class="card-01 " style="width: 100%">
                                            <div class="profile-box-01">
                                                <img class="card-img-top"
                                                     src="{{ asset('landing_invertir/images/seguridad.jpg') }}"
                                                     style="height: 300px;"
                                                     alt="Card image cap">
                                            </div>
                                            <div class="card-body text-center"
                                                 style="background-color: #23326D; padding: 0;">
                                                <span class="badge-box"><i class="fa fa-check"></i></span>
                                                <div class="p-3 my-2 bg-white">
                                                    <h4 class="card-title p-1 my-1">¿Cómo protegemos tu dinero prestado
                                                        al
                                                        empresario?</h4>
                                                    <button class="btn btn-warning">Ver más</button>
                                                </div>
                                                <div class="text-center" style="background-color: #23326D;">
                                                    <img src="{{ asset('landing_invertir/images/rentabilidad.png') }}"
                                                         class=""
                                                         style="max-width: 30% !important;" alt="">
                                                    <h3 class="text-white">Rentabilidad alta</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card__back">
                                        <div class="card card-01">
                                            <div class="card-body text-center">
                                                <small class="card-text">Ginversiones, a través del análisis crediticio
                                                    con
                                                    el
                                                    reporte de Equifax y Sentinel Infocorp, solo admite a empresarios
                                                    que
                                                    califiquen para el cumplimiento de los pagos del préstamo.
                                                    Ginversiones,
                                                    evaluará y calificará la garantía hipotecaria ofrecida por el
                                                    empresario
                                                    en virtud al préstamo solicitado. Dicha garantía correrá inscrito a
                                                    favor del inversionista en el Registros de Propiedad de Inmueble de
                                                    los
                                                    Registros Públicos de Lima. Ginversiones, después de efectivizarse
                                                    el
                                                    préstamo, a través de su área de cobranza monitoreará el fiel
                                                    cumplimiento de los pagos de los empresarios. Ginversiones, cuenta
                                                    con
                                                    expertos legales del Estudio Bustamante & Romero en el supuesto caso
                                                    que
                                                    se tenga que ejecutar la garantía hipotecaria para recuperar el
                                                    capital
                                                    prestado, intereses compensatorios y moratorios.
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="colorlib-contact" data-section="contact">
                <div class="colorlib-narrow-content">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="colorlib-heading">Completa tus datos aquí y nos comunicaremos contigo a la
                                brevedad</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 d-flex flex-wrap align-items-center justify-content-center">

                            <img src="{{ asset('images/personaje.png') }}" class="img-responsive" style="height: 40vh;"
                                 alt="">
                        </div>
                        <div class="col-md-9 bg-grupoimagen p-3"
                             data-animate-effect="fadeInRight">
                            <form class="p-2" action="{{ url('guardar-landing-invertir') }}" method="post">
                                <div class="form-group">
                                    <select name="documento" id="documento" class="form-control">
                                        <option value="">SELECCIONE DOCUMENTO DE IDENTIDAD</option>
                                        <option value="1">DOCUMENTO DE IDENTIDAD</option>
                                        <option value="2">CARNET DE EXTRANJERÍA</option>
                                        <option value="4">PASAPORTE</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="numero" id="numero"
                                           onkeyup="buscarPersona();"
                                           onkeypress="return soloNumeros(event);"
                                           placeholder="Número de documento">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nombres" id="nombres"
                                           placeholder="Nombres completos">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="paterno" id="paterno"
                                           placeholder="Apellido Paterno">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="materno" id="materno"
                                           placeholder="Apellido Materno">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="correo" id="correo"
                                           placeholder="Correo">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="celular" id="celular"
                                           placeholder="Celular">
                                </div>
                                <div class="form-group">
                                    <input type="submit"
                                           class="btn btn-warning btn-send-message btn-block btn-lg"
                                           value="Click aquí para registrarme">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>


            <section data-section="work">

                <div class="row">
                    <div class="col-md-12">
                        <div class="jumbotron bg-cover text-white"
                             style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.6) 0%,rgba(0,0,0,0.6) 100%), url('{{ asset('landing_invertir/images/fondo-galeria.jpeg') }}')">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="colorlib-heading text-white text-center">Galería</h2>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 my-1 d-flex justify-content-center">
                                        <div class="embed-responsive embed embed-responsive-16by9">
                                            <iframe src="https://www.youtube.com/embed/X9N2zGYEREE"
                                                    title="YouTube video player" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>
                                        </div>

                                    </div>
                                    <div class="col-md-6 my-1">
                                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"
                                             style="">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                                    class="active"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active text-center">
                                                    <img src="{{ asset('landing_invertir/images/empresario1.jpeg') }}"
                                                         class="w-100">
                                                </div>
                                                <div class="carousel-item text-center">
                                                    <img src="{{ asset('landing_invertir/images/empresario2.jpeg') }}"
                                                         class="w-100">
                                                </div>
                                                <div class="carousel-item text-center">
                                                    <img src="{{ asset('landing_invertir/images/empresario3.jpeg') }}"
                                                         class="w-100">
                                                </div>
                                                <div class="carousel-item text-center">
                                                    <img src="{{ asset('landing_invertir/images/empresario4.jpeg') }}"
                                                         class="w-100">
                                                </div>
                                                <div class="carousel-item text-center">
                                                    <img src="{{ asset('landing_invertir/images/empresario5.jpeg') }}"
                                                         class="w-100">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators"
                                               role="button"
                                               data-slide="prev">
                                                <span class="carousel-control-prev-icon"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators"
                                               role="button"
                                               data-slide="next">
                                                <h1 class="carousel-control-next-icon"></h1>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </section>


            <section class="p-5" style="background-color: #20293D;">
                <div class="container p-4 pb-0">
                    <div class="row mt-3 text-ambar text-center">
                        <div class="col-xl-4 col-md-3 col-sm-12 text-center">
                            <p class="text-ambar">
                                “GInversiones es una marca registrada de GI Administradora de Negocios e Inversiones SAC“
                            </p>
                            <p class="text-white">con RUC N°20605395181</p>
                            <div class="row mt-2 mb-1">
                                <div class="col-xl-12 col-md-12 col-sm-12 mt-4 mb-1">
                                    <img src="{{ asset('landing_invertir/images/ginversiones2.png') }}" class="img-fluid cclImgBR"
                                         alt="Responsive image">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-5 col-sm-12">
                            <h2 class="text-white">Contacto:</h2>
                            <p>Correo : <span class="text-white">info@ginversiones.pe</span></p>
                            <p>Celular : <span class="text-white">Perú (+51) 902759899</span></p>
                            <p>Fijo: <span class="text-white">(01)4712222 Anexo: 106,113 y 117</span></p>
                            <p>Dirección: <span class="text-white">Av. Canaval y Moreyra 290 ofic.21, San Isidro</span>
                            </p>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-12">
                            <h2 class="text-white text-center">Nuestros Alidos:</h2>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 my-1 text-center">
                                        <img src="{{ asset('landing_invertir/images/byr.jpg') }}"
                                             class="img-footer">
                                    </div>
                                    <div class="col-xl-12 col-md-12 col-sm-12 my-1 text-center">
                                        <img src="{{ asset('landing_invertir/images/xcambio.jpg') }}"
                                             class="img-footer">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 my-1 text-center">
                                        <img src="{{ asset('landing_invertir/images/sentinel.jpg') }}"
                                             class="img-footer">
                                    </div>

                                    <div class="col-xl-12 col-md-12 col-sm-12 my-1 text-center">
                                        <img src="{{ asset('landing_invertir/images/equifax.jpg') }}"
                                             class="img-footer">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="p-5">
                <div class="row">
                    <div class="col-md-12">
                        <p>
                            Descargo de responsabilidad: Prestar dinero a MIPYMES presenta un riesgo
                            de no reembolso. El inversionista asume los riesgos implícitos asociados
                            a las operaciones de créditos. Grupo Imagen, no es responsable del pago
                            de los financiamientos pactados en su plataforma, ni tampoco asume la
                            responsabilidad de pago del dinero prestado; sin embargo, todos los
                            préstamos son garantizados con una hipoteca que otorga la persona quien
                            solicita el préstamo a favor del inversor, que correrá inscrita en los
                            Registros Públicos de Lima. Grupo Inmobiliario Imagen SAC, está
                            registrada en la SBS bajo el registro N°0046-2020, para que esta entidad
                            solo la supervise en materia de prevención de lavado de activos y
                            financiamiento del terrorismo a través de la UIF Perú. Grupo
                            Inmobiliario Imagen SAC no está supervisado por la SBS, ni tampoco está
                            supervisada por la SMV. En octubre 2020, la SMV publicará el reglamento
                            correspondiente al Decreto de Urgencia 013-2020, el cual definió el
                            marco de la regulación de las Plataformas de Financiamiento
                            Participativo. Una vez que el reglamento esté publicado Grupo
                            Inmobiliario Imagen SAC, podrá solicitar la licencia como “Sociedad
                            Administradora de Plataforma de Financiamiento Participativo Financiero”
                            mientras tanto no cuenta con la autorización formal de la SMV.
                        </p>
                    </div>
                </div>
            </section>


        </div><!-- end:colorlib-main -->
    </div><!-- end:container-wrap -->
</div><!-- end:colorlib-page -->

<a href="https://api.whatsapp.com/send?phone=51902759899&text=hola deseo más información sobré cómo invertir."
   target="_blank"
   class="contact-whatsapp"><i class="icon-whatsapp"></i></a>

<!-- jQuery -->
<script src="{{ asset('landing_invertir/js/jquery.min.js?v=' .rand()) }}"></script>
<!-- jQuery Easing -->
<script src="{{ asset('landing_invertir/js/jquery.easing.1.3.js?v=' .rand()) }}"></script>
<!-- Bootstrap -->
<script src="{{  asset('vendor/bootstrap/js/bootstrap.js?v=' .rand()) }}"></script>
<!-- Waypoints -->
<script src="{{ asset('landing_invertir/js/jquery.waypoints.min.js?v=' .rand()) }}"></script>
<!-- Flexslider -->
<script src="{{ asset('landing_invertir/js/jquery.flexslider-min.js?v=' .rand()) }}"></script>
<!-- Owl carousel -->
<script src="{{ asset('landing_invertir/js/owl.carousel.min.js?v=' .rand()) }}"></script>
<!-- Counters -->
<script src="{{ asset('landing_invertir/js/jquery.countTo.js?v=' .rand()) }}"></script>


<!-- MAIN JS -->
<script src="{{ asset('landing_invertir/js/main.js') }}"></script>
<script>

    var verCartilla = function (id) {
        if ($('#card-' + id).hasClass("card-active card-active-1")) {
            $('#card-' + id).removeClass('card-active card-active-1');
        } else {
            $('#card-' + id).addClass('card-active card-active-1');
        }


        console.log('aqui');
    };


    var soloNumeros = function (e) {
        var key = window.Event ? e.which : e.keyCode;
        return ((key >= 48 && key <= 57));
    };

    var buscarPersona = function () {
        var numero = $('#numero').val();
        var documento = $('#documento').val();
        var url = 'https://sistema.grupoimagensac.com.pe/api/consulta-dni';

        if (documento == '1' && numero.length >= '8') {
            $.post(url, {'numero': numero}, function (data) {

                if (data) {
                    $('#paterno').val(data.paterno);
                    $('#materno').val(data.materno);
                    $('#nombres').val(data.nombres);
                    if (data.celular != null) {
                        $('#celular').val(data.celular)
                    } else {
                        $('#celular').val('')
                    }

                    if (data.correo != null) {
                        $('#correo').val(data.correo)
                    } else {
                        $('#correo').val('')
                    }

                }
            });
        }
        ;
    };
</script>

</body>
</html>

