@extends('layouts.mantenimiento')

@section('titulo')
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Editar quienes opinan</h2>
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

                    <form action="{{ url('administrador/editar-testimonio') }}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label for="">Imagen actual</label>
                                <img src="{{ $testimonio->url_testimonio }}" class="img-fluid img-thumbnail"
                                     style="width: 100%; height: 250px;" alt="">
                            </div>

                        </div>
                        <div class="row">
                            <input type="hidden" name="codigo" value="{{ $testimonio->co_testimonio }}">
                            <div class="form-group col-md-6">
                                <label for="">Imagen de testimonio</label>
                                <input type="file" name="imagen_testimonio" accept="image/*"
                                       class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Link de video</label>
                                <input type="text" name="link_video" value="{{ $testimonio->no_link_video }}"
                                       class="form-control" required>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="{{ url('/administrador/quienes-opinan') }}" class="btn btn-warning">Volver</a>
                            <input type="submit" class="btn btn-warning bg-dark2 text-center"
                                   value="Editar quienes opinan">
                        </div>
                    </form>

                </div>
            </div>


        </div>
    </div>




@endsection
