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
use Illuminate\Http\Request;

class PaginaWebController extends Controller
{

    function welcome()
    {

        $carrusels = PCarrusel::where('in_estado', 1)->get();
        $productos = PProducto::whereNull('in_web')->where('in_estado', 1)->get();
        $testimonios = PTestimonio::where([
            'in_estado' => 1,
            'in_tipo' => 1,
        ])->get();
        $opiniones = PTestimonio::where([
            'in_estado' => 1,
            'in_tipo' => 2,
        ])->get();
        $configuracion = PConfiguracionBasica::find(1);

        return view('welcome', compact('carrusels', 'productos',
            'testimonios', 'opiniones', 'configuracion'));
    }

    static function requisitosDeProducto($id)
    {
        return HDetalleProducto::where([
            'in_estado' => 1,
            'co_producto' => $id,
        ])->orderBy('co_detalle_producto', 'ASC')->get();
    }

    function prestamos()
    {

        $monedas = ATipoMoneda::where('in_estado', 1)->get();
        $pagos = AFormaPago::where('in_estado', 1)->get();
        $configuracion = PConfiguracionBasica::find(1);
        $preguntas = PPreguntaFrecuente::where([
            'in_estado' => 1,
            'in_tipo' => 1,
        ])->get();

        $pasos = PProducto::where([
            'in_web' => 1,
            'in_seccion' => 1,
            'in_estado' => 1,
        ])->get();

        $beneficios = PProducto::where([
            'in_web' => 1,
            'in_seccion' => 2,
            'in_estado' => 1,
        ])->get();

        $requisitos = PProducto::where([
            'in_web' => 1,
            'in_seccion' => 3,
            'in_estado' => 1,
        ])->get();

        return view('pagina-web.prestamos', compact('monedas', 'pagos',
            'configuracion', 'preguntas', 'pasos', 'beneficios', 'requisitos'));
    }

    function factoring()
    {
        $preguntas = PPreguntaFrecuente::where([
            'in_estado' => 1,
            'in_tipo' => 2,
        ])->get();

        $pasos = PProducto::where([
            'in_web' => 2,
            'in_seccion' => 1,
            'in_estado' => 1,
        ])->get();

        $beneficios = PProducto::where([
            'in_web' => 2,
            'in_seccion' => 2,
            'in_estado' => 1,
        ])->get();

        $requisitos = PProducto::where([
            'in_web' => 2,
            'in_seccion' => 3,
            'in_estado' => 1,
        ])->get();

        $configuracion = PConfiguracionBasica::find(1);


        return view('pagina-web.factoring', compact('preguntas',
            'pasos', 'beneficios', 'requisitos', 'configuracion'));
    }

    function invertir()
    {
        $preguntas = PPreguntaFrecuente::where([
            'in_estado' => 1,
            'in_tipo' => 3,
        ])->get();
        $monedas = ATipoMoneda::where('in_estado', 1)->get();
        $configuracion = PConfiguracionBasica::find(1);

        $pasos = PProducto::where([
            'in_web' => 3,
            'in_seccion' => 1,
            'in_estado' => 1,
        ])->get();

        $beneficios = PProducto::where([
            'in_web' => 3,
            'in_seccion' => 2,
            'in_estado' => 1,
        ])->get();

        $requisitos = PProducto::where([
            'in_web' => 3,
            'in_seccion' => 3,
            'in_estado' => 1,
        ])->get();

        return view('pagina-web.invertir', compact('monedas', 'preguntas', 'configuracion',
            'pasos', 'beneficios', 'requisitos'));
    }

    function preguntasFrecuentes()
    {
        $preguntas = PPreguntaFrecuente::where([
            'in_estado' => 1,
        ])->get();
        return view('pagina-web.preguntas-frecuentes', compact('preguntas'));
    }

    function nosotros()
    {
        $colaboradores = PColaborador::where('in_estado', 1)->get();

        return view('pagina-web.nosotros', compact('colaboradores'));
    }

    function galeria()
    {

        $fotos = PGaleria::where('in_estado', 1)->get();
        return view('pagina-web.galeria', compact('fotos'));
    }

    function convierteteEnAsesor()
    {
        return view('pagina-web.conviertete-en-asesor');
    }

    function recomiendaYGana()
    {
        return view('pagina-web.recomienda-y-gana');
    }

    function cargarSimulador(Request $request)
    {

        $configuracion = PConfiguracionBasica::find(1);
        $tasa = $configuracion->nu_tasa_prestamo;
        $pago = $request->pago;
        $monto = $request->monto;
        $meses = -$request->plazo;

        if ($pago == 1) {
            $a = $monto * $tasa / 100;
            $b = (1 + $tasa / 100);
            $c = pow($b, $meses);
            $d = 1 - $c;
            $e = $a / $d;
            $total = number_format($e, 2, '.', ',');
            return response()->json(['total' => $total]);
        } else if ($pago == 2) {
            $meses = $request->plazo;
            $interes = $monto * $tasa / 100;
            $total = ($interes * $meses) + $monto;
            $total = number_format($total, 2, '.', ',');
            return response()->json(['total' => $total, 'interes' => $interes]);
        } else if ($pago == 3) {
            $meses = $request->plazo;
            $interes = $monto * $tasa / 100;
            $total = ($interes * $meses) + $monto;
            $total = number_format($total, 2, '.', ',');
            return response()->json(['total' => $total, 'interes' => $interes]);
        }
    }

    function cargarSimuladorInvertir(Request $request)
    {
        $configuracion = PConfiguracionBasica::find(1);
        $tasa = $configuracion->nu_tasa_inversion;
        $monto = $request->monto;
        $meses = -$request->plazo;

        $a = $monto * $tasa / 100;
        $b = (1 + $tasa / 100);
        $c = pow($b, $meses);
        $d = 1 - $c;
        $e = $a / $d;
        $total = ($e * $request->plazo) - $monto;
        $total = number_format($total, 2, '.', ',');
        return $total;

    }

    function cargarSimulador2()
    {
        $tasa = 2.0;
        $monto = 200000;
        $meses = -6;
        $a = $monto * $tasa / 100;
        $b = (1 + $tasa / 100);
        $c = pow($b, $meses);
        $d = 1 - $c;
        $e = $a / $d;
        $total = number_format($e, 2, '.', ',');

        return $total;
    }

    function generarCuotas(Request $request)
    {
        $cuotas = $request->cuotas;
        $total = $request->total;
        $moneda = $request->moneda;
        $pago = $request->pago;
        $interes = $request->interes;
        $monto = $request->monto;
        return view('pagina-web.ajax.generar-cuotas', compact('cuotas', 'total', 'moneda', 'pago', 'interes', 'monto'));
    }

    function cargarTiempoPagoPorFormaPago(Request $request)
    {
        $tiempos = RFormaTiempoPago::join('a_tiempo_pago', 'r_forma_tiempo_pago.co_tiempo_pago', 'a_tiempo_pago.co_tiempo_pago')
            ->where([
                'r_forma_tiempo_pago.co_forma_pago' => $request->codigo,
                'r_forma_tiempo_pago.in_estado' => 1,
            ])
            ->select('r_forma_tiempo_pago.co_tiempo_pago', 'a_tiempo_pago.no_tiempo_pago', 'nu_tiempo_meses')
            ->get();
        return view('pagina-web.ajax.tiempos-por-forma-pago', compact('tiempos'));
    }

    function landingInvertir()
    {
        return view('landing.invertir');
    }
}
