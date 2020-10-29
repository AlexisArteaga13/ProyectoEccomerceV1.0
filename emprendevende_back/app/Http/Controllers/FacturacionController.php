<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Plan;
use App\User;
use App\MetodoPago;
use App\Facturacion;
use Illuminate\Http\Request;

class FacturacionController extends Controller
{
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
        $facturacion = DB::table('facturacion as f')
        ->join('plan as p','f.idPLAN','=','p.idPLAN')
        ->join('empresa as e','e.idEmpresa','=','f.idEmpresa')
        ->join('metodo_pago as m','m.idMETODO_PAGO','=','f.idMETODO_PAGO')
        ->select('f.*','m.codigo','m.tipo','p.nombrePlan','p.detalle','p.costoMensual','p.costoAnual','e.nombreEmpresa')
        ->get();
            return view('vistasadmin.facturacionplanes.findex',compact('facturacion'));
        }
        else{
            $facturacion = DB::table('facturacion as f')
            ->join('plan as p','f.idPLAN','=','p.idPLAN')
            ->join('empresa as e','e.idEmpresa','=','f.idEmpresa')
            ->join('metodo_pago as m','m.idMETODO_PAGO','=','f.idMETODO_PAGO')
            ->where('e.idUsuario','=',Auth::user()->id)
            ->select('f.*','m.codigo','m.tipo','p.nombrePlan','p.detalle','p.costoMensual','p.costoAnual','e.nombreEmpresa')
            ->get();
            return view('vistasadmin.facturacionplanes.findex',compact('facturacion'));
        }
    }
    
}
