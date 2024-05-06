var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

var soloNumerosYPunto = function (e) {
    var key = window.Event ? e.which : e.keyCode;
    return ((key >= 48 && key <= 57) || key == 46);
};

async function format1(n, currency) {
    return currency + n.toFixed(0).replace(/./g, function (c, i, a) {
        return i > 0 && c !== "." && (a.length - i) % 3 === 0 ? "," + c : c;
    });
}


var textoMonto = function () {
    var monto = $('#monto').val();
    $('#texto-monto').val(monto);
};

async function textoFormateado() {
    var monto = $('#monto').val();
    var moneda = $('#moneda').val();
    var montoMinimo = $('#moneda').find(':selected').data('monto-minimo');
    monto = parseFloat(monto);

    if (moneda != '' && monto < montoMinimo) {
        monto = montoMinimo;
        $('#monto').val(monto);
    }

    monto = await format1(monto, '');
    $('#texto-monto').val(monto);
}

async function actualizarMonto() {
    var monto = $('#texto-monto').val();
    if (monto == '') {
        textoFormateado();
    } else {
        $('#monto').val(monto);
    }

}

async function aumentarMonto() {

    var monto = $('#monto').val();
    monto = parseFloat(monto);
    monto = monto + 5000;
    $('#monto').val(monto);
    monto = await format1(monto, '');
    $('#texto-monto').val(monto);

}

async function restarMonto() {

    var monto = $('#monto').val();
    var moneda = $('#moneda').val();
    var montoMinimo = $('#moneda').find(':selected').data('monto-minimo');

    monto = parseFloat(monto);

    if (monto > montoMinimo) {
        monto = monto - 5000;
        $('#monto').val(monto);
        monto = await format1(monto, '');
        $('#texto-monto').val(monto);
    }


}

async function siguiente(paso) {


    if (paso == 1) {
        var moneda = $('#moneda').val();
        var simbolo = $('#moneda').find(':selected').data('simbolo');
        var montoMinimo = $('#moneda').find(':selected').data('monto-minimo');
        var montoMinimoFormat = $('#moneda').find(':selected').data('monto-minimo-format');
        if (moneda == '') {
            validarMoneda(moneda);
            return false;
        } else {
            $('#descripcion-monto').html('El monto mínimo es de ' + simbolo + ' ' + montoMinimoFormat);
            $('#monto').val(montoMinimo);
            $('#texto-monto').val(montoMinimo);
            $('#texto-moneda').html(simbolo)

        }

    } else if (paso == 3) {
        var pago = $('#tipo_pago').val();
        if (pago == '') {
            validarTipoPago(pago);
            return false;
        }
    }

    await $('#paso-' + paso).hide(600);
    await $('#paso-' + (paso + 1)).show(300);
}

async function atras(paso) {
    await $('#paso-' + (paso + 1)).hide(600);
    await $('#paso-' + paso).show(300);
}

function validarTipoPago(valor) {
    if (valor == '') {
        $('#alerta-paso-3').show();
    } else {

        var url = '/cargar-tiempo-pago-por-forma-pago';
        $.post(url, {
            '_token': CSRF_TOKEN,
            'codigo': valor,
        }, function (data) {
            $('#plazo').html(data);
            $('#plazo').removeAttr('readonly disabled');
            $('#plazo').focus();
        });

    }
}

function validarMoneda(valor) {
    if (valor == '') {
        $('#alerta-paso-1').show();
    } else {
        $('#alerta-paso-1').hide();
    }
}

function validarMoneda2(valor) {
    if (valor != '') {

        var moneda = $('#moneda').val();
        var simbolo = $('#moneda').find(':selected').data('simbolo');
        var montoMinimo = $('#moneda').find(':selected').data('monto-minimo');
        var montoMinimoFormat = $('#moneda').find(':selected').data('monto-minimo-format');

        $('#descripcion-monto').html('El monto mínimo es de ' + simbolo + ' ' + montoMinimoFormat);
        $('#monto').val(montoMinimo);
        $('#texto-monto').val(montoMinimo);
        $('#texto-moneda').html(simbolo);
        $('#texto-monto').removeAttr('readonly disabled');
        $('#texto-monto').focus();
        $('#tipo_pago').removeAttr('readonly disabled');


    } else {

        $('#monto').val('');
        $('#texto-monto').val('');
        $('#plazo').val('').change();
        $('#tipo_pago').val('').change();
        $('#descripcion-monto').html('');
        $('#texto-monto').prop('disabled', true);
        $('#tipo_pago').prop('disabled', true);
        $('#plazo').prop('disabled', true);

    }
}

