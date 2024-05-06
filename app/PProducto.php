<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PProducto extends Model
{
    protected $table = 'p_producto';

    protected $primaryKey = 'co_producto';

    public $timestamps = false;

    /*
     * IN_WEB
     * 1 = prestamos
     * 2 = factoring
     * 3 = invertir
     *
     *
     * IN_SECCION
     * 1 = pasos
     * 2 = beneficios
     * 3 = requisitos o caracteristicas
     */

    protected $fillable = [
        'co_producto', 'url_producto', 'no_producto', 'ti_producto', 'ti_original_producto', 'no_cabecera_producto'
        , 'no_detalle_producto', 'no_boton_producto', 'co_usuario_modifica', 'fe_usuario_modifica', 'in_estado',
        'no_link_producto', 'no_link_video', 'in_web', 'in_seccion',
    ];
}
