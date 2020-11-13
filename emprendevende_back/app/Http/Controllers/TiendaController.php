<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Venta;
use App\Facturacion;
use App\SubVenta;
use App\DetalleVenta;
use App\Producto;
use Carbon\Carbon; 
use Illuminate\Support\Facades\Auth;
class TiendaController extends Controller
{
    //
    public function payment(Request $request){  
        if(Auth::check()){
        $contador=9999999;
        $i = 1;
         $cadena_id=array();
         $cadena_cantidad=array();
        while ($contador>0){
        $id = $request->input('id_'.$i);
         if(is_null($id)){
             break;
         }
         else{
             array_push($cadena_id,$request->input('id_'.$i));
             array_push($cadena_cantidad,$request->input('cantidad_'.$i));
         }
         $i = $i + 1;
         }
         for($j=0;$j<count($cadena_id);$j++){
          
            $producto = DB::table('producto')->where('idPRODUCTO',$cadena_id[$j])->first();
            if($producto->stock<$cadena_cantidad[$j])
             {
                 $resta = $cadena_cantidad[$j] - $producto->stock;
                alert()->warning('Uy!', 'El producto '.$producto->nombreProducto.' superó el stock, reducele '.$resta.' elemento(s) para seguir con la operación');
                return back();
             }
         }

         /////////////////////7
        $count=0;
        $productosSelecionados = DB::table('producto')->whereIn('idPRODUCTO',$cadena_id)->get();
        // Crear la venta
        $ultimafact = DB::table('facturacion')->orderBy('created_at', 'desc')->first();
        
        $factura = new Facturacion();
        $factura->fechaEmision = Carbon::now();
        $factura->fechaPago = Carbon::now();
        $factura->codigofactura=str_pad(intval($ultimafact->codigoFactura)+1,5,0,STR_PAD_LEFT);
        $factura->estado=1;
        $factura->detalle="Ventas de Productos";
        $factura->idMETODO_PAGO= 2;
        $factura->codigoLetra='F001';
        $factura->save();
        //Creamos la venta
        $venta = new Venta();
        $venta->fecha= Carbon::now();
        $venta->idUsuario = Auth::user()->id;
        $venta->nombre_tarjeta=$request->nombre_tarjeta;
        $venta->numero_tarjeta=$request->numero_tarjeta;
        $venta->estado=1;
        $venta->save();
        //creamos la subventa
        $subventa = new SubVenta() ;
        $subventa->idVENTA = $venta->idVENTA;
        $subventa->FACTURA_idFACTURACIÓN=$factura->idFACTURACIÓN;
        $subventa->save();
        ////////////////////
        $costototal=0;
        for($j=0;$j<count($cadena_id);$j++){
          
           $producto = DB::table('producto')->where('idPRODUCTO',$cadena_id[$j])->first();
           $detallesub = new DetalleVenta();
           $detallesub->cantidad = $cadena_cantidad[$j];
           $detallesub->precioTotal = ($producto->precio)*$cadena_cantidad[$j];
           $costototal = $costototal+ (($producto->precio)*$cadena_cantidad[$j]);
           $detallesub->idPRODUCTO = $cadena_id[$j];
           $detallesub->idSUB_VENTA = $subventa->idSUB_VENTA;
           $detallesub->save();
           $updateproducto = Producto::findOrFail($producto->idPRODUCTO);
           $updateproducto->stock=($producto->stock - $cadena_cantidad[$j]);
           $updateproducto->update();
           
        }
        // Agregamos el importe
        $updatefactura = Facturacion::findOrFail($factura->idFACTURACIÓN);
        $updatefactura->importe=$costototal;
        $updatefactura->update();
        /// Agregamos el importe a la venta
        $updateventa = Venta::findOrFail($venta->idVENTA);
        $updateventa->importeFinal = $costototal;
        $updateventa->update();
        // Agregamos el importe a subventas
        $updatesubventa = SubVenta::findOrFail($subventa->idSUB_VENTA);
        $updatesubventa->precioBruto = $costototal;
        $updatesubventa->precioNeto = $costototal;
        $updatesubventa->update();
        /////////////////////////
        $empresas = DB::table('empresa')->where('estado',1)->get();
        $categorias = DB::table('categoria')->where('estado',1)->get();
        return back()->with('success','Compra realizada correctamente.');
       // return view('modulostienda.payment',compact('categorias','empresas','productosSelecionados','cadena_id','cadena_cantidad'));
        }
        else{
            alert()->error('Uy!', 'Necesitas iniciar sesión para realizar esta operación!');
            return back();
        }
    }

