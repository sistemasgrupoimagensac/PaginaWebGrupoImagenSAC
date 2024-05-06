@extends('layouts.mantenimiento')

@section('titulo')
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Editar cabecera</h2>
            </div>
        </div>
    </div>
@endsection

@section('content')


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body">


                    <form action="{{ url('administrador/editar-carrusel') }}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="">Imagen actual</label>
                                <img src="{{ $carrusel->url_carrusel }}" class="img-fluid img-thumbnail"
                                     style="width: 100%; height: 250px;" alt="">
                            </div>

                        </div>
                        <div class="row">
                            <input type="hidden" name="codigo" value="{{ $carrusel->co_carrusel }}">

                            <div class="form-group col-md-6">
                                <label for="">Imagen de fondo</label>
                                <input type="file" name="imagen_carrusel" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Texto de cabecera</label>
                                <input type="text" name="texto_carrusel" required class="form-control"
                                       value="{{ $carrusel->no_cabecera_carrusel }}">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Texto de detalle </label>
                                <textarea name="detalle_carrusel" id="" cols="30" rows="4"
                                          class="form-control">{{ $carrusel->no_detalle_carrusel }}</textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Texto de botón</label>
                                <input type="text" name="boton_carrusel" class="form-control"
                                       value="{{ $carrusel->no_boton_carrusel }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Link de botón</label>
                                <input type="text" name="link_carrusel" class="form-control"
                                       value="{{ $carrusel->no_link_carrusel }}">
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="{{ url('/administrador/inicio') }}" class="btn btn-warning">Volver</a>
                            <input type="submit" class="btn btn-warning bg-dark2 text-center"
                                   value="Editar cabecera">
                        </div>
                    </form>


                </div>

            </div>


        </div>
    </div>




@endsection
