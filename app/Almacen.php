<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Almacen extends Model
{
    protected $table = 'IVE_Almacen';
    protected $primaryKey = 'cod_almacen';
    protected $fillable = [
        'cod_almacen',
        'desc_almacen',
        'cod_sucursal',
        'enviado'
    ];
    public $timestamps = false;
}
