@extends('layouts.mantenimiento')

@section('titulo')
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Configuraciones de preguntas frecuentes</h2>
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

                    <form action="{{ url('administrador/guardar-pregunta-frecuente') }}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="">Nombre de colaborador</label>
                                <select name="tipo" class="form-control" required>
                                    <option value="">Seleccione</option>
                                    <option value="1">Prestamos</option>
                                    <option value="2">Factoring</option>
                                    <option value="3">Invertir</option>
                                    <option value="4">Libre</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Titulo de pregunta</label>
                                <input type="text" name="titulo" maxlength="200" required
                                       class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Descripción</label>
                                <textarea name="detalle" cols="30" rows="4" class="form-control" required></textarea>
                            </div>
                        </div>
                        <div class="text-center">
                            <input type="submit" class="btn btn-warning bg-dark2 text-center"
                                   value="Guardar pregunta frecuente">
                        </div>
                    </form>


                    <hr>

                    <div class="table-responsive">
                        <table class="dataTable table-sm table-head-bg-warning table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Titulo</th>
                                <th>Descripción</th>
                                <th>Tipo</th>
                                <th>Estado</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($preguntas as $pregunta)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $pregunta->no_titulo_pregunta_frecuente }}</td>
                                    <td>{{ $pregunta->no_detalle_pregunta_frecuente }}</td>
                                    <td>
                                        @if($pregunta->in_tipo == 1)
                                            Prestamos
                                        @elseif($pregunta->in_tipo == 2)
                                            Factoring
                                        @elseif($pregunta->in_tipo == 3)
                                            Invetir
                                        @elseif($pregunta->in_tipo == 4)
                                            Libre
                                        @endif
                                    </td>
                                    <td>
                                        @if($pregunta->in_estado == 1)
                                            <span class="badge badge-success">Activo</span>
                                        @else
                                            <span class="badge badge-warning">Desactivado</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('administrador/editar-pregunta-frecuente/' . $pregunta->co_pregunta_frecuente) }}">
                                            <span class="fa fa-user-edit fa-lg text-dark c-pointer"></span>
                                        </a>

                                    </td>
                                    <td>
                                        @if($pregunta->in_estado == 1)
                                            <a href="{{ url('administrador/estado-pregunta-frecuente/'. $pregunta->co_pregunta_frecuente) }}">
                                                <span class="fa fa-trash-alt text-danger c-pointer fa-lg"
                                                      title="Desactivar"></span>
                                            </a>

                                        @else
                                            <a href="{{ url('administrador/estado-pregunta-frecuente/' . $pregunta->co_pregunta_frecuente) }}">
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
