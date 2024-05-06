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


                    <form action="{{ url('administrador/editar-producto') }}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="">Imagen actual</label>
                                <img src="{{ $producto->url_producto }}" class="img-fluid img-thumbnail"
                                     style="width: 100%; height: 250px;" alt="">
                            </div>

                        </div>
                        <div class="row">
                            <input type="hidden" name="codigo" value="{{ $producto->co_producto }}">

                            <div class="form-group col-md-6">
                                <label for="">Imagen de producto</label>
                                <input type="file" name="imagen_producto" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Texto de producto</label>
                                <input type="text" name="texto_producto" required class="form-control"
                                       value="{{ $producto->no_cabecera_producto }}">
                            </div>
                            <div class="form-group col-md-12">
                                    <label for="">Detalle de producto </label>
                                <textarea name="detalle_producto" id="" cols="30" rows="4"
                                          class="form-control">{{ $producto->no_detalle_producto }}</textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Texto de botón</label>
                                <input type="text" name="boton_producto" class="form-control"
                                       value="{{ $producto->no_boton_producto }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Link de botón</label>
                                <input type="text" name="link_producto" class="form-control"
                                       value="{{ $producto->no_link_producto }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Link de video</label>
                                <input type="text" name="link_video" class="form-control"
                                       value="{{ $producto->no_link_video }}">
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="{{ url('/administrador/productos') }}" class="btn btn-warning">Volver</a>
                            <input type="submit" class="btn btn-warning bg-dark2 text-center"
                                   value="Editar producto">
                        </div>
                    </form>


                </div>

            </div>


        </div>
    </div>




@endsection
