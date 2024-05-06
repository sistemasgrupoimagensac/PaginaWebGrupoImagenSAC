@extends('layouts.mantenimiento')

@section('titulo')
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Configuración de requisitos del producto</h2>
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

                    <form action="{{ url('administrador/guardar-requisito') }}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <input type="hidden" name="codigo" value="{{ $producto->co_producto }}">
                            <div class="form-group col-md-6">
                                <label for="">Titulo de producto</label>
                                <input type="text" readonly="" name="" value="{{ $producto->no_cabecera_producto }}"
                                       required class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Detalle de requisito </label>
                                <textarea name="detalle_requisito" id="" cols="30" rows="4" autofocus required
                                          class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="text-center">
                            @if($producto->in_web == '')
                                <a href="{{ url('/administrador/productos') }}" class="btn btn-warning">Volver</a>
                            @else
                                <a href="{{ url('/administrador/paginas') }}" class="btn btn-warning">Volver</a>
                            @endif
                            <input type="submit" class="btn btn-warning bg-dark2 text-center"
                                   value="Guardar requisito">
                        </div>
                    </form>


                    <hr>

                    <div class="table-responsive">
                        <table class="dataTable table-sm table-head-bg-warning table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Titulo</th>
                                <th>Estado</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($requisitos as $requisito)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $requisito->de_detalle_producto }}</td>
                                    <td>
                                        @if($requisito->in_estado == 1)
                                            <span class="badge badge-success">Activo</span>
                                        @else
                                            <span class="badge badge-warning">Desactivado</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a data-toggle="tooltip" data-original-title="Editar requisito"
                                           href="{{ url('administrador/editar-requisito/' . $requisito->co_detalle_producto) }}">
                                            <span class="fa fa-user-edit fa-lg text-dark c-pointer"></span>
                                        </a>

                                    </td>
                                    <td>
                                        @if($requisito->in_estado == 1)
                                            <a data-toggle="tooltip" data-original-title="Desactivar"
                                               href="{{ url('administrador/estado-requisito/'. $requisito->co_detalle_producto) }}">
                                                <span class="fa fa-trash-alt text-danger c-pointer fa-lg"
                                                      title="Desactivar"></span>
                                            </a>

                                        @else
                                            <a data-toggle="tooltip" data-original-title="Activar"
                                               href="{{ url('administrador/estado-requisito/' . $requisito->co_detalle_producto) }}">
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
