@extends('layouts.mantenimiento')

@section('titulo')
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Configuraciones de prestamos, factoring e invertir</h2>
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

                    <form action="{{ url('administrador/editar-pagina') }}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-1">
                                <label for="">Imagen actual</label>
                                <img src="{{ $producto->url_producto }}" class="img-fluid img-thumbnail"
                                     style="width: 100%; height: 100px;" alt="">
                            </div>

                        </div>
                        <div class="row">
                            <input type="hidden" name="codigo" value="{{ $producto->co_producto }}">
                            <div class="form-group col-md-6">
                                <label for="">Página web</label>
                                <select name="tipo_web" required class="form-control">
                                    <option value="1" {{ $producto->in_web == 1 ? 'selected' : '' }}>Préstamos</option>
                                    <option value="2" {{ $producto->in_web == 2 ? 'selected' : '' }}>Factoring</option>
                                    <option value="3" {{ $producto->in_web == 3 ? 'selected' : '' }}>Invertir</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="">Sección de página web</label>
                                <select name="tipo_seccion" required class="form-control">
                                    <option value="1" {{ $producto->in_seccion == 1 ? 'selected' : '' }}>Pasos</option>
                                    <option value="2" {{ $producto->in_seccion == 2 ? 'selected' : '' }}>Beneficios
                                    </option>
                                    <option value="3" {{ $producto->in_seccion == 3 ? 'selected' : '' }}>Requisitos o
                                        caracteristicas
                                    </option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="">Imagen</label>
                                <input type="file" name="imagen" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Titulo</label>
                                <input type="text" name="titulo" required value="{{ $producto->no_cabecera_producto }}"
                                       class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Detalle</label>
                                <textarea name="detalle" id="" cols="30" rows="4"
                                          class="form-control">{{ $producto->no_detalle_producto }}</textarea>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="{{ url('/administrador/paginas') }}" class="btn btn-warning">Volver</a>
                            <input type="submit" class="btn btn-warning bg-dark2 text-center"
                                   value="Guardar">
                        </div>
                    </form>

                </div>
            </div>


        </div>
    </div>




@endsection
