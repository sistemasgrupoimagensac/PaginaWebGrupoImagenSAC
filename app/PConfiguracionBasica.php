<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PConfiguracionBasica extends Model
{
    protected $table = 'p_configuracion_basica';

    protected $primaryKey = 'co_configuracion_basica';

    public $timestamps = false;

    protected $fillable = [
        'co_configuracion_basica', 'nu_tasa_prestamo', 'nu_tasa_inversion',
        'no_correo', 'no_telefonos', 'no_whatsapp', 'no_direccion', 'no_facebook',
        'no_youtube', 'no_instagram', 'no_informacion',
        'url_prestamo', 'link_prestamo',
        'url_factoring', 'link_factoring',
        'url_invertir', 'link_invertir',
        'link_presentacion',


        'url_portada_inicio',
        'url_portada_prestamo',
        'url_portada_invertir',
    ];
}
