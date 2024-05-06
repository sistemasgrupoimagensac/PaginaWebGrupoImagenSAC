<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HDetalleProducto extends Model
{
    protected $table = 'h_detalle_producto';

    protected $primaryKey = 'co_detalle_producto';

    public $timestamps = false;

    protected $fillable = [
        'co_detalle_producto', 'co_producto', 'de_detalle_producto', 'co_usuario_modifica',
        'fe_usuario_modifica', 'in_estado'
    ];
}
