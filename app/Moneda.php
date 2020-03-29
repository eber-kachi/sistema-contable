<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moneda extends Model
{
    protected $table = 'gnl_config_moneda';
    protected $primaryKey = 'cod_moneda';
    public $timestamps = false;
    protected $fillable = [
        'cod_moneda', 'cod_sucursal', 'enviado'
    ];

}
