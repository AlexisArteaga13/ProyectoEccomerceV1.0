<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MetodoPago extends Model
{
    //
    protected $table='metodo_pago';
    protected $primaryKey='idMETODO_PAGO';
    public $timestamps=false;
    protected $fillable = [
        'codigo','tipo','estado',
    ];
}
