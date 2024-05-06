@extends('layouts.mantenimiento')

@section('titulo')
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Configuraciones de colaboradores</h2>
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

                    <form action="{{ url('administrador/guardar-colaborador') }}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="form-group col-md-6">
                                <label for="">Imagen de perfil</label>
                                <input type="file" name="imagen_colaborador" required class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Nombre de colaborador</label>
                                <input type="text" name="nombre_colaborador" required class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Cargo de colaborador</label>
                                <input type="text" name="cargo_colaborador" required class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Link de linkedin</label>
                                <input type="text" name="link_colaborador" class="form-control">
                            </div>
                        </div>
                        <div class="text-center">
                            <input type="submit" class="btn btn-warning bg-dark2 text-center"
                                   value="Guardar colaborador">
                        </div>
                    </form>


                    <hr>

                    <div class="table-responsive">
                        <table class="dataTable table-sm table-head-bg-warning table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Cargo</th>
                                <th>Linkedin</th>
                                <th>Estado</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($colaboradores as $colaborador)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $colaborador->no_nombre_colaborador }}</td>
                                    <td>{{ $colaborador->no_cargo_colaborador }}</td>
                                    <td>{{ $colaborador->no_link_colaborador }}</td>
                                    <td>
                                        @if($colaborador->in_estado == 1)
                                            <span class="badge badge-success">Activo</span>
                                        @else
                                            <span class="badge badge-warning">Desactivado</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('administrador/editar-colaborador/' . $colaborador->co_colaborador) }}">
                                            <span class="fa fa-user-edit fa-lg text-dark c-pointer"></span>
                                        </a>

                                    </td>
                                    <td>
                                        @if($colaborador->in_estado == 1)
                                            <a href="{{ url('administrador/estado-colaborador/'. $colaborador->co_colaborador) }}">
                                                <span class="fa fa-trash-alt text-danger c-pointer fa-lg"
                                                      title="Desactivar"></span>
                                            </a>

                                        @else
                                            <a href="{{ url('administrador/estado-colaborador/' . $colaborador->co_colaborador) }}">
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
