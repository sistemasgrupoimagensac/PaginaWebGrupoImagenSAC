@extends('layouts.mantenimiento')

@section('titulo')
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Configuraciones de testimonios</h2>
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

                    <form action="{{ url('administrador/guardar-testimonio') }}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <input type="hidden" name="tipo" value="1">
                            <div class="form-group col-md-6">
                                <label for="">Imagen de testimonio</label>
                                <input type="file" name="imagen_testimonio" accept="image/*" required class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Nombre</label>
                                <input type="text" name="nombre" autofocus required class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Link de video</label>
                                <input type="text" name="link_video" class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Testimonio</label>
                                <textarea name="detalle_testimonio" id="" required cols="30" rows="4"
                                          class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="text-center">
                            <input type="submit" class="btn btn-warning bg-dark2 text-center"
                                   value="Guardar testimonio">
                        </div>
                    </form>


                    <hr>

                    <div class="table-responsive">
                        <table class="dataTable table-sm table-head-bg-warning table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Testimonio</th>
                                <th>Video</th>
                                <th>Estado</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($testimonios as $testimonio)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $testimonio->no_testimonio }}</td>
                                    <td>{{ $testimonio->de_testimonio }}</td>
                                    <td>{{ $testimonio->no_link_video }}</td>
                                    <td>
                                        @if($testimonio->in_estado == 1)
                                            <span class="badge badge-success">Activo</span>
                                        @else
                                            <span class="badge badge-warning">Desactivado</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a data-toggle="tooltip" data-original-title="Editar testimonio"
                                           href="{{ url('administrador/editar-testimonio/' . $testimonio->co_testimonio) }}">
                                            <span class="fa fa-user-edit fa-lg text-dark c-pointer"></span>
                                        </a>

                                    </td>
                                    <td>
                                        @if($testimonio->in_estado == 1)
                                            <a data-toggle="tooltip" data-original-title="Desactivar"
                                               href="{{ url('administrador/estado-testimonio/'. $testimonio->co_testimonio) }}">
                                                <span class="fa fa-trash-alt text-danger c-pointer fa-lg"
                                                      title="Desactivar"></span>
                                            </a>

                                        @else
                                            <a data-toggle="tooltip" data-original-title="Activar"
                                               href="{{ url('administrador/estado-testimonio/' . $testimonio->co_testimonio) }}">
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
