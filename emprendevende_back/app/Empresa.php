<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    //
    protected $table='empresa';
    protected $primaryKey='idRubro';
    public $timestamps=false;
    protected $fillable = [
        'nombreRubro','estado',
    ];

}
