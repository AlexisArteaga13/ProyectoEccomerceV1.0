<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Rubros;
use Illuminate\Http\Request;

class RubrosController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:["administrador"]," "');
       
        //$this->middleware()->only('');
    }
    public function index(){
        $rubros = DB::table('rubro')->get();
        return view('vistasadmin.rubros.rindex',compact('rubros'));
    }

    public function store(Request $request){
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
    }
    public function update(Request $request){
        //return $request->all();
        $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'estado' =>['required'],
        ]);
        $rubro= Rubros::findOrFail($request->id);
        $rubro->nombreRubro = $request->nombre;
        $rubro->estado = $request->estado;
        if($rubro->update()){
            return back()->with('success','Rubro Actualizado Correctamente.');
        }
        else{
            return back()->with('error','Ocurrió un error.');
        }
    }
    public function destroy($id)
    {
        //return $id;
        $rubro = Rubros::FindOrFail($id);
        $rubro->estado = '0';
        if($rubro->update()){
            return back()->with('success','Rubro Desactivado Correctamente.');
        }
        else{
            return back()->with('error','Ocurrió un error.');
        }
    }
}
