<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    //
    protected $primaryKey ='cod_unidad';
    protected $table="ive_unidad";
    protected $fillable=['desc_unidad', 'cod_sucursal', 'enviado'];
    public $timestamps = false;
}
