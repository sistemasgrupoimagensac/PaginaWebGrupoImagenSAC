<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AFormaPago extends Model
{
    protected $table = 'a_forma_pago';

    protected $primaryKey = 'co_forma_pago';

    public $timestamps = false;

    protected $fillable = [
        'co_forma_pago', 'no_forma_pago', 'nc_forma_pago', 'in_estado'
    ];

    function scopeDescripcion($query, $descripcion)
    {
        if ($descripcion)
            $query->where('no_forma_pago', 'LIKE', "%{$descripcion}%");
    }
}
