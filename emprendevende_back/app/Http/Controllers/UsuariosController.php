<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Empresa;
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
    public function crear_user_comprador(Request $request){       
         $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'apellidos' => ['required', 'string', 'max:255'],
            'clave' => ['required', 'string', 'min:8', 'confirmed'],

        ]);
            $request['codconfirmar']= Str::random(25);
            $nuevovendedor=new User();
            $nuevovendedor->name = request('name');
            $nuevovendedor->apellidos = request('apellidos');
            $nuevovendedor->email = request('email');
            $nuevovendedor->password = bcrypt(request('clave'));
            $nuevovendedor->email_verified_at=request('codconfirmar');
            $nuevovendedor->estado='0';
            $nuevovendedor->save();
            $nuevovendedor -> asignarRol(3);
            Mail::send('emails.confirmarcorreo', $request->all(), function($message) use ($request) {
                $message->to($request['email'], $request['name'])->subject('Por favor confirma tu correo');
            });
            
           return back()->with('info','Confirme su cuenta desde su correo electrónico.');
           //return $nuevovendedor;
       // }
    }

    public function crear_user_vendedor(Request $request){
       $request->validate([
            'ruc' => ['required', 'numeric', 'digits:11'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            
            'ncomercial' => ['required', 'string', 'max:255'],
            'categoria' => ['required'],
            'dni' => ['required', 'numeric', 'digits:8'],
            'nombres' => ['required', 'string','max:255'],
            'apel' => ['required', 'string','max:255'],
            'telefono' => ['required', 'numeric','digits:9'],
            'razonsocial' => ['required', 'string','max:255'],
            'password'=>['required', 'string','min:8','confirmed'],

        ]);
        $request['codconfirmar']= Str::random(25);
        $newuser = new User;
        $newuser->name = $request->nombres;
        $newuser->email = $request->email;
        $newuser->apellidos= $request->apel;
        $newuser->dni = $request->dni;
        $newuser ->password= bcrypt(request('password'));
        $newuser->estado='0';
        $newuser->email_verified_at=request('codconfirmar');
        $newuser->idPlan = 1;
        $newuser->save();
        $newuser->asignarRol(2);
        //PAra crear nueva empresa
        $empresa = new Empresa;
        $empresa->nombreEmpresa= $request->ncomercial;
        $empresa->razonSocial= $request->razonsocial;
        $empresa->estado='1';
        $empresa->ruc=$request->ruc;
        $empresa->idRubro=$request->categoria;
        $empresa->idUsuario=$newuser->id;
        Mail::send('emails.confirmarcorreoempresa', $request->all(), function($message) use ($request) {
            $message->to($request['email'], $request['nombres'])->subject('Por favor confirma tu correo');
        });
        if($empresa->save()){
        return back()->with('info','Gracias por Registrarte. Confirme su cuenta desde su correo electrónico.');
        }
        else{
            return back()->with('error','Ocurrio un error al registrar la empresa.');
       
        }
    }

}
