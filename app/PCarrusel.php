<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PCarrusel extends Model
{
    protected $table = 'p_carrusel';

    protected $primaryKey = 'co_carrusel';

    public $timestamps = false;

    protected $fillable = [
        'co_carrusel', 'url_carrusel', 'no_carrusel', 'ti_carrusel', 'ti_original_carrusel', 'no_cabecera_carrusel'
        , 'no_detalle_carrusel', 'no_boton_carrusel', 'co_usuario_modifica', 'fe_usuario_modifica', 'in_estado',
        'no_link_carrusel'
    ];
}
