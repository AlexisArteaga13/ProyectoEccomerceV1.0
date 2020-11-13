<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    //
    protected $table='venta';
    protected $primaryKey='idVENTA';
    public $timestamps=false;
    protected $fillable = [
        'importeFinal','fecha','impuesto','estado'
    ];
}
