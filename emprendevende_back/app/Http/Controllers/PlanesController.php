<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Plan;
use App\User;
use App\Facturacion;
use App\MetodoPago;
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
       
        $plan = DB::table('users')->where('id',Auth::user()->id)->where('idPlan',$id)->first();
        $empresa = DB::table('users as u')
        ->join('empresa as e','u.id','e.idUsuario')
        ->where('u.id',Auth::user()->id)
        ->first();
        
        if($plan){
            return back()->with('info','Actualmente estas con este plan.');
        }
        else {
            if($request->facturacion == '150'){
           // return $request->all();
            $iduser = Auth::user()->id;
            $actualizarplan = User::findOrFail($iduser);
            $actualizarplan->idPlan = $id;
            $actualizarplan->update();
            $fecha = Carbon::now();
            $factura = new Facturacion ();
            $ultimafact = DB::table('facturacion')->orderBy('created_at', 'desc')->first();
            $factura ->codigoLetra = 'F001';
            $factura ->codigoFactura = str_pad(intval($ultimafact->codigoFactura)+1,5,0,STR_PAD_LEFT);
            $factura ->estado = 1;
            $factura ->fechaEmision = Carbon::now();
            $factura ->fechaPago = Carbon::now()->addYear();
            $factura ->importe= $request->facturacion;
            $factura ->idPlan = $id;
            $factura ->idMETODO_PAGO = $request->metodos;
            $factura->idEmpresa= $empresa->idEmpresa;
            $factura->save();

        }
        else{
            $iduser = Auth::user()->id;
            $actualizarplan = User::findOrFail($iduser);
            $actualizarplan->idPlan = $id;
            $actualizarplan->update();
            $fecha = Carbon::now();
            /*$factura = new Facturacion ();
            $ultimafact = DB::table('facturacion')->orderBy('created_at', 'desc')->first();
            $factura ->codigoLetra = 'F001';
            $factura ->codigoFactura = str_pad(intval($ultimafact->codigoFactura)+1,5,0,STR_PAD_LEFT);
            $factura ->estado = 1;
            $factura ->fechaEmision = Carbon::now();
            $factura ->fechaPago = Carbon::now()->addMonth();
            $factura ->importe= $request->facturacion;
            $factura ->idPlan = $id;
            $factura ->idMETODO_PAGO = $request->metodos;
            $factura->idEmpresa= $empresa->idEmpresa;
            $factura->save();*/
        }

       // alert()->success('Excelente','Migraste de ');
           // $factura ->importe = 


            /*->select('user_id', DB::raw('count(*) as total_posts'))
            ->groupBy('user_id)*/
           // ->get();
           // return json_decode($empresa);
            //return $fecha->format('d-m-Y H:i:s');
            return back()->with('success','Gracias por migrar de plan, no te arrepentiras.');
        
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
