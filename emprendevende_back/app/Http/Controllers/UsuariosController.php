<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
class UsuariosController extends Controller
{
    //
    public function __construct()
    {
        /*$this->middleware('auth');

        $this->middleware('log')->only('index');

        $this->middleware('subscribed')->except('store');*/
    }
    public function crear_user_vendedor(Request $request){       
         $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'apellidos' => ['required', 'string', 'max:255'],
            'clave' => ['required', 'string', 'min:8', 'confirmed'],

        ]);
            $request['codconfirmar']= Str::random(25);
      //else{
            $nuevovendedor=new User();
            $nuevovendedor->name = request('name');
            $nuevovendedor->apellidos = request('apellidos');
            $nuevovendedor->email = request('email');
            $nuevovendedor->password = bcrypt(request('clave'));
            $nuevovendedor->email_verified_at=request('codconfirmar');
            $nuevovendedor->estado='0';
            $nuevovendedor->save();
            $nuevovendedor -> asignarRol(1);
            Mail::send('emails.confirmarcorreo', $request->all(), function($message) use ($request) {
                $message->to($request['email'], $request['name'])->subject('Por favor confirma tu correo');
            });
            
           return back()->with('info','Verifique su correo electrónico.');
           //return $nuevovendedor;
       // }
    }

}
