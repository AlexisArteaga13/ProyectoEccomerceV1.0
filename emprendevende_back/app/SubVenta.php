<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubVenta extends Model
{
    //
    protected $table='sub_venta';
    protected $primaryKey='idSUB_VENTA';
    public $timestamps=false;
    protected $fillable = [
        'precioBruto','precioNeto','idVenta'
    ];
}
