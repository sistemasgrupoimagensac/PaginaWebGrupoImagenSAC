<option value="">Seleccione plazo de pago</option>
@foreach($tiempos as $tiempo)
    <option value="{{ $tiempo->nu_tiempo_meses }}">{{ $tiempo->no_tiempo_pago }}</option>
@endforeach
