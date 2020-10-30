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
        'nombreProducto','precio','marca','peso',
        'stock','unidad','descripcion','vistas','calificacion',
        'imagen_f','imagen_p','imagen_iz','imagen_d','imagen_s','imagen_in',
        'idCategoria','idEmpresa','estado','destacado',
    ];
}
