<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class CorreosController extends Controller
{
    //
    public function verify($code){
        $user = User::where('email_verified_at', $code)->first();

        if (! $user)
            return redirect('/');
    
        $user->estado = true;
       // $user->confirmation_code = null;
        $user->save();
    
        return redirect('/home')->with('notification', 'Has confirmado correctamente tu correo!');
    
    }
}
