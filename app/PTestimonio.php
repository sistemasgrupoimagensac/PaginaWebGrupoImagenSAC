<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PTestimonio extends Model
{
    protected $table = 'p_testimonio';

    protected $primaryKey = 'co_testimonio';

    public $timestamps = false;

    protected $fillable = [
        'co_testimonio', 'no_testimonio', 'de_testimonio', 'in_estado', 'co_usuario_modifica', 'fe_usuario_modifica',
        'url_testimonio', 'no_img_testimonio', 'ti_testimonio', 'ti_original_testimonio', 'no_link_video', 'in_tipo'
    ];
}
