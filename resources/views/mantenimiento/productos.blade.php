@extends('layouts.mantenimiento')

@section('titulo')
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Configuraciones de productos</h2>
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

                    <form action="{{ url('administrador/guardar-producto') }}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="form-group col-md-6">
                                <label for="">Imagen de producto</label>
                                <input type="file" name="imagen_producto" required class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Titulo de producto</label>
                                <input type="text" name="texto_producto" required class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Detalle de producto </label>
                                <textarea name="detalle_producto" id="" cols="30" rows="4"
                                          class="form-control"></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Texto de botón</label>
                                <input type="text" name="boton_producto" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Link de botón</label>
                                <input type="text" name="link_producto" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Link de video</label>
                                <input type="text" name="link_video" class="form-control">
                            </div>
                        </div>
                        <div class="text-center">
                            <input type="submit" class="btn btn-warning bg-dark2 text-center"
                                   value="Guardar producto">
                        </div>
                    </form>


                    <hr>

                    <div class="table-responsive">
                        <table class="dataTable table-sm table-head-bg-warning table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Titulo</th>
                                <th>Detalle</th>
                                <th>Botón</th>
                                <th>Link botón</th>
                                <th>Link video</th>
                                <th>Estado</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($productos as $producto)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $producto->no_cabecera_producto }}</td>
                                    <td>{{ $producto->no_detalle_producto }}</td>
                                    <td>{{ $producto->no_boton_producto }}</td>
                                    <td>{{ $producto->no_link_producto }}</td>
                                    <td>{{ $producto->no_link_video }}</td>
                                    <td>
                                        @if($producto->in_estado == 1)
                                            <span class="badge badge-success">Activo</span>
                                        @else
                                            <span class="badge badge-warning">Desactivado</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a data-toggle="tooltip" data-original-title="Requisitos"
                                           href="{{ url('administrador/requisitos-producto/' . $producto->co_producto) }}">
                                            <span class="fa fa-list-ul fa-lg text-dark c-pointer"></span>
                                        </a>
                                    </td>
                                    <td>
                                        <a data-toggle="tooltip" data-original-title="Editar producto"
                                           href="{{ url('administrador/editar-producto/' . $producto->co_producto) }}">
                                            <span class="fa fa-user-edit fa-lg text-dark c-pointer"></span>
                                        </a>

                                    </td>
                                    <td>
                                        @if($producto->in_estado == 1)
                                            <a data-toggle="tooltip" data-original-title="Desactivar"
                                               href="{{ url('administrador/estado-producto/'. $producto->co_producto) }}">
                                                <span class="fa fa-trash-alt text-danger c-pointer fa-lg"
                                                      title="Desactivar"></span>
                                            </a>

                                        @else
                                            <a data-toggle="tooltip" data-original-title="Activar"
                                               href="{{ url('administrador/estado-producto/' . $producto->co_producto) }}">
                                                <span class="fa fa-check-circle text-success c-pointer fa-lg"
                                                      title="Activar"></span>
                                            </a>

                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>




@endsection
