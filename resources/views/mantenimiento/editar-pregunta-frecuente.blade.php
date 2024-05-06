@extends('layouts.mantenimiento')

@section('titulo')
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Editar preguntas frecuentes</h2>
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

                    <form action="{{ url('administrador/editar-pregunta-frecuente') }}" method="post"
                          enctype="multipart/form-data">
                        <input type="hidden" name="codigo" value="{{ $pregunta->co_pregunta_frecuente }}">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="">Nombre de colaborador</label>
                                <select name="tipo" class="form-control" required>
                                    <option value="">Seleccione</option>
                                    <option {{ $pregunta->in_tipo == 1 ? 'selected' : '' }} value="1">Prestamos</option>
                                    <option {{ $pregunta->in_tipo == 2 ? 'selected' : '' }} value="2">Factoring</option>
                                    <option {{ $pregunta->in_tipo == 3 ? 'selected' : '' }} value="3">Invertir</option>
                                    <option {{ $pregunta->in_tipo == 4 ? 'selected' : '' }} value="4">Libre</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Titulo de pregunta</label>
                                <input type="text" name="titulo" maxlength="200" required
                                       class="form-control" value="{{ $pregunta->no_titulo_pregunta_frecuente }}">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Descripción</label>
                                <textarea name="detalle" cols="30" rows="4" class="form-control"
                                          required>{{ $pregunta->no_detalle_pregunta_frecuente }}</textarea>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="{{ url('/administrador/preguntas-frecuentes') }}" class="btn btn-warning">Volver</a>
                            <input type="submit" class="btn btn-warning bg-dark2 text-center"
                                   value="Editar pregunta frecuente">
                        </div>
                    </form>

                </div>
            </div>


        </div>
    </div>




@endsection
