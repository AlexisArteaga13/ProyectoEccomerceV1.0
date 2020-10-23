<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Rubros;
use Illuminate\Http\Request;

class RubrosController extends Controller
{
    //
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
}
