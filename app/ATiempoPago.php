<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ATiempoPago extends Model
{
    protected $table = 'a_tiempo_pago';

    protected $primaryKey = 'co_tiempo_pago';

    public $timestamps = false;

    protected $fillable = [
        'co_tiempo_pago', 'no_tiempo_pago', 'nc_tiempo_pago', 'nu_tiempo_meses', 'in_estado'
    ];

    function scopeDescripcion($query, $descripcion)
    {
        if ($descripcion)
            $query->where('no_tiempo_pago', 'LIKE', "%{$descripcion}%");
    }
}
