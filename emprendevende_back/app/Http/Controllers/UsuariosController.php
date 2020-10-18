<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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

       /*$validator = Validator::make($request->all(),[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'apellidos' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

      
        ]
        );*/
      //  if ($validator->fails()) {
            //return $validator->messages()->all()[0];
        //    return back()->with('error',$validator->messages()->all()[0])->withInput();
           // return $validator->messages()->all()[0]->withInput();
      //  }
        
         $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'apellidos' => ['required', 'string', 'max:255'],
            'clave' => ['required', 'string', 'min:8', 'confirmed'],

        ]);
      //else{
            $nuevovendedor=new User();
            $nuevovendedor->name = request('name');
            $nuevovendedor->apellidos = request('apellidos');
            $nuevovendedor->email = request('email');
            $nuevovendedor->password = bcrypt(request('clave'));
            $nuevovendedor->save();
            $nuevovendedor -> asignarRol(1);
            return back()->with('info','Verifique su correo electrónico.');
       // }
    }

}
