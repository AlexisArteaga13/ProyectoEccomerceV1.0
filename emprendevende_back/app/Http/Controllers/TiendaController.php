<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TiendaController extends Controller
{
    //
    public function index(){
        //Obtener los productos destacados de BD // 
        $vendedores = DB::table('empresa as e')
        ->join('users as u','e.idUsuario','u.id')
        ->join('plan as p','p.idPLAN','u.idPlan')
        ->where('p.idPLAN','2')
        ->where('e.estado','1')->get();


        //****************** */
        $destacados  = DB::table('producto as p')
        ->join('empresa as e','e.idEmpresa','p.idEmpresa')
        ->where('p.estado','1')
        ->where('e.estado','1')
        ->where('p.destacado','1')
        ->orderBy('p.fecha_destacado', 'desc')
        ->get();
        // Obtener los productos de BD
        $productos = DB::table('producto as p')
        ->join('empresa as e','e.idEmpresa','p.idEmpresa')
        ->where('p.estado','1')
        ->where('e.estado','1')      
        ->paginate(12);
        //*******************// */
        $empresas = DB::table('empresa')->where('estado',1)->get();
        $categorias = DB::table('categoria')->where('estado',1)->get();
        return view('modulostienda.inicio',compact('categorias','empresas','productos','destacados','vendedores'));
    }
    public function checkout(Request $request){
        return $request->all();
        $empresas = DB::table('empresa')->where('estado',1)->get();
        $categorias = DB::table('categoria')->where('estado',1)->get();
        
        return view('modulostienda.checkout');
    }

    public function vitrina(){
           $empresas = DB::table('empresa')->where('estado',1)->get();
            $categorias = DB::table('categoria')->where('estado',1)->get();
            return view('modulostienda.single.single',compact('empresas','categorias'));
           //return view('modulostienda.single.single');
        }
        public function descripcionProducto($id){
            $productos = DB::table('producto')->where('idPRODUCTO',$id)
            ->join('empresa as e','producto.idEmpresa','=','e.idEmpresa')
            ->join('users as u','e.idUsuario','=','u.id')
            ->join('categoria as c','producto.idCategoria','=','c.idCategoria')
            ->select('producto.*','e.nombreEmpresa','c.nombreCategoria','u.idPlan')
            ->get();
            $empresas = DB::table('empresa')->where('estado',1)->get();
            $categorias = DB::table('categoria')->where('estado',1)->get();
             return view('modulostienda.single.singles',compact('productos','empresas','categorias'));
            //return view('modulostienda.single.single');
         }
}
