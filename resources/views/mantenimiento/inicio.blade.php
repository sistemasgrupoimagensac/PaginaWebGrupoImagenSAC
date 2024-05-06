@extends('layouts.mantenimiento')

@section('titulo')
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Configuraciones de imagen de portada</h2>
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

                    <form action="{{ url('administrador/guardar-carrusel') }}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="form-group col-md-6">
                                <label for="">Imagen de fondo</label>
                                <input type="file" name="imagen_carrusel" required class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Texto de cabecera</label>
                                <input type="text" name="texto_carrusel" required class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Texto de detalle </label>
                                <textarea name="detalle_carrusel" id="" cols="30" rows="4"
                                          class="form-control"></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Texto de botón</label>
                                <input type="text" name="boton_carrusel" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Link de botón</label>
                                <input type="text" name="link_carrusel" class="form-control">
                            </div>
                        </div>
                        <div class="text-center">
                            <input type="submit" class="btn btn-warning bg-dark2 text-center"
                                   value="Guardar cabecera">
                        </div>
                    </form>


                    <hr>

                    <div class="table-responsive">
                        <table class="dataTable table-sm table-head-bg-warning table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Cabecera</th>
                                <th>Detalle</th>
                                <th>Botón</th>
                                <th>Link</th>
                                <th>Estado</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($carrusels as $carrusel)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $carrusel->no_cabecera_carrusel }}</td>
                                    <td>{{ $carrusel->no_detalle_carrusel }}</td>
                                    <td>{{ $carrusel->no_boton_carrusel }}</td>
                                    <td>{{ $carrusel->no_link_carrusel }}</td>
                                    <td>
                                        @if($carrusel->in_estado == 1)
                                            <span class="badge badge-success">Activo</span>
                                        @else
                                            <span class="badge badge-warning">Desactivado</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('administrador/editar-carrusel/' . $carrusel->co_carrusel) }}">
                                            <span class="fa fa-user-edit fa-lg text-dark c-pointer"></span>
                                        </a>

                                    </td>
                                    <td>
                                        @if($carrusel->in_estado == 1)
                                            <a href="{{ url('administrador/estado-carrusel/'. $carrusel->co_carrusel) }}">
                                                <span class="fa fa-trash-alt text-danger c-pointer fa-lg"
                                                      title="Desactivar"></span>
                                            </a>

                                        @else
                                            <a href="{{ url('administrador/estado-carrusel/' . $carrusel->co_carrusel) }}">
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
