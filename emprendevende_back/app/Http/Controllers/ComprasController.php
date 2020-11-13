<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Categoria;

class ComprasController extends Controller
{
    //
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
        // $this->middleware(Auth::check());
     }
    public function index(){
             $facturacion = DB::table('sub_venta as sv')
            ->join('facturacion as f','sv.FACTURA_idFACTURACIÓN','=','f.idFACTURACIÓN')
            ->join('venta as v','v.idVENTA','=','sv.idVENTA')
            ->join('detalle_subventa as dsv','dsv.idSUB_VENTA','=','sv.idSUB_VENTA')
            ->join('producto as p','p.idPRODUCTO','=','dsv.idPRODUCTO')
            ->join('empresa as e','e.idEmpresa','p.idEmpresa')
            ->join('users as u','u.id','v.idUsuario')
            ->where('v.idUsuario',Auth::user()->id)
            ->paginate(10);
    //return json_encode($facturacion);
            $empresas = DB::table('empresa')->where('estado',1)->get();
            $categorias = DB::table('categoria')->where('estado',1)->get();
            return view('modulostienda.miscompras.miscompras',compact('facturacion','empresas','categorias'));
}
}
