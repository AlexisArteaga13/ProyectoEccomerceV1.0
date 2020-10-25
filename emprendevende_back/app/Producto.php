<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $table='producto';
    protected $primaryKey='idPRODUCTO';
    public $timestamps=false;
    protected $fillable = [
        'nombreProducto','precio','marca'
    ];
}
