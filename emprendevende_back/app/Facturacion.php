<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facturacion extends Model
{
    //
    protected $table='facturacion';
    protected $primaryKey='idFACTURACIÓN';
    public $timestamps=true;
    protected $fillable = [
        'codigoFactura','estado','fechaEmision','fechaPago',
        'importe','detalle','descuento','idPLAN','idMETODO_PAGO','created_at','idUsuario','codigoLetra'
    ];
}
