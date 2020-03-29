<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table = 'ive_articulo';
    protected $primaryKey = 'cod_articulo';
    public $timestamps = false;
    protected $fillable = [
        'cod_articulo', 'desc_articulo', 'glosa_articulo', 'costo_unidad_articulo',
        'saldo_cantidad_articulo', 'stock_minimo_articulo', 'cod_sucursal',
        'stock_maximo_articulo', 'cod_almacen', 'cod_unidad', 'cod_moneda'
    ];

    public function sucursal() {
        return $this->belongsTo('App\Almacen', 'cod_sucursal', 'cod_sucursal');
    }
    public function almacen() {
        return $this->belongsTo('App\Almacen', 'cod_almacen', 'cod_almacen');
    }
    public function unidad() {
        return $this->belongsTo('App\Unidad', 'cod_unidad', 'cod_unidad');
    }
    public function moneda() {
        return $this->belongsTo('App\Moneda', 'cod_moneda', 'cod_moneda');
    }


}