function validarMoneda3(valor) {
    if (valor != '') {

        var moneda = $('#moneda').val();
        var simbolo = $('#moneda').find(':selected').data('simbolo');
        var montoMinimo = $('#moneda').find(':selected').data('monto-minimo');
        var montoMinimoFormat = $('#moneda').find(':selected').data('monto-minimo-format');

        $('#descripcion-monto').html('El monto mínimo es de ' + simbolo + ' ' + montoMinimoFormat);
        $('#monto').val(montoMinimo);
        $('#texto-monto').val(montoMinimo);
        $('#texto-moneda').html(simbolo);
        $('#texto-monto').removeAttr('readonly disabled');
        $('#texto-monto').focus();
        $('#plazo').removeAttr('readonly disabled');
        validarTipoPago(1);


    } else {

        $('#monto').val('');
        $('#texto-monto').val('');
        $('#plazo').val('').change();
        $('#tipo_pago').val('').change();
        $('#descripcion-monto').html('');
        $('#texto-monto').prop('disabled', true);
        $('#plazo').prop('disabled', true);

    }
}

async function simular(valor) {

    if (valor != '') {
        var monto = $('#monto').val();
        var moneda = $('#moneda').val();
        var monedaTexto = $('#moneda').find(':selected').data('texto');
        var textoMoneda = $('#moneda').find(':selected').data('simbolo');
        var textoMonto = $('#texto-monto').val();
        var pago = $('#tipo_pago').val();
        var pagoTexto = $('#tipo_pago').find(':selected').data('texto');
        var plazo = $('#plazo').val();
        var url = '/cargar-simulador';
        console.log(monto);
        $.post(url, {
            '_token': CSRF_TOKEN,
            'monto': monto,
            'pago': pago,
            'plazo': plazo
        }, function (data) {
            $('#simulador').hide();
            console.log(data);
            var montoData = data.total;
            var interes = 0;
            var totalSinFormato = 0;
            $('#simulador-completado').show(300);
            if (pago == '1') {
                $('#monto-cuota').html('<sup>' + textoMoneda + '</sup>' + montoData + '<span> / mensual</span>');
            } else {
                $('#monto-cuota').html('<sup>' + textoMoneda + '</sup>' + montoData + '<span> / total</span>');
                interes = data.interes;
            }
            $('#moneda-ultimo').html(monedaTexto);
            $('#monto-ultimo').html(textoMoneda + '' + textoMonto);
            $('#monto-modal').html(textoMoneda + '' + textoMonto);
            $('#tipo-pago-ultimo').html(pagoTexto);
            $('#tipo-pago-modal').html(pagoTexto);
            $('#tipo-plazo-ultimo').html((plazo / 12) + ' año(s)');
            $('#cuota-ultimo').html(plazo + ' cuotas');
            generarCuotas(montoData, plazo, textoMoneda, pago, interes, totalSinFormato);
        })
    }


}

async function simularInvertir(valor) {

    if (valor != '') {
        var monto = $('#monto').val();
        var moneda = $('#moneda').val();
        var textoMonto = $('#texto-monto').val();
        var plazo = $('#plazo').val();
        var monedaTexto = $('#moneda').find(':selected').data('texto');
        var textoMoneda = $('#moneda').find(':selected').data('simbolo');
        var url = '/cargar-simulador-invertir';
        $.post(url, {
            '_token': CSRF_TOKEN,
            'monto': monto,
            'plazo': plazo
        }, function (data) {
            console.log(data);
            $('#simulador').hide();
            $('#simulador-completado').show(300);
            $('#monto-cuota').html('<sup>' + textoMoneda + '</sup>' + data + '<span> / Ganancia</span>');
            $('#moneda-ultimo').html(monedaTexto);
            $('#monto-ultimo').html(textoMoneda + '' + textoMonto);
            $('#tipo-plazo-ultimo').html((plazo / 12) + ' año(s)');
            $('#cuota-ultimo').html(plazo + ' cuotas');
        })
    }


}

function reestablecerSimulador() {
    $('#moneda').val('').change();
    $('#monto').val('');
    $('#texto-monto').val('');
    $('#plazo').val('').change();
    $('#tipo_pago').val('').change();
    $('#simulador-completado').hide(600);
    $('#simulador').show();
    $('#descripcion-monto').html('');
    $('#moneda').attr('autofocus');
    $('#moneda').focus();
    $('#texto-monto').prop('disabled', true);
    $('#tipo_pago').prop('disabled', true);
    $('#plazo').prop('disabled', true);

}

function generarCuotas(total, cuotas, moneda, pago, interes) {
    var monto = $('#monto').val();
    var url = '/generar-cuotas';
    $.post(url, {
        '_token': CSRF_TOKEN,
        'moneda': moneda,
        'cuotas': cuotas,
        'total': total,
        'pago': pago,
        'interes': interes,
        'monto': monto,
    }, function (data) {
        $('#contenido-cuotas').html(data);
    })
}