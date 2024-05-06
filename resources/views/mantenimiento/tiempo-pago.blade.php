@extends('layouts.mantenimiento')

@section('titulo')
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Tiempo de pago</h2>
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
                        <button type="button" onclick="$('.modalNuevoTiempoPago').modal('show');"
                                class="btn btn-warning bg-dark2 mb-3 btn-lg">Click aquí para agregar nuevo
                            tiempo de pago
                        </button>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="bg-orange2 text-white">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Descripción</th>
                                    <th scope="col">Meses</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($tiempoPagos as $tiempoPago)

                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $tiempoPago->no_tiempo_pago }}</td>
                                        <td>{{ $tiempoPago->nu_tiempo_meses }}</td>
                                        <td>
                                            @if($tiempoPago->in_estado == 1)
                                                <span class="badge badge-success">Activo</span>
                                            @else
                                                <span class="badge badge-warning">Desactivado</span>
                                            @endif
                                        </td>
                                        <td>
                                            <span onclick="modalEditarTiempoPago('{{ $tiempoPago->co_tiempo_pago }}', '{{ $tiempoPago->no_tiempo_pago }}', '{{ $tiempoPago->nu_tiempo_meses }}');"
                                                  class="fa fa-user-edit fa-lg text-dark c-pointer"></span>
                                        </td>
                                        <td>
                                            @if($tiempoPago->in_estado == 1)
                                                <a href="{{ url('administrador/estado-tiempo-pago/' . $tiempoPago->co_tiempo_pago) }}">
                                                <span class="fa fa-trash-alt text-danger c-pointer fa-lg"
                                                      title="Desactivar"></span>
                                                </a>

                                            @else
                                                <a href="{{ url('administrador/estado-tiempo-pago/' . $tiempoPago->co_tiempo_pago) }}">
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

    <div class="modal fade modalNuevoTiempoPago">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-warning2">
                    <h4 class="modal-title text-white" id="titulo-notas">Tiempo de pago</h4>
                </div>
                <div class="modal-body">
                    <form action="{{ url('administrador/guardar-tiempo-pago') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Descripcion de tiempo de pago</label>
                            <input type="text" class="form-control text-uppercase" id="descripcion"
                                   name="descripcion" required>
                        </div>
                        <div class="form-group">
                            <label for="">Tiempo en meses</label>
                            <input type="number" onkeypress="return soloNumeros(event);"
                                   class="form-control text-uppercase"
                                   id="meses" maxlength="2"
                                   name="meses" required>
                        </div>
                        <div class="text-center">
                            <input type="submit" class="btn btn-warning bg-dark2 text-center" value="Guardar">
                        </div>
                    </form>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger"
                            onclick="event.preventDefault(); $('.modalNuevoTiempoPago').modal('hide')">Cerrar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modalEditarTiempoPago">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-warning2">
                    <h4 class="modal-title text-white" id="titulo-notas">Tiempo de pago</h4>
                </div>
                <div class="modal-body">
                    <form action="{{ url('administrador/editar-tiempo-pago') }}" method="post">
                        @csrf
                        <input type="hidden" id="_c" name="_c" value="">
                        <div class="form-group">
                            <label for="">Descripcion de forma pago</label>
                            <input type="text" class="form-control text-uppercase" id="editar_descripcion"
                                   name="descripcion" required>
                        </div>
                        <div class="form-group">
                            <label for="">Tiempo en meses</label>
                            <input type="number" onkeypress="return soloNumeros(event);"
                                   class="form-control text-uppercase"
                                   id="editar_meses" maxlength="2" required
                                   name="meses">
                        </div>
                        <div class="text-center">
                            <input type="submit" class="btn btn-warning bg-dark2 text-center" value="Guardar">
                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger"
                            onclick="event.preventDefault(); $('.modalEditarTiempoPago').modal('hide')">Cerrar
                    </button>
                </div>
            </div>
        </div>
    </div>



@endsection

