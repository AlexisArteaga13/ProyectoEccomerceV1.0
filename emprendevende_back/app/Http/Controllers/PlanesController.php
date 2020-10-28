<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Plan;
use App\User;
use App\MetodoPago;
use App\Facturacion;
use Illuminate\Http\Request;
use Carbon\Carbon; 
class PlanesController extends Controller
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
        $this->middleware('role:["administrador"]," "')->only('destroy','update');
        $this->middleware('role:["administrador"],["vendedor"]')->only('index');
       
        //$this->middleware()->only('');
    }
    public function index(){
        if(Auth::user()->tieneRol()[0] == 'administrador'){
            $planes = DB::table('plan')->get();
            return view('vistasadmin.planes.pindex',compact('planes'));
        }
        elseif(Auth::user()->tieneRol()[0] == 'vendedor'){
            
            $planes = DB::table('plan')->get();
            $metodo = DB::table('metodo_pago')->get();
            return view('vistasadmin.planes.planvendedor.index',compact('planes','metodo'));
        }
       
    }
    public function escogerplan($id,Request $request){
        $plan = DB::table('users')->where('idPlan',$id)->first();
        $idmax = DB::table('facturacion')->max('idFACTURACIÓN') + 1;

        $planelegido = DB::table('plan')->where('idPLAN',$id)->first();
        $nplan = new Facturacion();
        $nplan ->costoMensual= $planelegido->costoMensual;
        

       /*$request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'slogan' => ['string', 'max:255'],
            'detalle' => ['required', 'string', 'max:255'],
            'mensual' => ['required', 'string', 'max:255'],
            'anual' => ['required', 'string', 'max:255'],
            
        ]);*/
      //  
        if($plan){
            return back()->with('info','Actualmente estas con este plan.');
        }
        else {
            $iduser = Auth::user()->id;
            $actualizarplan = User::findOrFail($iduser);
            $actualizarplan->idPlan = $id;
            
           $fecha = Carbon::now();
            $fechainicio = $fecha->format('Y-m-d');
           // return $fecha->format('d-m-Y H:i:s');
           // return back()->with('success','Gracias por migrar de plan, no te arrepentiras.');

           $newfactura = new Facturacion();
           $codigoL = "";
           $codigoL = $idmax;

            if(strlen($idmax)<6){
                for ($i = 1; (6-strlen($idmax))-$i > 0 ; $i++) {
                    $codigoL = "0" . $codigoL;
                }
            }
            $newfactura->codigoLetra = 'F001';
            $newfactura->codigoFactura = $codigoL;
           $newfactura->importe = $request->facturacion;
           $newfactura->detalle = '';
           $newfactura->descuento = '0';
           $newfactura->idPlan = $id;
           $newfactura->idMETODO_PAGO = $request->metodos;
           $newfactura->idUsuario = Auth::user()->id;
           $newfactura->estado = '1';
           $newfactura->fechaEmision = $fechainicio;

           if ($nplan ->costoMensual == $request->facturacion){
            $endDate = $fecha->addMonth(); 
            $newfactura->fechaPago = $endDate->format('Y-m-d');
           }
           else{
            $endDate = $fecha->addYear(); 
            $newfactura->fechaPago = $endDate->format('Y-m-d');
           }
           if($newfactura->save()){             
               return back()->with('success','Gracias por migrar de plan, no te arrepentiras.');
           }
           else{
               return back()->with('error','Ocurrió un error.');
           }
           
           $actualizarplan->update();
    }
}
    public function store(Request $request){
        $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'slogan' => ['string', 'max:255'],
            'detalle' => ['required', 'string', 'max:255'],
            'mensual' => ['required', 'string', 'max:255'],
            'anual' => ['required', 'string', 'max:255'],
            
        ]);
        $newplan = new Plan();
        $newplan->nombrePlan = $request->nombre;
        $newplan->slogan = $request->slogan;
        $newplan->detalle = $request->detalle;
        $newplan->costoMensual = $request->mensual;
        $newplan->costoAnual = $request->anual;
        $newplan->estado = '1';
        if($newplan->save()){
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
            'slogan' => ['string', 'max:255'],
            'detalle' => ['required', 'string', 'max:255'],
            'mensual' => ['required', 'string', 'max:255'],
            'anual' => ['required', 'string', 'max:255'],
        ]);
        $plan= Plan::findOrFail($request->id);
        $plan->nombrePlan = $request->nombre;
        $plan->slogan = $request->slogan;
        $plan->detalle = $request->detalle;
        $plan->costoMensual = $request->mensual;
        $plan->costoAnual = $request->anual;
        $plan->estado = $request->estado;
        if($plan->update()){
            return back()->with('success','Plan Actualizado Correctamente.');
        }
        else{
            return back()->with('error','Ocurrió un error.');
        }
    }
    public function destroy($id)
    {
        //return $id;
        $plan = Plan::FindOrFail($id);
        $plan->estado = '0';
        if($plan->update()){
            return back()->with('success','Plan Desactivado Correctamente.');
        }
        else{
            return back()->with('error','Ocurrió un error.');
        }
    }
    /// ACCIONES DEL CONTROLADOR DEL VENDEDOR
    
}
