@foreach($tiempos as $tiempo)
    <input type="checkbox" onchange="guardarFormaTiempoPago(this.value);"
           {{ \App\Http\Controllers\MantenimientoController::existeFormaTiempoPago($codigo, $tiempo->co_tiempo_pago) == 1 ? 'checked' : '' }}
           value="{{ $tiempo->co_tiempo_pago }}"> {{ $tiempo->no_tiempo_pago }} <br>
@endforeach
