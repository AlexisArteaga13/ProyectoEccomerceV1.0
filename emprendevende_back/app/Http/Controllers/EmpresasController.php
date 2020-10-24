<?php

namespace App\Http\Controllers;
use App\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use DB;
use Illuminate\Support\Facades\Storage;
class EmpresasController extends Controller
{
    //
    /*public function crear_user_vendedor(Request $request){       
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
            
           return back()->with('info','Confirme su cuenta desde su correo electrónico.');
           //return $nuevovendedor;
       // }
    }*/
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:["administrador"]," "');
       
        //$this->middleware()->only('');
    }
    public function index(){
        $empresas = DB::table('empresa as e')
        ->join('rubro as r','e.idRubro','=','r.idRubro')
        ->join('users as u','u.id','=','e.idUsuario')
        ->get();
        
       return view('vistasadmin.empresas.eindex',compact('empresas'));
    }

    /*public function store(Request $request){
        $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            
        ]);
        $newrubro = new Rubros();
        $newrubro->nombreRubro = $request->nombre;
        $newrubro->estado = '1';
        if($newrubro->save()){
            return back()->with('success','Rubro Creado Correctamente.');
        }
        else{
            return back()->with('error','Ocurrió un error.');
        }
      //  return $request->all();
    }*/
    public function update(Request $request){
        //return $request->all();
        $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'estado' =>['required'],
            'cuenta' =>['required'],
            'descripcion' =>['required'],
            'vision' =>['required'],
            'mision' =>['required'],
            'logo' =>['required'],
            'ruc' =>['required'],
            'telefono' =>['required'],
            'razonsocial' =>['required'],
            'fecha' =>['required'],
            'calificacion' =>[''],
            'rubro' =>['required'],
            
        ]);
        $empresa= Empresa::findOrFail($request->id);
        $empresa->nombreEmpresa = $request->nombre;
        $empresa->estado = $request->estado;
        $empresa->cuenta_transferencia = $request->cuenta;
        $empresa->descripcion = $request->descripcion;
        $empresa->vision = $request->vision;
        $empresa->mision = $request->mision;
        $empresa->logo_img_empresa = $request->file('logo')->store('public');
        $empresa->ruc = $request->ruc;
        $empresa->telefono = $request->telefono;
        $empresa->razonSocial  = $request->razonsocial;
        $empresa->fechaRegistro = $request->fecha;
        $empresa->calificacion = $request->calificacion;
        $empresa->idRubro  = $request->rubro;
        
        if($empresa->update()){
            return back()->with('success','Empresa Actualizada Correctamente.');
        }
        else{
            return back()->with('error','Ocurrió un error.');
        }
    }
    public function destroy($id)
    {
        //return $id;
        $empresas = Empresa::FindOrFail($id);
        $empresas->estado = '0';
        if($empresas->update()){
            return back()->with('success','Empresa Desactivada Correctamente.');
        }
        else{
            return back()->with('error','Ocurrió un error.');
        }
    }

}
