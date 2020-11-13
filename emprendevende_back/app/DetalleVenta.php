<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    //
    protected $table='detalle_subventa';
    protected $primaryKey='id_detalle';
    public $timestamps=false;
    protected $fillable = [
        'id_detalle	cantidad','precioTotal','idPRODUCTO','idSUB_VENTA',
    ];
}
