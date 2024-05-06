var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

var soloNumerosYPunto = function (e) {
    var key = window.Event ? e.which : e.keyCode;
    return ((key >= 48 && key <= 57) || key == 46);
};

var soloNumeros = function (e) {
    var key = window.Event ? e.which : e.keyCode;
    return ((key >= 48 && key <= 57));
};

function modalEditarMoneda(codigo, moneda, simbolo, monto) {

    $('#_c').val(codigo);
    $('#moneda_editar').val(moneda);
    $('#simbolo_editar').val(simbolo);
    $('#monto_minimo_editar').val(monto);
    $('.modalEditarMoneda').modal('show');

}

function modalEditarTiempoPago(codigo, texto, meses) {
    $('#_c').val(codigo);
    $('#editar_descripcion').val(texto);
    $('#editar_meses').val(meses);
    $('.modalEditarTiempoPago').modal('show');
}

function abrirModalTiempoPago(id) {
    $('#_c').val(id);
    var url = '/administrador/cargar-data-solicitante';
    $.post(url, {
        '_token': CSRF_TOKEN,
        'codigo': id,
    }, function (data) {
        $('.modalTiempoPago').modal('show');
        $('#contenido-tiempo').html(data);
    })
}

function guardarFormaTiempoPago(id) {
    var codigo = $('#_c').val();
    var url = '/administrador/guardar-forma-tiempo-pago';
    $.post(url, {
        '_token': CSRF_TOKEN,
        'codigo': codigo,
        'tiempo': id,
    }, function (data) {

    })

}