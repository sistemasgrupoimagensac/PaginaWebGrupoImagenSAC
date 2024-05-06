<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ATipoMoneda extends Model
{
    protected $table = 'a_tipo_moneda';

    public $timestamps = false;

    protected $primaryKey = 'co_tipo_moneda';

    protected $fillable = [
        'co_tipo_moneda', 'no_tipo_moneda',
        'nu_monto_minimo',
        'nc_tipo_moneda', 'in_estado', 'co_usuario_modifica', 'fe_usuario_modifica'
    ];
}
