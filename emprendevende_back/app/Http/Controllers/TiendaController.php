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
        //return $request->all();
        $empresas = DB::table('empresa')->where('estado',1)->get();
        $categorias = DB::table('categoria')->where('estado',1)->get();
        
        return view('modulostienda.checkout',compact('empresas','categorias'));
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
