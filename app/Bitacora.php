<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bitacora extends Model
{
    protected $table = 'bitacora';
    protected $primaryKey = 'bitacora_id';
    protected $fillable = [
        'user_id',
        'tableName',
        'table_id',
        'actions',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }


}
