<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Plan;
use App\User;
use App\MetodoPago;
use App\Facturacion;
use Illuminate\Http\Request;


class VentasController extends Controller
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
        
         $this->middleware('role:["administrador"],["vendedor"]')->only('index','update','destroy');
    }
    public function index(){
        
        if(Auth::user()->tieneRol()[0] == 'administrador'){
        //$facturacion= DB::table('facturacion')->get();
        $facturacion = DB::table('sub_venta as sv')
        ->join('facturacion as f','sv.FACTURA_idFACTURACIÓN','=','f.idFACTURACIÓN')
        ->join('venta as v','v.idVENTA','=','sv.idVENTA')
        ->join('detalle_subventa as dsv','dsv.idSUB_VENTA','=','sv.idSUB_VENTA')
        ->join('producto as p','p.idPRODUCTO','=','dsv.idPRODUCTO')
        ->join('empresa as e','e.idEmpresa','p.idEmpresa')
        ->join('users as u','u.id','v.idUsuario')
       // ->select('f.*','m.codigo','m.tipo','p.nombrePlan','p.detalle','p.costoMensual','p.costoAnual','e.nombreEmpresa')
        ->get();
       // return json_encode($facturacion);
           return view('vistasadmin.modulosadmin.ventas.index',compact('facturacion'));
        }
        else{
            $facturacion = DB::table('sub_venta as sv')
            ->join('facturacion as f','sv.FACTURA_idFACTURACIÓN','=','f.idFACTURACIÓN')
            ->join('venta as v','v.idVENTA','=','sv.idVENTA')
            ->join('detalle_subventa as dsv','dsv.idSUB_VENTA','=','sv.idSUB_VENTA')
            ->join('producto as p','p.idPRODUCTO','=','dsv.idPRODUCTO')
            ->join('empresa as e','e.idEmpresa','p.idEmpresa')
            ->join('users as u','u.id','v.idUsuario')
            ->where('e.idUsuario',Auth::user()->id)
           // ->select('f.*','m.codigo','m.tipo','p.nombrePlan','p.detalle','p.costoMensual','p.costoAnual','e.nombreEmpresa')
            ->get();
            //return json_encode($facturacion);
            return view('vistasadmin.modulosadmin.ventas.index',compact('facturacion'));
        }
    }
}
