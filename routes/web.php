<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PaginaWebController@welcome');

Route::get('/plantilla', function () {
    return view('welcome2');
});

Route::get('/prestamos', 'PaginaWebController@prestamos');
Route::get('/factoring', 'PaginaWebController@factoring');
Route::get('/invertir', 'PaginaWebController@invertir');
Route::get('/nosotros', 'PaginaWebController@nosotros');
Route::get('/galeria', 'PaginaWebController@galeria');
Route::get('/preguntas-frecuentes', 'PaginaWebController@preguntasFrecuentes');
Route::get('/conviertete-en-asesor', 'PaginaWebController@convierteteEnAsesor');
Route::get('/recomienda-y-gana', 'PaginaWebController@recomiendaYGana');

Route::post('/cargar-simulador', 'PaginaWebController@cargarSimulador');
Route::post('/cargar-simulador-invertir', 'PaginaWebController@cargarSimuladorInvertir');
Route::post('/generar-cuotas', 'PaginaWebController@generarCuotas');
Route::post('/cargar-tiempo-pago-por-forma-pago', 'PaginaWebController@cargarTiempoPagoPorFormaPago');
Route::get('/cargar-simulador-2', 'PaginaWebController@cargarSimulador2');

Route::get('/politicas-privacidad','PaginaWebController@politicasPrivacidad')->name('politicas-privacidad');

Route::get('/landing-invertir', 'PaginaWebController@landingInvertir');

Route::get('/usuario', function () {

    \App\User::create([
        'name' => 'ADMINISTRADOR',
        'email' => 'administrador@grupoimagensac.com',
        'password' => bcrypt(123456),
        'in_estado' => 1,
    ]);

});

Auth::routes();

Route::get('register', function () {
    abort(404);
});

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'administrador', 'middleware' => ['auth']], function () {
    Route::get('configuraciones-basicas', 'MantenimientoController@configuracionesBasicas');
    Route::post('guardar-configuraciones-basicas', 'MantenimientoController@guardarConfiguracionesBasicas');

    Route::get('monedas', 'MantenimientoController@monedas');
    Route::post('guardar-moneda', 'MantenimientoController@guardarMoneda');
    Route::post('editar-moneda', 'MantenimientoController@editarMoneda');
    Route::get('estado-moneda/{id}', 'MantenimientoController@estadoMoneda');

    Route::get('forma-pago', 'MantenimientoController@formaPago');
    Route::get('estado-forma-pago/{id}', 'MantenimientoController@estadoFormaPago');
    Route::post('cargar-data-solicitante', 'MantenimientoController@cargarFormaTiempoPago');
    Route::post('guardar-forma-tiempo-pago', 'MantenimientoController@guardarFormaTiempoPago');


    Route::get('tiempo-pago', 'MantenimientoController@tiempoPago');
    Route::post('guardar-tiempo-pago', 'MantenimientoController@guardarTiempoPago');
    Route::post('editar-tiempo-pago', 'MantenimientoController@editarTiempoPago');
    Route::get('estado-tiempo-pago/{id}', 'MantenimientoController@estadoTiempoPago');


    Route::get('inicio', 'MantenimientoController@inicio');
    Route::post('guardar-carrusel', 'MantenimientoController@guardarCarrusel');
    Route::get('estado-carrusel/{id}', 'MantenimientoController@estadoCarrusel');
    Route::get('editar-carrusel/{id}', 'MantenimientoController@editarCarrusel');
    Route::post('editar-carrusel', 'MantenimientoController@guardarEditarCarrusel');

    Route::get('productos', 'MantenimientoController@productos');
    Route::post('guardar-producto', 'MantenimientoController@guardarProducto');
    Route::get('estado-producto/{id}', 'MantenimientoController@estadoProducto');
    Route::get('editar-producto/{id}', 'MantenimientoController@editarProducto');
    Route::post('editar-producto', 'MantenimientoController@guardarEditarProducto');
    Route::get('requisitos-producto/{id}', 'MantenimientoController@requisitosProducto');
    Route::post('guardar-requisito', 'MantenimientoController@guardarRequisito');
    Route::get('estado-requisito/{id}', 'MantenimientoController@estadoRequisito');
    Route::get('editar-requisito/{id}', 'MantenimientoController@editarRequisito');
    Route::post('editar-requisito', 'MantenimientoController@guardarEditarRequisito');


    Route::get('paginas', 'MantenimientoController@paginas');
    Route::post('guardar-pagina', 'MantenimientoController@guardarPagina');
    Route::get('estado-pagina/{id}', 'MantenimientoController@estadoPagina');
    Route::get('editar-pagina/{id}', 'MantenimientoController@editarPagina');
    Route::post('editar-pagina', 'MantenimientoController@guardarEditarPagina');

    Route::get('testimonios', 'MantenimientoController@testimonios');
    Route::post('guardar-testimonio', 'MantenimientoController@guardarTestimonio');
    Route::get('estado-testimonio/{id}', 'MantenimientoController@estadoTestimonio');
    Route::get('editar-testimonio/{id}', 'MantenimientoController@editarTestimonio');
    Route::post('editar-testimonio', 'MantenimientoController@guardarEditarTestimonio');

    Route::get('galeria', 'MantenimientoController@galeria');
    Route::post('guardar-galeria', 'MantenimientoController@guardarGaleria');
    Route::get('estado-galeria/{id}', 'MantenimientoController@estadoGaleria');
    Route::get('editar-galeria/{id}', 'MantenimientoController@editarGaleria');
    Route::post('editar-galeria', 'MantenimientoController@guardarEditarGaleria');

    Route::get('quienes-opinan', 'MantenimientoController@quienesOpinan');
    Route::get('editar-quienes-opinan/{id}', 'MantenimientoController@editarQuienesOpinan');

    Route::get('colaboradores', 'MantenimientoController@colaboradores');
    Route::post('guardar-colaborador', 'MantenimientoController@guardarColaborador');
    Route::get('estado-colaborador/{id}', 'MantenimientoController@estadoColaborador');
    Route::get('editar-colaborador/{id}', 'MantenimientoController@editarColaborador');
    Route::post('editar-colaborador', 'MantenimientoController@guardarEditarColaborador');

    Route::get('preguntas-frecuentes', 'MantenimientoController@preguntasFrecuentes');
    Route::post('guardar-pregunta-frecuente', 'MantenimientoController@guardarPreguntaFrecuente');
    Route::get('estado-pregunta-frecuente/{id}', 'MantenimientoController@estadoPreguntaFrecuente');
    Route::get('editar-pregunta-frecuente/{id}', 'MantenimientoController@editarPreguntaFrecuente');
    Route::post('editar-pregunta-frecuente', 'MantenimientoController@guardarEditarPreguntaFrecuente');
});

