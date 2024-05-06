<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RFormaTiempoPago extends Model
{
    protected $table = 'r_forma_tiempo_pago';

    protected $primaryKey = 'co_forma_tiempo_pago';

    public $timestamps = false;

    protected $fillable = [
        'co_forma_tiempo_pago', 'co_forma_pago', 'co_tiempo_pago', 'co_usuario_modifica',
        'fe_usuario_modifica', 'in_estado'
    ];
}
