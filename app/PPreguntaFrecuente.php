<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PPreguntaFrecuente extends Model
{
    protected $table = 'p_pregunta_frecuente';

    protected $primaryKey = 'co_pregunta_frecuente';

    public $timestamps = false;

    /*
     * TIPO
     * 1 = prestamo
     * 2 = factoring
     * 3 = invertir
     */

    protected $fillable = [
        'co_pregunta_frecuente', 'no_titulo_pregunta_frecuente', 'no_detalle_pregunta_frecuente', 'in_estado',
        'in_tipo', 'co_usuario_modifica', 'fe_usuario_modifica',
    ];
}
