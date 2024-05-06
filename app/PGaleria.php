<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PGaleria extends Model
{
    protected $table = 'p_galeria';

    protected $primaryKey = 'co_galeria';

    public $timestamps = false;

    protected $fillable = [
        'co_galeria', 'no_galeria', 'in_estado', 'co_usuario_modifica', 'fe_usuario_modifica',
        'url_galeria', 'ti_galeria', 'ti_original_galeria'
    ];
}