    public function index(Request $request){
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
        if(empty($request->all())){
       
        // Obtener los productos de BD
        $productos = DB::table('producto as p')
        ->join('empresa as e','e.idEmpresa','p.idEmpresa')
        ->where('p.estado','1')
        ->where('e.estado','1')      
        ->paginate(12);
        //*******************// */
         }
        elseif($request->all()){
            if($request->buscgen){
                $productos = DB::table('producto as p')
                    ->join('empresa as e','e.idEmpresa','p.idEmpresa')
                    ->where('p.estado','1')
                    ->where('e.estado','1')       
                   
                   ->Where('p.nombreProducto','LIKE','%'.$request->buscgen.'%')
                   ->OrWhere('e.idEmpresa','LIKE','%'.$request->buscgen.'%')
                   
                   ->paginate(200);
            }
            else{
            if(!empty($request->selector) && !empty($request->buscador) && !empty($request->empresas)){
                if($request->empresas != 'todo'){
                    $productos = DB::table('producto as p')
                    ->join('empresa as e','e.idEmpresa','p.idEmpresa')
                    ->where('p.estado','1')
                    ->where('e.estado','1')       
                   
                   ->Where('p.nombreProducto','LIKE','%'.$request->buscador.'%')
                   ->Where('e.idEmpresa','LIKE','%'.$request->empresas.'%')
                   ->orderBy('p.precio',$request->selector)
                   ->paginate(12);
               }
               elseif($request->empresas == 'todo'){                
                $productos = DB::table('producto as p')
                ->join('empresa as e','e.idEmpresa','p.idEmpresa')
                ->where('p.estado','1')
                ->where('e.estado','1')   
                   
                   ->Where('p.nombreProducto','LIKE','%'.$request->buscador.'%')   
                   ->orderBy('p.precio',$request->selector)
                   ->paginate(12);
               }
             }
             elseif(empty($request->selector) && !empty($request->buscador) && !empty($request->empresas) ){
               if($request->empresas != 'todo'){
                $productos = DB::table('producto as p')
                ->join('empresa as e','e.idEmpresa','p.idEmpresa')
                ->where('p.estado','1')
                ->where('e.estado','1')     
               
               ->Where('p.nombreProducto','LIKE','%'.$request->buscador.'%')
               ->Where('e.idEmpresa','LIKE','%'.$request->empresas.'%')
               ->paginate(12);
               }
               else{
                $productos = DB::table('producto as p')
                ->join('empresa as e','e.idEmpresa','p.idEmpresa')
                ->where('p.estado','1')
                ->where('e.estado','1')    
                  
                   ->Where('p.nombreProducto','LIKE','%'.$request->buscador.'%')
                   
                   ->paginate(12);
               }
             }
             elseif(empty($request->selector) && empty($request->buscador) && !empty($request->empresas) ){
               
               $productos  = DB::table('producto as p')
              
               ->join('empresa as e','e.idEmpresa','p.idEmpresa')
               ->where('p.estado','1')
               ->where('e.estado','1')    
               
               
               ->Where('e.idEmpresa','LIKE','%'.$request->empresas.'%')
              
               ->paginate(12);
             }
           elseif(empty($request->selector) && empty($request->buscador) && empty($request->empresas)){
            $productos = DB::table('producto as p')
            ->join('empresa as e','e.idEmpresa','p.idEmpresa')
            ->where('p.estado','1')
            ->where('e.estado','1')      
              
              
               ->paginate(12);
           }
           else{
            $productos = DB::table('producto as p')
            ->join('empresa as e','e.idEmpresa','p.idEmpresa')
            ->where('p.estado','1')
            ->where('e.estado','1')      
               ->Where('p.nombreProducto','LIKE','%'.$request->buscador.'%')
               ->Where('e.idEmpresa','LIKE','%'.$request->empresas.'%')
               
               ->paginate(12);
           }    
        }
    }
        $empresas = DB::table('empresa')->where('estado',1)->get();
        $categorias = DB::table('categoria')->where('estado',1)->get();
        return view('modulostienda.inicio',compact('categorias','empresas','productos','destacados','vendedores'));
      
    }
    public function checkout(Request $request){
       // return $request->all();
       $contador=9999999;
       $i = 1;
        $cadena_id=array();
        $cadena_cantidad=array();
       while ($contador>0){
       $id = $request->input('id_'.$i);
        if(is_null($id)){
            break;
        }
        else{
            array_push($cadena_id,$request->input('id_'.$i));
            array_push($cadena_cantidad,$request->input('quantity_'.$i));
        }
        $i = $i + 1;
        }

  
       $productosSelecionados = DB::table('producto')->whereIn('idPRODUCTO',$cadena_id)->get();
       
        $empresas = DB::table('empresa')->where('estado',1)->get();
        $categorias = DB::table('categoria')->where('estado',1)->get();
        
        return view('modulostienda.checkout',compact('empresas','categorias','productosSelecionados','cadena_id','cadena_cantidad'));
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
    
    public function categoria($id, Request $request){
            
            if(empty($request->all())){
            //Productos de esta categoria
            $productos  = DB::table('producto as p')
            ->join('categoria as c','p.idCategoria','c.idCategoria')
            ->join('empresa as e','e.idEmpresa','p.idEmpresa')
            ->where('p.estado','1')
            ->where('e.estado','1')      
            ->where('c.idCategoria',$id)
            ->paginate(2);

            ///*********************** */
            $catselect = DB::table('categoria')
            ->where('estado',1)
            ->where('idCategoria',$id)->first();
            //************ */
            $empresas = DB::table('empresa')->where('estado',1)->get();
            $categorias = DB::table('categoria')->where('estado',1)->get();
            return view('modulostienda.single.categoria',compact('empresas','categorias','catselect','productos'));
            }
            elseif($request->all()){
              
              if(!empty($request->selector) && !empty($request->buscador) && !empty($request->empresas)){
                 if($request->empresas != 'todo'){
                    $productos  = DB::table('producto as p')
                    ->join('categoria as c','p.idCategoria','c.idCategoria')
                    ->join('empresa as e','e.idEmpresa','p.idEmpresa')
                    ->where('p.estado','1')
                    ->where('e.estado','1')    
                    ->where('c.idCategoria',$id)
                    ->Where('p.nombreProducto','LIKE','%'.$request->buscador.'%')
                    ->Where('e.idEmpresa','LIKE','%'.$request->empresas.'%')
                    ->orderBy('p.precio',$request->selector)
                    ->paginate(2);
                }
                elseif($request->empresas == 'todo'){                
                    $productos  = DB::table('producto as p')
                    ->join('categoria as c','p.idCategoria','c.idCategoria')
                    ->join('empresa as e','e.idEmpresa','p.idEmpresa')
                    ->where('p.estado','1')
                    ->where('e.estado','1')      
                    ->where('c.idCategoria',$id)
                    ->Where('p.nombreProducto','LIKE','%'.$request->buscador.'%')   
                    ->orderBy('p.precio',$request->selector)
                    ->paginate(2);
                }
              }
              elseif(empty($request->selector) && !empty($request->buscador) && !empty($request->empresas) ){
                if($request->empresas != 'todo'){
                $productos  = DB::table('producto as p')
                ->join('categoria as c','p.idCategoria','c.idCategoria')
                ->join('empresa as e','e.idEmpresa','p.idEmpresa')
                ->where('p.estado','1')
                ->where('e.estado','1')      
                ->where('c.idCategoria',$id)
                ->Where('p.nombreProducto','LIKE','%'.$request->buscador.'%')
                ->Where('e.idEmpresa','LIKE','%'.$request->empresas.'%')
                ->paginate(2);
                }
                else{
                    $productos  = DB::table('producto as p')
                    ->join('categoria as c','p.idCategoria','c.idCategoria')
                    ->join('empresa as e','e.idEmpresa','p.idEmpresa')
                    ->where('p.estado','1')
                    ->where('e.estado','1')      
                    ->where('c.idCategoria',$id)
                    ->Where('p.nombreProducto','LIKE','%'.$request->buscador.'%')
                    
                    ->paginate(2);
                }
              }
              elseif(empty($request->selector) && empty($request->buscador) && !empty($request->empresas) ){
                
                $productos  = DB::table('producto as p')
                ->join('categoria as c','p.idCategoria','c.idCategoria')
                ->join('empresa as e','e.idEmpresa','p.idEmpresa')
                ->where('p.estado','1')
                ->where('e.estado','1')      
                ->where('c.idCategoria',$id)
                
                ->Where('e.idEmpresa','LIKE','%'.$request->empresas.'%')
               
                ->paginate(2);
              }
            elseif(empty($request->selector) && empty($request->buscador) && empty($request->empresas)){
                $productos  = DB::table('producto as p')
                ->join('categoria as c','p.idCategoria','c.idCategoria')
                ->join('empresa as e','e.idEmpresa','p.idEmpresa')
                ->where('p.estado','1')
                ->where('e.estado','1')      
                ->where('c.idCategoria',$id)
                
               
                ->paginate(2);
            }
            else{
                $productos  = DB::table('producto as p')
                ->join('categoria as c','p.idCategoria','c.idCategoria')
                ->join('empresa as e','e.idEmpresa','p.idEmpresa')
                ->where('p.estado','1')
                ->where('e.estado','1')      
                ->where('c.idCategoria',$id)
                ->Where('p.nombreProducto','LIKE','%'.$request->buscador.'%')
                ->Where('e.idEmpresa','LIKE','%'.$request->empresas.'%')
                
                ->paginate(2);
            }
                

                ///*********************** */
            $catselect = DB::table('categoria')
            ->where('estado',1)
            ->where('idCategoria',$id)->first();
                //************ */
            $empresas = DB::table('empresa')->where('estado',1)->get();
            $categorias = DB::table('categoria')->where('estado',1)->get();
            return view('modulostienda.single.categoria',compact('empresas','categorias','catselect','productos'));
            
        }
    }
    public function destacados(Request $request){
            
        if(empty($request->all())){
        //Productos de esta categoria
        $productos  = DB::table('producto as p')
        ->join('categoria as c','p.idCategoria','c.idCategoria')
        ->join('empresa as e','e.idEmpresa','p.idEmpresa')
        ->where('p.estado','1')
        ->where('e.estado','1')      
        ->where('p.destacado',1)
        ->paginate(2);

        ///*********************** */
      
        //************ */
        $empresas = DB::table('empresa')->where('estado',1)->get();
        $categorias = DB::table('categoria')->where('estado',1)->get();
        return view('modulostienda.single.destacados',compact('empresas','categorias','productos'));
        }
        elseif($request->all()){
          
          if(!empty($request->selector) && !empty($request->buscador) && !empty($request->empresas)){
             if($request->empresas != 'todo'){
                $productos  = DB::table('producto as p')
                ->join('categoria as c','p.idCategoria','c.idCategoria')
                ->join('empresa as e','e.idEmpresa','p.idEmpresa')
                ->where('p.estado','1')
                ->where('e.estado','1')      
                ->where('p.destacado',1)
                ->Where('p.nombreProducto','LIKE','%'.$request->buscador.'%')
                ->Where('e.idEmpresa','LIKE','%'.$request->empresas.'%')
                ->orderBy('p.precio',$request->selector)
                ->paginate(2);
            }
            elseif($request->empresas == 'todo'){                
                $productos  = DB::table('producto as p')
                ->join('categoria as c','p.idCategoria','c.idCategoria')
                ->join('empresa as e','e.idEmpresa','p.idEmpresa')
                ->where('p.estado','1')
                ->where('e.estado','1')      
                ->where('p.destacado',1)
                ->Where('p.nombreProducto','LIKE','%'.$request->buscador.'%')   
                ->orderBy('p.precio',$request->selector)
                ->paginate(2);
            }
          }
          elseif(empty($request->selector) && !empty($request->buscador) && !empty($request->empresas) ){
            if($request->empresas != 'todo'){
                $productos  = DB::table('producto as p')
                ->join('categoria as c','p.idCategoria','c.idCategoria')
                ->join('empresa as e','e.idEmpresa','p.idEmpresa')
                ->where('p.estado','1')
                ->where('e.estado','1')      
                ->where('p.destacado',1)
            ->Where('p.nombreProducto','LIKE','%'.$request->buscador.'%')
            ->Where('e.idEmpresa','LIKE','%'.$request->empresas.'%')
            ->paginate(2);
            }
            else{
                $productos  = DB::table('producto as p')
                ->join('categoria as c','p.idCategoria','c.idCategoria')
                ->join('empresa as e','e.idEmpresa','p.idEmpresa')
                ->where('p.estado','1')
                ->where('e.estado','1')      
                ->where('p.destacado',1)
                ->Where('p.nombreProducto','LIKE','%'.$request->buscador.'%')
                
                ->paginate(2);
            }
          }
          elseif(empty($request->selector) && empty($request->buscador) && !empty($request->empresas) ){
            
            $productos  = DB::table('producto as p')
            ->join('categoria as c','p.idCategoria','c.idCategoria')
            ->join('empresa as e','e.idEmpresa','p.idEmpresa')
            ->where('p.estado','1')
            ->where('e.estado','1')      
            ->where('p.destacado',1)
            
            ->Where('e.idEmpresa','LIKE','%'.$request->empresas.'%')
           
            ->paginate(2);
          }
        elseif(empty($request->selector) && empty($request->buscador) && empty($request->empresas)){
            $productos  = DB::table('producto as p')
            ->join('categoria as c','p.idCategoria','c.idCategoria')
            ->join('empresa as e','e.idEmpresa','p.idEmpresa')
            ->where('p.estado','1')
            ->where('e.estado','1')      
            ->where('p.destacado',1)
            
           
            ->paginate(2);
        }
        else{
            $productos  = DB::table('producto as p')
            ->join('categoria as c','p.idCategoria','c.idCategoria')
            ->join('empresa as e','e.idEmpresa','p.idEmpresa')
            ->where('p.estado','1')
            ->where('e.estado','1')      
            ->where('p.destacado',1)
            ->Where('p.nombreProducto','LIKE','%'.$request->buscador.'%')
            ->Where('e.idEmpresa','LIKE','%'.$request->empresas.'%')
            
            ->paginate(2);
        }
            

            ///*********************** */
        
            //************ */
        $empresas = DB::table('empresa')->where('estado',1)->get();
        $categorias = DB::table('categoria')->where('estado',1)->get();
        return view('modulostienda.single.destacados',compact('empresas','categorias','productos'));
        
    }}
    public function tienda($id, Request $request){  
            
        if(empty($request->all())){
        //Productos de esta categoria
        $productos  = DB::table('producto as p')
        ->join('categoria as c','p.idCategoria','c.idCategoria')
        ->join('empresa as e','e.idEmpresa','p.idEmpresa')
        ->where('p.estado','1')
        ->where('e.estado','1')    
        ->where('p.idEmpresa',$id)
        ->paginate(2);

        ///*********************** */
        $catselect = DB::table('empresa')
        ->where('estado',1)
        ->where('idEmpresa',$id)->first();
        //************ */
        $empresas = DB::table('empresa')->where('estado',1)->get();
        $categorias = DB::table('categoria')->where('estado',1)->get();
        return view('modulostienda.single.tienda',compact('empresas','categorias','catselect','productos'));
        }
        elseif($request->all()){
          
          if(!empty($request->selector) && !empty($request->buscador) && !empty($request->empresas)){
             if($request->empresas != 'todo'){
                $productos  = DB::table('producto as p')
                ->join('categoria as c','p.idCategoria','c.idCategoria')
                ->join('empresa as e','e.idEmpresa','p.idEmpresa')
                ->where('p.estado','1')
                ->where('e.estado','1')    
                ->where('p.idEmpresa',$id)
                ->Where('p.nombreProducto','LIKE','%'.$request->buscador.'%')
                ->Where('e.idEmpresa','LIKE','%'.$request->empresas.'%')
                ->orderBy('p.precio',$request->selector)
                ->paginate(2);
            }
            elseif($request->empresas == 'todo'){                
                $productos  = DB::table('producto as p')
                ->join('categoria as c','p.idCategoria','c.idCategoria')
                ->join('empresa as e','e.idEmpresa','p.idEmpresa')
                ->where('p.estado','1')
                ->where('e.estado','1')      
                ->where('p.idEmpresa',$id)
                ->Where('p.nombreProducto','LIKE','%'.$request->buscador.'%')   
                ->orderBy('p.precio',$request->selector)
                ->paginate(2);
            }
          }
          elseif(empty($request->selector) && !empty($request->buscador) && !empty($request->empresas) ){
            if($request->empresas != 'todo'){
            $productos  = DB::table('producto as p')
            ->join('categoria as c','p.idCategoria','c.idCategoria')
            ->join('empresa as e','e.idEmpresa','p.idEmpresa')
            ->where('p.estado','1')
            ->where('e.estado','1')      
            ->where('p.idEmpresa',$id)
            ->Where('p.nombreProducto','LIKE','%'.$request->buscador.'%')
            ->Where('e.idEmpresa','LIKE','%'.$request->empresas.'%')
            ->paginate(2);
            }
            else{
                $productos  = DB::table('producto as p')
                ->join('categoria as c','p.idCategoria','c.idCategoria')
                ->join('empresa as e','e.idEmpresa','p.idEmpresa')
                ->where('p.estado','1')
                ->where('e.estado','1')      
                ->where('p.idEmpresa',$id)
                ->Where('p.nombreProducto','LIKE','%'.$request->buscador.'%')
                
                ->paginate(2);
            }
          }
          elseif(empty($request->selector) && empty($request->buscador) && !empty($request->empresas) ){
            
            $productos  = DB::table('producto as p')
            ->join('categoria as c','p.idCategoria','c.idCategoria')
            ->join('empresa as e','e.idEmpresa','p.idEmpresa')
            ->where('p.estado','1')
            ->where('e.estado','1')      
            ->where('p.idEmpresa',$id)
            
            ->Where('e.idEmpresa','LIKE','%'.$request->empresas.'%')
           
            ->paginate(2);
          }
        elseif(empty($request->selector) && empty($request->buscador) && empty($request->empresas)){
            $productos  = DB::table('producto as p')
            ->join('categoria as c','p.idCategoria','c.idCategoria')
            ->join('empresa as e','e.idEmpresa','p.idEmpresa')
            ->where('p.estado','1')
            ->where('e.estado','1')      
            ->where('p.idEmpresa',$id)
            
           
            ->paginate(2);
        }
        else{
            $productos  = DB::table('producto as p')
            ->join('categoria as c','p.idCategoria','c.idCategoria')
            ->join('empresa as e','e.idEmpresa','p.idEmpresa')
            ->where('p.estado','1')
            ->where('e.estado','1')      
            ->where('p.idEmpresa',$id)
            ->Where('p.nombreProducto','LIKE','%'.$request->buscador.'%')
            ->Where('e.idEmpresa','LIKE','%'.$request->empresas.'%')
            
            ->paginate(2);
        }
            

            ///*********************** */
        $catselect = DB::table('empresa')
        ->where('estado',1)
        ->where('idEmpresa',$id)->first();
            //************ */
        $empresas = DB::table('empresa')->where('estado',1)->get();
        $categorias = DB::table('categoria')->where('estado',1)->get();
        return view('modulostienda.single.tienda',compact('empresas','categorias','catselect','productos'));
        
    }
}

}
