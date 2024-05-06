@extends('layouts.mantenimiento')

@section('titulo')
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Editar requisito</h2>
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

                    <form action="{{ url('administrador/editar-requisito') }}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <input type="hidden" name="codigo" value="{{ $requisito->co_detalle_producto }}">
                            <div class="form-group col-md-6">
                                <label for="">Titulo de producto</label>
                                <input type="text" readonly="" name="" value="{{ $requisito->no_cabecera_producto }}"
                                       required class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Detalle de requisito </label>
                                <textarea name="detalle_requisito" id="" cols="30" rows="4" autofocus required
                                          class="form-control">{{ $requisito->de_detalle_producto }}</textarea>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="{{ url('/administrador/requisitos-producto/' . $requisito->co_producto) }}" class="btn btn-warning">Volver</a>
                            <input type="submit" class="btn btn-warning bg-dark2 text-center"
                                   value="Editar requisito">
                        </div>
                    </form>

                </div>
            </div>


        </div>
    </div>




@endsection
