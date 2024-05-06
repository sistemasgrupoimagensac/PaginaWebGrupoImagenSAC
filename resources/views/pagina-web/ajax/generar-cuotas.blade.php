@if($pago == '1')
    @for($i = 1; $i <= $cuotas; $i++)
        <div class="row">
            <div class="col-6">
                <h4 class="text-right mr-5">Mes {{ $i }}</h4>
            </div>
            <div class="col-6">
                <h4 class="text-left">{{ $moneda . ' '. $total }}</h4>
            </div>
        </div>
    @endfor
@elseif($pago == '2')
    @for($i = 1; $i <= ($cuotas - 1); $i++)
        <div class="row">
            <div class="col-6">
                <h4 class="text-right mr-5">Mes {{ $i }}</h4>
            </div>
            <div class="col-6">
                <h4 class="text-left">{{ $moneda . ' '. number_format($interes, 2, '.', ',') }}</h4>
            </div>
        </div>
    @endfor
    <div class="row">
        <div class="col-6">
            <h4 class="text-right mr-5">Mes {{ $cuotas }}</h4>
        </div>
        <div class="col-6">
            <h4 class="text-left">{{ $moneda . ' '. number_format($monto + $interes, '2', '.',',') }}</h4>
        </div>
    </div>
@elseif($pago == '3')
    @for($i = 1; $i <= ($cuotas - 1); $i++)
        <div class="row">
            <div class="col-6">
                <h4 class="text-right mr-5">Mes {{ $i }}</h4>
            </div>
            <div class="col-6">
                <h4 class="text-left">{{ $moneda . ' '. number_format(0, 2, '.', ',') }}</h4>
            </div>
        </div>
    @endfor
    <div class="row">
        <div class="col-6">
            <h4 class="text-right mr-5">Mes {{ $cuotas }}</h4>
        </div>
        <div class="col-6">
            <h4 class="text-left">{{ $moneda . ' '. number_format($monto + ($interes * 6), '2', '.',',') }}</h4>
        </div>
    </div>
@endif
