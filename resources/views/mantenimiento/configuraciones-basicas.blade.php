@extends('layouts.mantenimiento')

@section('titulo')
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Configuraciones básicas</h2>
            </div>
        </div>
    </div>
@endsection

@section('content')

    <div class="row" id="contenido-error-c-1" style="display: none;">
        <div class="col-sm-12 col-md-12">
            <div class="card card-stats card-danger card-round">
                <div class="card-header">
                    <div class="card-title">Errores</div>
                </div>
                <div class="card-body">
                    <ul id="contenido-error-1"></ul>
                </div>
            </div>
        </div>
    </div>

    <form action="{{ url('administrador/guardar-configuraciones-basicas') }}" enctype="multipart/form-data"
          method="post">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title"></div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="facebook">Imagen portada inicio</label>
                                <input type="file" name="imagen_portada_inicio" accept="image/*" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="facebook">Imagen portada prestamo</label>
                                <input type="file" name="imagen_portada_prestamo" accept="image/*" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="facebook">Imagen portada invertir</label>
                                <input type="file" name="imagen_portada_invertir" accept="image/*" class="form-control">
                            </div>
                        </div>

                        <hr>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="facebook">Link video de introducción</label>
                                <input type="text" name="video_presentacion"
                                       id="video_presentacion" class="form-control"
                                       placeholder="" value="{{ $configuracion->link_presentacion  ?? ''}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="facebook">Imagen préstamo</label>
                                <input type="file" name="imagen_prestamo" accept="image/*" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="facebook">Link video préstamo</label>
                                <input type="text" name="video_prestamo" required
                                       id="video_prestamo" class="form-control"
                                       placeholder="" value="{{ $configuracion->link_prestamo  ?? ''}}">
                            </div>
                        </div>
                        {{--<div class="row">
                            <div class="form-group col-md-6">
                                <label for="facebook">Imagen Factoring</label>
                                <input type="file" name="imagen_factoring" accept="image/*" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="facebook">Link video factoring</label>
                                <input type="text" name="video_factoring" required
                                       id="video_factoring" class="form-control"
                                       placeholder="" value="{{ $configuracion->link_factoring  ?? ''}}">
                            </div>
                        </div>--}}
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="facebook">Imagen Invertir</label>
                                <input type="file" name="imagen_invertir" accept="image/*" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="facebook">Link video invertir</label>
                                <input type="text" name="video_invertir" required
                                       id="video_invertir" class="form-control"
                                       placeholder="" value="{{ $configuracion->link_invertir  ?? ''}}">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="tasa_prestamo">Tasa del simulador de préstamos</label>
                                <input type="text" name="tasa_prestamo" onkeypress="return soloNumerosYPunto(event);"
                                       id="tasa_prestamo" class="form-control" required
                                       placeholder="" value="{{ $configuracion->nu_tasa_prestamo ?? ''}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="tasa_invertir">Tasa del simulador de invertir</label>
                                <input type="text" name="tasa_invertir" onkeypress="return soloNumerosYPunto(event);"
                                       id="tasa_invertir" class="form-control" required
                                       placeholder="" value="{{ $configuracion->nu_tasa_inversion ?? ''}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="correo">Correo</label>
                                <input type="text" name="correo"
                                       id="correo" class="form-control"
                                       placeholder="" value="{{ $configuracion->no_correo ?? ''}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="telefono">Celulares / Teléfonos</label>
                                <input type="text" name="telefono"
                                       id="telefono" class="form-control"
                                       placeholder="" value="{{ $configuracion->no_telefonos ?? ''}}">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="whatsapp">Celular whatsapp</label>
                                <input type="text" name="whatsapp" onkeypress="return soloNumeros(event);"
                                       id="whatsapp" maxlength="9" max="9" class="form-control"
                                       placeholder="" value="{{ $configuracion->no_whatsapp ?? ''}}">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="direccion">Dirección</label>
                                <input type="text" name="direccion"
                                       id="direccion" class="form-control"
                                       placeholder="" value="{{ $configuracion->no_direccion  ?? ''}}">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="facebook">Link facebook</label>
                                <input type="text" name="facebook"
                                       id="facebook" class="form-control"
                                       placeholder="" value="{{ $configuracion->no_facebook  ?? ''}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="youtube">Link youtube</label>
                                <input type="text" name="youtube"
                                       id="youtube" class="form-control"
                                       placeholder="" value="{{ $configuracion->no_youtube ?? '' }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="instagram">Link instagram</label>
                                <input type="text" name="instagram"
                                       id="instagram" class="form-control"
                                       placeholder="" value="{{ $configuracion->no_instagram ?? '' }}">
                            </div>

                            <div class="form-group col-md-12">
                                <label for="instagram">Información de pie de página</label>
                                <textarea name="informacion" id="informacion" cols="30" rows="4"
                                          class="form-control">{{ $configuracion->no_informacion }}</textarea>
                            </div>
                        </div>

                        <div class="text-center">
                            <input type="submit" class="btn btn-warning bg-dark2 text-center"
                                   value="Guardar configuraciones">
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </form>



@endsection
