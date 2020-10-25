<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    //
    protected $table='plan';
    protected $primaryKey='idPLAN';
    public $timestamps=false;
    protected $fillable = [
        'nombrePlan','slogan','detalle','costoMensual',
        'costoAnual','estado',
    ];
}
