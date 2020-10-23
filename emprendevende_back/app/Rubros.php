<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rubros extends Model
{
    //
    protected $table='rubro';
    protected $primaryKey='id';
    public $timestamps=false;
    protected $fillable = [
        'nombreRubro','estado',
    ];
}
