<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransaccionArticulo extends Model
{
    protected $table = 'ive_transaccion_articulo';
    protected $primaryKey = 'nc_trans_articulo';
    public $timestamps = false;
    protected $fillable = [
        'nc_trans_articulo' ,'cod_almacen','cod_grupo_almacen','cod_articulo','cod_moneda',
        'cod_trans','cuenta_solicitud','cuenta_consumo','fecha_trans_articulo','hora_trans_articulo',
        'glosa_trans_articulo','cantidad_trans_articulo','costo_unidad_articulo','saldo_cantidad_articulo',
        'saldo_costo_articulo','tipo_cambio_moneda','usuario_registro','usuario_consumo','cod_sucursal ','enviado'
    ];

    public function almacen() {
        return $this->belongsTo('App\Almacen','cod_almacen','cod_almacen');
    }
 //   public function grupo_almacen() {
   //     return $this->belongsTo('App\GrupoAlmacen','cod_grupo_almacen','cod_grupo_almacen');
   // }
    public function articulo() {
        return $this->belongsTo('App\Articulo', 'cod_articulo', 'cod_articulo');
    }
    public function moneda() {
        return $this->belongsTo('App\Moneda', 'cod_moneda', 'cod_moneda');
    }
 //   public function transaccion() {
   //     return $this->belongsTo('App\Transaccion','cod_trans','cod_trans');
   // }
   public function sucursal() {
    return $this->belongsTo('App\Almacen', 'cod_sucursal', 'cod_sucursal');
    }

    public function unidad() {
        return $this->belongsTo('App\Unidad', 'cod_unidad', 'cod_unidad');
    }



}
