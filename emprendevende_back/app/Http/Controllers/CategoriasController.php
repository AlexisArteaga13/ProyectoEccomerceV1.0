<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
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
        $categorias = DB::table('categoria')->get();
        return view('vistasadmin.categorias.cindex',compact('categorias'));
    }

    public function store(Request $request){
        $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            
        ]);
        $newcategoria = new Categoria();
        $newcategoria->nombreCategoria = $request->nombre;
        $newcategoria->estado = '1';
        if($newcategoria->save()){
            return back()->with('success','Categoria creada Correctamente.');
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
        $categoria= Categoria::findOrFail($request->id);
        $categoria->nombreCategoria = $request->nombre;
        $categoria->estado = $request->estado;
        if($categoria->update()){
            return back()->with('success','Categoria Actualizada Correctamente.');
        }
        else{
            return back()->with('error','Ocurrió un error.');
        }
    }
    public function destroy($id)
    {
        //return $id;
        $categoria = Categoria::FindOrFail($id);
        $categoria->estado = '0';
        if($categoria->update()){
            return back()->with('success','Categoria Desactivada Correctamente.');
        }
        else{
            return back()->with('error','Ocurrió un error.');
        }
    }
}
