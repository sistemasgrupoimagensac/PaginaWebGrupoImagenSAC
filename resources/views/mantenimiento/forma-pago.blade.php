@extends('layouts.mantenimiento')

@section('titulo')
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Forma de pago</h2>
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
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="bg-orange2 text-white">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Descripción</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Tiempos</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($pagos as $pago)

                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pago->no_forma_pago }}</td>
                                        <td>
                                            @if($pago->in_estado == 1)
                                                <span class="badge badge-success">Activo</span>
                                            @else
                                                <span class="badge badge-warning">Desactivado</span>
                                            @endif
                                        </td>
                                        <td>
                                            <i onclick="abrirModalTiempoPago('{{ $pago->co_forma_pago }}');"
                                               class="text-warning fa-lg far fa-clock c-pointer"></i>
                                        </td>
                                        <td>
                                            @if($pago->in_estado == 1)
                                                <a href="{{ url('administrador/estado-forma-pago/'. $pago->co_forma_pago) }}">
                                                <span class="fa fa-trash-alt text-danger c-pointer fa-lg"
                                                      title="Desactivar"></span>
                                                </a>

                                            @else
                                                <a href="{{ url('administrador/estado-forma-pago/' . $pago->co_forma_pago) }}">
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

    <div class="modal fade modalTiempoPago">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-warning2">
                    <h4 class="modal-title text-white" id="titulo-notas">Asignar tiempo a la forma de pago</h4>
                </div>
                <div class="modal-body">
                    <form action="">
                        <input type="hidden" id="_c" name="_c" value="">
                        <div class="form-group">
                            <label for="">Seleccione tiempo de pago</label> <br>
                            <div id="contenido-tiempo">

                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger"
                            onclick="event.preventDefault(); $('.modalTiempoPago').modal('hide')">Cerrar
                    </button>
                </div>
            </div>
        </div>
    </div>



@endsection

