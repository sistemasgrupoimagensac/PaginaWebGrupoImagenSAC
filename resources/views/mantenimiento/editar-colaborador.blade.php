@extends('layouts.mantenimiento')

@section('titulo')
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Editar colaborador</h2>
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

                    <form action="{{ url('administrador/editar-colaborador') }}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="">Imagen actual</label>
                                <img src="{{ $colaborador->url_colaborador }}" class="img-fluid img-thumbnail"
                                     style="width: 100%; height: 250px;" alt="">
                            </div>

                        </div>
                        <div class="row">
                            <input type="hidden" value="{{ $colaborador->co_colaborador }}" name="codigo">
                            <div class="form-group col-md-6">
                                <label for="">Imagen de perfil</label>
                                <input type="file" name="imagen_colaborador" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Nombre de colaborador</label>
                                <input type="text" name="nombre_colaborador"
                                       value="{{ $colaborador->no_nombre_colaborador }}" required class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Cargo de colaborador</label>
                                <input type="text" name="cargo_colaborador"
                                       value="{{ $colaborador->no_cargo_colaborador }}" required class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Link de linkedin</label>
                                <input type="text" name="link_colaborador"
                                       value="{{ $colaborador->no_link_colaborador }}" class="form-control">
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="{{ url('/administrador/colaboradores') }}" class="btn btn-warning">Volver</a>
                            <input type="submit" class="btn btn-warning bg-dark2 text-center"
                                   value="Editar colaborador">
                        </div>
                    </form>

                </div>
            </div>


        </div>
    </div>




@endsection
