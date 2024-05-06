<?php

namespace App\Http\Controllers;

use App\AFormaPago;
use App\ATiempoPago;
use App\ATipoMoneda;
use App\HDetalleProducto;
use App\PCarrusel;
use App\PColaborador;
use App\PConfiguracionBasica;
use App\PGaleria;
use App\PPreguntaFrecuente;
use App\PProducto;
use App\PTestimonio;
use App\RFormaTiempoPago;
use const http\Client\Curl\AUTH_ANY;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MantenimientoController extends Controller
{

    function configuracionesBasicas()
    {

        $configuracion = PConfiguracionBasica::find(1);
        return view('mantenimiento.configuraciones-basicas', compact('configuracion'));
    }

    function monedas()
    {

        $monedas = ATipoMoneda::get();
        return view('mantenimiento.monedas', compact('monedas'));
    }

    function guardarMoneda(Request $request)
    {
        ATipoMoneda::create([
            'no_tipo_moneda' => mb_strtoupper($request->moneda),
            'nu_monto_minimo' => $request->monto_minimo,
            'nc_tipo_moneda' => $request->simbolo,
            'in_estado' => 1,
            'co_usuario_modifica' => Auth::id(),
            'fe_usuario_modifica' => now()
        ]);

        return back();
    }

    function editarMoneda(Request $request)
    {
        $moneda = ATipoMoneda::find($request->_c);
        $moneda->no_tipo_moneda = mb_strtoupper($request->moneda);
        $moneda->nu_monto_minimo = $request->monto_minimo;
        $moneda->nc_tipo_moneda = $request->simbolo;
        $moneda->co_usuario_modifica = Auth::id();
        $moneda->fe_usuario_modifica = now();
        $moneda->save();

        return back();
    }

    function estadoMoneda($id)
    {
        $moneda = ATipoMoneda::find($id);
        $moneda->in_estado = $moneda->in_estado == 1 ? 0 : 1;
        $moneda->save();

        return back();
    }

    function formaPago()
    {

        $pagos = AFormaPago::get();
        $tiempos = ATiempoPago::where('in_estado', 1)->orderBy('nu_tiempo_meses', 'ASC')->get();

        return view('mantenimiento.forma-pago', compact('pagos', 'tiempos'));
    }

    function cargarFormaTiempoPago(Request $request)
    {

        $tiempos = ATiempoPago::where('in_estado', 1)->orderBy('nu_tiempo_meses', 'ASC')->get();
        $codigo = $request->codigo;
        return view('mantenimiento.ajax.cargar-forma-tiempo-pago', compact('tiempos', 'codigo'));
    }

    function guardarFormaTiempoPago(Request $request)
    {

        $tiempo = RFormaTiempoPago::where([
            'co_forma_pago' => $request->codigo,
            'co_tiempo_pago' => $request->tiempo,
        ])->first();

        if ($tiempo) {
            $tiempo->in_estado = $tiempo->in_estado == 1 ? 0 : 1;
            $tiempo->save();
        } else {
            RFormaTiempoPago::create([
                'co_forma_pago' => $request->codigo,
                'co_tiempo_pago' => $request->tiempo,
                'co_usuario_modifica' => Auth::id(),
                'fe_usuario_modifica' => now(),
                'in_estado' => 1
            ]);
        }


    }

    static function existeFormaTiempoPago($codigo, $tiempo)
    {
        $t = RFormaTiempoPago::where([
            'co_forma_pago' => $codigo,
            'co_tiempo_pago' => $tiempo,
        ])->first();

        if ($t)
            return $t->in_estado;
        else
            return 0;
    }

    function estadoFormaPago($id)
    {
        $forma = AFormaPago::find($id);
        $forma->in_estado = $forma->in_estado == 1 ? 0 : 1;
        $forma->save();

        return back();
    }

    function editarFormaPago(Request $request)
    {
        $formaPago = AFormaPago::find($request->codigo);
        $formaPago->no_forma_pago = mb_strtoupper($request->descripcion);
        $formaPago->nc_forma_pago = mb_strtoupper($request->descripcion);
        $formaPago->save();
    }

    function tiempoPago()
    {

        $tiempoPagos = ATiempoPago::orderBy('nu_tiempo_meses', 'ASC')->get();

        return view('mantenimiento.tiempo-pago', compact('tiempoPagos'));
    }

    function guardarTiempoPago(Request $request)
    {

        ATiempoPago::create([
            'no_tiempo_pago' => mb_strtoupper($request->descripcion),
            'nc_tiempo_pago' => mb_strtoupper($request->descripcion),
            'nu_tiempo_meses' => mb_strtoupper($request->meses),
            'in_estado' => 1,
        ]);

        return back();
    }

    function editarTiempoPago(Request $request)
    {
        $tiempoPago = ATiempoPago::find($request->_c);
        $tiempoPago->no_tiempo_pago = mb_strtoupper($request->descripcion);
        $tiempoPago->nc_tiempo_pago = mb_strtoupper($request->descripcion);
        $tiempoPago->nu_tiempo_meses = mb_strtoupper($request->meses);
        $tiempoPago->save();

        return back();
    }

    function estadoTiempoPago($id)
    {
        $tiempo = ATiempoPago::find($id);
        $tiempo->in_estado = $tiempo->in_estado == 1 ? 0 : 1;
        $tiempo->save();

        return back();
    }

    function guardarConfiguracionesBasicas(Request $request)
    {
        $configuracion = PConfiguracionBasica::find(1);
        if ($configuracion) {
            $configuracion->nu_tasa_prestamo = $request->tasa_prestamo;
            $configuracion->nu_tasa_inversion = $request->tasa_invertir;
            $configuracion->no_correo = $request->correo;
            $configuracion->no_telefonos = $request->telefono;
            $configuracion->no_whatsapp = $request->whatsapp;
            $configuracion->no_direccion = $request->direccion;
            $configuracion->no_facebook = $request->facebook;
            $configuracion->no_youtube = $request->youtube;
            $configuracion->no_instagram = $request->instagram;
            $configuracion->no_informacion = $request->informacion;
            $configuracion->link_presentacion = $request->video_presentacion;


            /*
             * IMAGENES DE PORTADA
             */
            if ($request->hasFile('imagen_portada_inicio')) {
                $file = $request->file('imagen_portada_inicio');
                $path = Storage::disk('public')->put('galeria_imagenes/', $file);
                $nombre = basename($path);
                $configuracion->url_portada_inicio = $nombre;
            }

            if ($request->hasFile('imagen_portada_prestamo')) {
                $file = $request->file('imagen_portada_prestamo');
                $path = Storage::disk('public')->put('galeria_imagenes/', $file);
                $nombre = basename($path);
                $configuracion->url_portada_prestamo = $nombre;
            }

            if ($request->hasFile('imagen_portada_inicio')) {
                $file = $request->file('imagen_portada_inicio');
                $path = Storage::disk('public')->put('galeria_imagenes/', $file);
                $nombre = basename($path);
                $configuracion->url_portada_inicio = $nombre;
            }




            if ($request->hasFile('imagen_portada_invertir')) {
                $file = $request->file('imagen_portada_invertir');
                $path = Storage::disk('public')->put('galeria_imagenes/', $file);
                $nombre = basename($path);
                $configuracion->url_portada_invertir = $nombre;

            }
            $configuracion->link_prestamo = $request->video_prestamo;


            if ($request->hasFile('imagen_factoring')) {
                $file = $request->file('imagen_factoring');
                $path = Storage::disk('public')->put('galeria_imagenes/', $file);
                $nombre = basename($path);
                $configuracion->url_factoring = $nombre;

            }
            $configuracion->link_factoring = $request->video_factoring;


            if ($request->hasFile('imagen_invertir')) {
                $file = $request->file('imagen_invertir');
                $path = Storage::disk('public')->put('galeria_imagenes/', $file);
                $nombre = basename($path);
                $configuracion->url_invertir = $nombre;

            }
            $configuracion->link_invertir = $request->video_invertir;


            $configuracion->save();

        } else {
            PConfiguracionBasica::create([
                'nu_tasa_prestamo' => $request->tasa_prestamo,
                'nu_tasa_inversion' => $request->tasa_invertir,
                'no_correo' => $request->correo,
                'no_telefonos' => $request->telefono,
                'no_whatsapp' => $request->whatsapp,
                'no_direccion' => $request->direccion,
                'no_facebook' => $request->facebook,
                'no_youtube' => $request->youtube,
                'no_instagram' => $request->instagram,
                'no_informacion' => $request->informacion,
            ]);
        }


        return back();
    }

    function inicio()
    {
        $carrusels = PCarrusel::orderBy('in_estado', 'desc')->get();
        return view('mantenimiento.inicio', compact('carrusels'));
    }

    function guardarCarrusel(Request $request)
    {
        $file = $request->file('imagen_carrusel');

        $path = Storage::disk('public')->put('carrusel_imagenes/', $file);
        $nombre = basename($path);
        $type = $file->getMimeType();
        $extension = $file->getClientOriginalExtension();

        PCarrusel::create([
            'url_carrusel' => asset($path),
            'no_carrusel' => $nombre,
            'ti_carrusel' => $type,
            'ti_original_carrusel' => $extension,
            'no_cabecera_carrusel' => $request->texto_carrusel,
            'no_detalle_carrusel' => $request->detalle_carrusel,
            'no_boton_carrusel' => $request->boton_carrusel,
            'no_link_carrusel' => $request->link_carrusel,
            'co_usuario_modifica' => Auth::id(),
            'fe_usuario_modifica' => now(),
            'in_estado' => 1,
        ]);

        return back();

    }

    function estadoCarrusel($id)
    {
        $carrusel = PCarrusel::find($id);
        $carrusel->in_estado = $carrusel->in_estado == 1 ? 0 : 1;
        $carrusel->save();

        return back();
    }

    function editarCarrusel($id)
    {

        $carrusel = PCarrusel::find($id);

        return view('mantenimiento.editar-carrusel', compact('carrusel'));
    }

    function guardarEditarCarrusel(Request $request)
    {
        $carrusel = PCarrusel::find($request->codigo);
        $carrusel->no_cabecera_carrusel = $request->texto_carrusel;
        $carrusel->no_detalle_carrusel = $request->detalle_carrusel;
        $carrusel->no_boton_carrusel = $request->boton_carrusel;
        $carrusel->no_link_carrusel = $request->link_carrusel;
        $carrusel->co_usuario_modifica = Auth::id();
        $carrusel->fe_usuario_modifica = now();
        $carrusel->save();


        if ($request->hasFile('imagen_carrusel')) {
            $file = $request->file('imagen_carrusel');

            $path = Storage::disk('public')->put('carrusel_imagenes', $file);
            $nombre = basename($path);
            $type = $file->getMimeType();
            $extension = $file->getClientOriginalExtension();

            $carrusel->url_carrusel = asset($path);
            $carrusel->no_carrusel = $nombre;
            $carrusel->ti_carrusel = $type;
            $carrusel->ti_original_carrusel = $extension;
            $carrusel->save();
        }

        return back();

    }

    function productos()
    {
        $productos = PProducto::whereNull('in_web')->orderBy('in_estado', 'desc')->get();
        return view('mantenimiento.productos', compact('productos'));
    }

    function guardarProducto(Request $request)
    {
        $file = $request->file('imagen_producto');

        $path = Storage::disk('public')->put('productos_imagenes', $file);
        $nombre = basename($path);
        $type = $file->getMimeType();
        $extension = $file->getClientOriginalExtension();

        PProducto::create([
            'url_producto' => asset($path),
            'no_producto' => $nombre,
            'ti_producto' => $type,
            'ti_original_producto' => $extension,
            'no_cabecera_producto' => $request->texto_producto,
            'no_detalle_producto' => $request->detalle_producto,
            'no_boton_producto' => $request->boton_producto,
            'no_link_producto' => $request->link_producto,
            'no_link_video' => $request->link_video,
            'co_usuario_modifica' => Auth::id(),
            'fe_usuario_modifica' => now(),
            'in_estado' => 1,
        ]);

        return back();
    }

    function estadoProducto($id)
    {
        $producto = PProducto::find($id);
        $producto->in_estado = $producto->in_estado == 1 ? 0 : 1;
        $producto->save();

        return back();
    }

    function editarProducto($id)
    {
        $producto = PProducto::find($id);
        return view('mantenimiento.editar-producto', compact('producto'));
    }

    function guardarEditarProducto(Request $request)
    {

        $carrusel = PProducto::find($request->codigo);
        $carrusel->no_cabecera_producto = $request->texto_producto;
        $carrusel->no_detalle_producto = $request->detalle_producto;
        $carrusel->no_boton_producto = $request->boton_producto;
        $carrusel->no_link_producto = $request->link_producto;
        $carrusel->no_link_video = $request->link_video;
        $carrusel->co_usuario_modifica = Auth::id();
        $carrusel->fe_usuario_modifica = now();
        $carrusel->save();


        if ($request->hasFile('imagen_producto')) {
            $file = $request->file('imagen_producto');

            $path = Storage::disk('public')->put('productos_imagenes', $file);
            $nombre = basename($path);
            $type = $file->getMimeType();
            $extension = $file->getClientOriginalExtension();

            $carrusel->url_producto = asset($path);
            $carrusel->no_producto = $nombre;
            $carrusel->ti_producto = $type;
            $carrusel->ti_original_producto = $extension;
            $carrusel->save();
        }

        return back();
    }

    function requisitosProducto($id)
    {
        $producto = PProducto::find($id);
        $requisitos = HDetalleProducto::where('co_producto', $id)->orderBy('in_estado', 'desc')
            ->select('h_detalle_producto.in_estado', 'h_detalle_producto.co_detalle_producto', 'h_detalle_producto.de_detalle_producto')
            ->get();
        return view('mantenimiento.requisitos-producto', compact('producto', 'requisitos'));
    }

    function guardarRequisito(Request $request)
    {
        HDetalleProducto::create([
            'co_producto' => $request->codigo,
            'de_detalle_producto' => $request->detalle_requisito,
            'co_usuario_modifica' => Auth::id(),
            'fe_usuario_modifica' => now(),
            'in_estado' => 1,
        ]);

        return back();
    }

    function estadoRequisito($id)
    {
        $requisito = HDetalleProducto::find($id);
        $requisito->in_estado = $requisito->in_estado == 1 ? 0 : 1;
        $requisito->save();

        return back();
    }

    function editarRequisito($id)
    {
        $requisito = HDetalleProducto::join('p_producto', 'h_detalle_producto.co_producto', 'p_producto.co_producto')
            ->where('co_detalle_producto', $id)
            ->select('h_detalle_producto.de_detalle_producto', 'no_cabecera_producto', 'co_detalle_producto',
                'h_detalle_producto.co_producto')
            ->first();

        return view('mantenimiento.editar-requisito', compact('requisito'));
    }

    function guardarEditarRequisito(Request $request)
    {

        $requisito = HDetalleProducto::findOrFail($request->codigo);
        $requisito->de_detalle_producto = $request->detalle_requisito;
        $requisito->co_usuario_modifica = Auth::id();
        $requisito->fe_usuario_modifica = now();
        $requisito->save();

        return back();
    }

    function testimonios()
    {

        $testimonios = PTestimonio::where('in_tipo', 1)->orderBy('in_estado', 'desc')->get();

        return view('mantenimiento.testimonios', compact('testimonios'));
    }

    function guardarTestimonio(Request $request)
    {

        $file = $request->file('imagen_testimonio');

        $path = Storage::disk('public')->put('testimonios_imagenes', $file);
        $nombre = basename($path);
        $type = $file->getMimeType();
        $extension = $file->getClientOriginalExtension();

        PTestimonio::create([
            'url_testimonio' => asset($path),
            'no_img_testimonio' => $nombre,
            'ti_testimonio' => $type,
            'ti_original_testimonio' => $extension,
            'no_link_video' => $request->link_video,
            'no_testimonio' => $request->nombre,
            'de_testimonio' => $request->detalle_testimonio,
            'in_estado' => 1,
            'in_tipo' => $request->tipo,
            'co_usuario_modifica' => Auth::id(),
            'fe_usuario_modifica' => now()
        ]);

        return back();

    }

    function estadoTestimonio($id)
    {
        $testimonio = PTestimonio::findOrFail($id);
        $testimonio->in_estado = $testimonio->in_estado == 1 ? 0 : 1;
        $testimonio->save();

        return back();
    }

    function editarTestimonio($id)
    {
        $testimonio = PTestimonio::findOrFail($id);
        return view('mantenimiento.editar-testimonio', compact('testimonio'));
    }

    function editarQuienesOpinan($id)
    {
        $testimonio = PTestimonio::findOrFail($id);
        return view('mantenimiento.editar-quienes-opinan', compact('testimonio'));
    }

    function guardarEditarTestimonio(Request $request)
    {
        $testimonio = PTestimonio::findOrFail($request->codigo);
        $testimonio->no_testimonio = $request->nombre;
        $testimonio->de_testimonio = $request->detalle_testimonio;
        $testimonio->no_link_video = $request->link_video;
        $testimonio->co_usuario_modifica = Auth::id();
        $testimonio->fe_usuario_modifica = now();
        $testimonio->save();

        if ($request->hasFile('imagen_testimonio')) {
            $file = $request->file('imagen_testimonio');

            $path = Storage::disk('public')->put('testimonios_imagenes', $file);
            $nombre = basename($path);
            $type = $file->getMimeType();
            $extension = $file->getClientOriginalExtension();

            $testimonio->url_testimonio = asset($path);
            $testimonio->no_img_testimonio = $nombre;
            $testimonio->ti_testimonio = $type;
            $testimonio->ti_original_testimonio = $extension;
            $testimonio->save();
        }

        return back();
    }

    function quienesOpinan()
    {

        $testimonios = PTestimonio::where('in_tipo', 2)->orderBy('in_estado', 'desc')->get();

        return view('mantenimiento.quienes-opinan', compact('testimonios'));
    }

    function colaboradores()
    {
        $colaboradores = PColaborador::orderBy('in_estado', 'desc')->get();
        return view('mantenimiento.colaboradores', compact('colaboradores'));
    }

    function guardarColaborador(Request $request)
    {
        $file = $request->file('imagen_colaborador');
        $path = Storage::disk('public')->put('colaboradores_imagenes', $file);
        $nombre = basename($path);
        $type = $file->getMimeType();
        $extension = $file->getClientOriginalExtension();

        PColaborador::create([
            'url_colaborador' => asset($path),
            'no_colaborador' => $nombre,
            'ti_colaborador' => $type,
            'ti_original_colaborador' => $extension,
            'no_nombre_colaborador' => $request->nombre_colaborador,
            'no_cargo_colaborador' => $request->cargo_colaborador,
            'no_link_colaborador' => $request->link_colaborador,
            'in_estado' => 1,
            'co_usuario_modifica' => Auth::id(),
            'fe_usuario_modifica' => now()
        ]);

        return back();
    }

    function estadoColaborador($id)
    {
        $colaborador = PColaborador::find($id);
        $colaborador->in_estado = $colaborador->in_estado == 1 ? 0 : 1;
        $colaborador->save();

        return back();
    }

    function editarColaborador($id)
    {
        $colaborador = PColaborador::findOrFail($id);
        return view('mantenimiento.editar-colaborador', compact('colaborador'));
    }

    function guardarEditarColaborador(Request $request)
    {
        $colaborador = PColaborador::findOrFail($request->codigo);
        $colaborador->no_nombre_colaborador = $request->nombre_colaborador;
        $colaborador->no_cargo_colaborador = $request->cargo_colaborador;
        $colaborador->no_link_colaborador = $request->link_colaborador;
        $colaborador->in_estado = 1;
        $colaborador->co_usuario_modifica = Auth::id();
        $colaborador->fe_usuario_modifica = now();
        $colaborador->save();

        if ($request->hasFile('imagen_colaborador')) {
            $file = $request->file('imagen_colaborador');

            $path = Storage::disk('public')->put('colaboradores_imagenes', $file);
            $nombre = basename($path);
            $type = $file->getMimeType();
            $extension = $file->getClientOriginalExtension();

            $colaborador->url_colaborador = asset($path);
            $colaborador->no_colaborador = $nombre;
            $colaborador->ti_colaborador = $type;
            $colaborador->ti_original_colaborador = $extension;
            $colaborador->save();
        }

        return back();
    }

    function preguntasFrecuentes()
    {
        $preguntas = PPreguntaFrecuente::orderBy('in_estado', 'desc')->get();
        return view('mantenimiento.preguntas-frecuentes', compact('preguntas'));
    }

    function guardarPreguntaFrecuente(Request $request)
    {
        PPreguntaFrecuente::create([
            'no_titulo_pregunta_frecuente' => $request->titulo,
            'no_detalle_pregunta_frecuente' => $request->detalle,
            'in_estado' => 1,
            'in_tipo' => $request->tipo,
            'co_usuario_modifica' => Auth::id(),
            'fe_usuario_modifica' => now(),
        ]);

        return back();
    }

    function estadoPreguntaFrecuente($id)
    {
        $pregunta = PPreguntaFrecuente::findOrFail($id);
        $pregunta->in_estado = $pregunta->in_estado == 1 ? 0 : 1;
        $pregunta->save();

        return back();
    }

    function editarPreguntaFrecuente($id)
    {
        $pregunta = PPreguntaFrecuente::findOrFail($id);
        return view('mantenimiento.editar-pregunta-frecuente', compact('pregunta'));
    }

    function guardarEditarPreguntaFrecuente(Request $request)
    {
        $pregunta = PPreguntaFrecuente::findOrFail($request->codigo);
        $pregunta->no_titulo_pregunta_frecuente = $request->titulo;
        $pregunta->no_detalle_pregunta_frecuente = $request->detalle;
        $pregunta->in_tipo = $request->tipo;
        $pregunta->co_usuario_modifica = Auth::id();
        $pregunta->fe_usuario_modifica = now();
        $pregunta->save();

        return back();
    }

    function galeria()
    {

        $fotos = PGaleria::orderBy('in_estado', 'DESC')->get();
        return view('mantenimiento.galeria', compact('fotos'));
    }

    function guardarGaleria(Request $request)
    {

        $file = $request->file('imagen_galeria');
        $path = Storage::disk('public')->put('galeria_imagenes', $file);
        $nombre = basename($path);
        $type = $file->getMimeType();
        $extension = $file->getClientOriginalExtension();

        PGaleria::create([
            'url_galeria' => asset($path),
            'ti_galeria' => $type,
            'ti_original_galeria' => $extension,
            'no_galeria' => $nombre,
            'in_estado' => 1,
            'co_usuario_modifica' => Auth::id(),
            'fe_usuario_modifica' => now(),
        ]);

        return back();
    }

    function estadoGaleria($id)
    {
        $foto = PGaleria::findOrFail($id);
        $foto->in_estado = $foto->in_estado == 1 ? 0 : 1;
        $foto->co_usuario_modifica = Auth::id();
        $foto->fe_usuario_modifica = now();
        $foto->save();

        return back();
    }

    function editarGaleria($id)
    {
        $foto = PGaleria::findOrFail($id);
        return view('mantenimiento.editar-galeria', compact('foto'));
    }

    function guardarEditarGaleria(Request $request)
    {

        $foto = PGaleria::findOrFail($request->codigo);

        if ($request->hasFile('imagen_galeria')) {
            $file = $request->file('imagen_galeria');

            $path = Storage::disk('public')->put('galeria_imagenes', $file);
            $nombre = basename($path);
            $type = $file->getMimeType();
            $extension = $file->getClientOriginalExtension();

            $foto->url_galeria = asset($path);
            $foto->no_galeria = $nombre;
            $foto->ti_galeria = $type;
            $foto->ti_original_galeria = $extension;
            $foto->co_usuario_modifica = Auth::id();
            $foto->fe_usuario_modifica = now();
            $foto->save();
        }

        return back();
    }

    function paginas()
    {
        $productos = PProducto::whereNotNull('in_web')->orderBy('in_estado', 'DESC')->orderBy('co_producto', 'DESC')->get();
        return view('mantenimiento.paginas', compact('productos'));
    }

    function guardarPagina(Request $request)
    {

        $producto = PProducto::create([
            'no_cabecera_producto' => $request->titulo,
            'no_detalle_producto' => $request->detalle,
            'co_usuario_modifica' => Auth::id(),
            'fe_usuario_modifica' => now(),
            'in_estado' => 1,
            'in_web' => $request->tipo_web,
            'in_seccion' => $request->tipo_seccion,
        ]);

        if ($request->hasFile('imagen')) {

            $file = $request->file('imagen');
            $path = Storage::disk('public')->put('galeria_imagenes', $file);
            $nombre = basename($path);
            $type = $file->getMimeType();
            $extension = $file->getClientOriginalExtension();

            $producto->url_producto = asset($path);
            $producto->no_producto = $nombre;
            $producto->ti_producto = $type;
            $producto->ti_original_producto = $extension;
            $producto->save();

        }


        return back();
    }

    function editarPagina($id)
    {
        $producto = PProducto::findOrFail($id);
        return view('mantenimiento.editar-pagina', compact('producto'));
    }

    function guardarEditarPagina(Request $request)
    {
        $producto = PProducto::findOrFail($request->codigo);
        $producto->no_cabecera_producto = $request->titulo;
        $producto->no_detalle_producto = $request->detalle;
        $producto->co_usuario_modifica = Auth::id();
        $producto->fe_usuario_modifica = now();
        $producto->in_web = $request->tipo_web;
        $producto->in_seccion = $request->tipo_seccion;
        $producto->save();

        if ($request->hasFile('imagen')) {

            $file = $request->file('imagen');
            $path = Storage::disk('public')->put('galeria_imagenes', $file);
            $nombre = basename($path);
            $type = $file->getMimeType();
            $extension = $file->getClientOriginalExtension();

            $producto->url_producto = asset($path);
            $producto->no_producto = $nombre;
            $producto->ti_producto = $type;
            $producto->ti_original_producto = $extension;
            $producto->save();

        }

        return back();
    }
}
