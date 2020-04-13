<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bitacora extends Model
{
    protected $table = 'bitacora';
    protected $primaryKey = 'bitacora_id';
    protected $fillable = [
        'user_id',
        'table',
        'table_id',
        'actions',
    ];
}
