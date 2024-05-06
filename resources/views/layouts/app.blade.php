<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ env('APP_NAME') }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="{{ asset('images/grupo_imagen.jpg') }}" rel="icon">
    <link href="{{ asset('images/grupo_imagen.jpg') }}" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{  asset('vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{  asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{  asset('vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{  asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{  asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{  asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css?v='. rand()) }}" rel="stylesheet">
    @yield('estilos')
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-201973724-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-201973724-1');
    </script>
</head>

<body>

<header id="header" class="fixed-top d-flex align-items-center header-transparent bg-white">
    <div class="container d-flex align-items-center">

        <div class="mr-auto">
            <a href="{{ url('/') }}"><img style="height: 200px; height: 50px;" src="{{ asset('images/logo-azul.png') }}" alt="" class="img-fluid"></a>
        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li><a class="{{ Request::is('/') ? 'actual' : '' }}" href="{{ url('/') }}">Inicio</a></li>
                <li><a class="{{ Request::is('prestamos') ? 'actual' : '' }}"
                       href="{{ url('prestamos') }}">Préstamos</a></li>
                {{--<li><a class="{{ Request::is('factoring') ? 'actual' : '' }}"
                       href="{{ url('factoring') }}">Factoring</a></li>--}}
                <li><a class="{{ Request::is('invertir') ? 'actual' : '' }}"
                       href="{{ url('invertir') }}">Invertir</a>
                </li>
                <li class="drop-down"><a href="#" onclick="event.preventDefault();">Conoce más</a>
                    <ul>
                        <li><a href="{{ url('nosotros') }}">Nosotros</a></li>
                        <li><a href="{{ url('galeria') }}">Galería</a></li>
                        <li><a href="https://x-cambio.com" target="_blank">Casa de cambio digital</a></li>
                        <li><a href="{{ url('preguntas-frecuentes') }}">Preguntas frecuentes</a></li>
                        <li><a href="{{ url('conviertete-en-asesor') }}">Conviértete en asesor</a></li>
                        <li><a href="{{ url('recomienda-y-gana') }}">Recomienda y gana S/200 soles</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>


@yield('content')

<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                @php

                    $configuracion = \App\PConfiguracionBasica::find(1);

                @endphp

                <div class="col-lg-4 col-md-6">
                    <div class="footer-info">
                        <h3>{{ env('APP_NAME') }}</h3>
                        <p class="pb-3"><em>{{ $configuracion->no_informacion }}</em>
                        </p>
                        <div class="social-links mt-3">
                            <a href="{{ $configuracion->no_facebook }}" target="_blank" class="facebook"><i
                                        class="bx bxl-facebook-circle h3"></i></a>
                            <a href="{{ $configuracion->no_instagram }}" target="_blank" class="instagram"><i
                                        class="bx bxl-instagram h3"></i></a>
                            <a href="{{ $configuracion->no_youtube }}" target="_blank" class="youtube"><i
                                        class="bx bxl-youtube h3"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Conoce más</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ url('nosotros') }}">Nosotros</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ url('preguntas-frecuentes') }}">Preguntas
                                frecuentes</a></li>
                    </ul>
		    <div class="mt-1">
    			<a href="https://reclamos.grupoimagensac.com.pe" target="_blank">
				<h4>Libro de Reclamaciones</h4>
        			<img src="{{ asset('images/libro_reclamaciones.png') }}" class="img-logo" alt="libro_reclamaciones" style="max-width: 100px; text-align: center;">
    			</a>
		    </div>

                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Nuestros servicios</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ url('prestamos') }}">Préstamos</a></li>
                        {{--<li><i class="bx bx-chevron-right"></i> <a href="{{ url('factoring') }}">Factoring</a></li>--}}
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ url('invertir') }}">Invertir</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Contacto</h4>
                    <ul>
                        <li><i class="icofont-envelope-open mr-2"></i>{{ $configuracion->no_correo }}</li>
                        <li><i class="icofont-whatsapp mr-2"></i>{{ $configuracion->no_whatsapp }}</li>
                        <li><i class="icofont-phone mr-2"></i>{{ $configuracion->no_telefonos }}</li>
                        <li><i class="icofont-google-map mr-2"></i>{{ $configuracion->no_direccion }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>{{ env('APP_NAME') }}</span></strong>. Todos los derechos reservados
        </div>
    </div>
</footer>

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
<a href="https://api.whatsapp.com/send?phone=51{{ $configuracion->no_whatsapp }}&text=Hola%2C%20necesito%20m%C3%A1s%20infomaci%C3%B3n%20de%20sus%20servicios"
   target="_blank"
   class="contact-whatsapp"><i class="icofont-whatsapp"></i></a>
<div id="preloader"></div>

<script src="{{  asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{  asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{  asset('vendor/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{  asset('vendor/php-email-form/validate.js') }}"></script>
<script src="{{  asset('vendor/venobox/venobox.min.js') }}"></script>
<script src="{{  asset('vendor/waypoints/jquery.waypoints.min.js') }}"></script>
<script src="{{  asset('vendor/counterup/counterup.min.js') }}"></script>
<script src="{{  asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{  asset('vendor/aos/aos.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/web.js?v=' . rand()) }}"></script>
@yield('script')
</body>
</html>