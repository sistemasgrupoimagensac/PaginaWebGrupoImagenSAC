@extends('layouts.mantenimiento')

@section('titulo')
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Monedas</h2>
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

                    <div id="contenido">
                        <button type="button" onclick="$('.modalNuevoMoneda').modal('show');"
                                class="btn btn-warning bg-dark2 mb-3 btn-lg">Click aquí para agregar nuevo moneda
                        </button>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="bg-orange2 text-white">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Simbolo</th>
                                    <th scope="col">Monto mínimo</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($monedas as $moneda)

                                    <tr>
                                        <td>{{ $loop->iteration  }}</td>
                                        <td>{{ $moneda->no_tipo_moneda }}</td>
                                        <td>{{ $moneda->nc_tipo_moneda }}</td>
                                        <td>{{ number_format($moneda->nu_monto_minimo, 2, '.', ',') }}</td>
                                        <td>
                                            @if($moneda->in_estado == 1)
                                                <span class="badge badge-success">Activo</span>
                                            @else
                                                <span class="badge badge-warning">Desactivado</span>
                                            @endif
                                        </td>
                                        <td>
                                            <span onclick="modalEditarMoneda('{{ $moneda->co_tipo_moneda }}',
                                                    '{{ str_replace("'", "\'", $moneda->no_tipo_moneda) }}',
                                                    '{{ $moneda->nc_tipo_moneda }}', '{{ $moneda->nu_monto_minimo }}');"
                                                  class="fa fa-user-edit fa-lg text-dark c-pointer"></span>
                                        </td>
                                        <td>
                                            @if($moneda->in_estado == 1)
                                                <a href="{{ url('administrador/estado-moneda/' . $moneda->co_tipo_moneda) }}">
                                                    <span class="fa fa-trash-alt text-danger c-pointer fa-lg"
                                                          title="Desactivar"></span>
                                                </a>

                                            @else
                                                <a href="{{ url('administrador/estado-moneda/' . $moneda->co_tipo_moneda) }}">
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
    </div>

    <div class="modal fade modalNuevoMoneda">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-warning2">
                    <h4 class="modal-title text-white" id="titulo-notas">Nueva moneda</h4>
                </div>
                <div class="modal-body">
                    <form action="{{ url('administrador/guardar-moneda') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Nombre moneda</label>
                            <input type="text" class="form-control text-uppercase" id="moneda"
                                   name="moneda" required>
                        </div>
                        <div class="form-group">
                            <label for="">Simbolo</label>
                            <input type="text" class="form-control text-uppercase" id="simbolo"
                                   name="simbolo" required>
                        </div>
                        <div class="form-group">
                            <label for="">Monto mínimo</label>
                            <input type="text" class="form-control text-uppercase" id="monto_minimo"
                                   name="monto_minimo" onkeypress="return soloNumerosYPunto(event);" required>
                        </div>
                        <div class="text-center">
                            <input type="submit" class="btn btn-warning bg-dark2 text-center" value="Guardar">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-danger"
                            onclick="event.preventDefault(); $('.modalNuevoMoneda').modal('hide')">Cerrar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modalEditarMoneda">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-warning2">
                    <h4 class="modal-title text-white" id="titulo-notas">Editar moneda</h4>
                </div>
                <div class="modal-body">
                    <form action="{{ url('administrador/editar-moneda') }}" method="post">
                        @csrf
                        <input type="hidden" id="_c" name="_c" value="">
                        <div class="form-group">
                            <label for="">Nombre moneda</label>
                            <input type="text" class="form-control text-uppercase" id="moneda_editar"
                                   name="moneda" required>
                        </div>
                        <div class="form-group">
                            <label for="">Simbolo</label>
                            <input type="text" class="form-control text-uppercase" id="simbolo_editar"
                                   name="simbolo" required>
                        </div>
                        <div class="form-group">
                            <label for="">Monto mínimo</label>
                            <input type="text" class="form-control text-uppercase" id="monto_minimo_editar"
                                   name="monto_minimo" onkeypress="return soloNumerosYPunto(event);" required>
                        </div>
                        <div class="text-center">
                            <input type="submit" class="btn btn-warning bg-dark2 text-center" value="Guardar">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger"
                            onclick="event.preventDefault(); $('.modalEditarMoneda').modal('hide')">Cerrar
                    </button>
                </div>
            </div>
        </div>
    </div>


@endsection

