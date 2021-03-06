<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table='empresa';
    protected $primaryKey='idEmpresa';
    public $timestamps=true;
    protected $fillable = [
        'nombreEmpresa','cuenta_transferencia','descripcion','vision','mision',
        'logo_img_empresa','ruc','telefono','razonSocial','fechaRegistro',
        'calificacion','idRubro','idUsuario','created_at','updated_at',
    ];
    
}

