<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PColaborador extends Model
{
    protected $table = 'p_colaborador';

    protected $primaryKey = 'co_colaborador';


    public $timestamps = false;

    protected $fillable = [
        'co_colaborador', 'no_nombre_colaborador', 'no_cargo_colaborador', 'no_link_colaborador',
        'url_colaborador', 'no_colaborador', 'ti_colaborador', 'ti_original_colaborador',
        'in_estado', 'co_usuario_modifica', 'fe_usuario_modifica'
    ];
}
