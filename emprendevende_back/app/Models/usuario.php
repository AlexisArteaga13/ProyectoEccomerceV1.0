<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class usuario extends Authenticatable
{
    //
    use Notifiable;
    //
    protected $table = 'usuario';
    protected $primaryKey= 'id';
    public $timestamps = true;
    protected $fillable = [
        'Nombres',	
        'Apellidos',	
        'correo',	
        'dni',	
        'celular',	
        'dirección',	
        'contraseña',	
        'idRol',	
        'estado'
    ];
}
