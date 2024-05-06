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
            background-size: contain;
            min-height: 300px;
        }
    </style>


@endsection


@section('content')

    <main id="main" class="mt-5 bg-light">


        <section id="gallery" class="gallery">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2 class="text-center">Galería</h2>
                    <p class="text-center">Nuestra galería</p>
                </div>

                <div class="row no-gutters text-center">

                    @foreach($fotos as $foto)
                        <div class="col-lg-3 col-md-4 my-2">
                            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
                                <a href="{{ $foto->url_galeria }}" class="venobox"
                                   data-gall="gallery-item">
                                    <img src="{{ asset('galeria_imagenes/' . $foto->no_galeria) }}" alt=""
                                         class="img-fluid"
                                         style="width: 275px; height: 207px;">
                                </a>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </section>

    </main>

@endsection