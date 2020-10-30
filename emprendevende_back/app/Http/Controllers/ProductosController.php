<?php

namespace App\Http\Controllers;
use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use DB;
use Auth;
use Illuminate\Support\Facades\Storage;
class ProductosController extends Controller
{
    //
    /*public function crear_user_vendedor(Request $request){       
         $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'apellidos' => ['required', 'string', 'max:255'],
            'clave' => ['required', 'string', 'min:8', 'confirmed'],

        ]);
            $request['codconfirmar']= Str::random(25);
      //else{
            $nuevovendedor=new User();
            $nuevovendedor->name = request('name');
            $nuevovendedor->apellidos = request('apellidos');
            $nuevovendedor->email = request('email');
            $nuevovendedor->password = bcrypt(request('clave'));
            $nuevovendedor->email_verified_at=request('codconfirmar');
            $nuevovendedor->estado='0';
            $nuevovendedor->save();
            $nuevovendedor -> asignarRol(1);
            Mail::send('emails.confirmarcorreo', $request->all(), function($message) use ($request) {
                $message->to($request['email'], $request['name'])->subject('Por favor confirma tu correo');
            });
            
           return back()->with('info','Confirme su cuenta desde su correo electrónico.');
           //return $nuevovendedor;
       // }
    }*/
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:["administrador"],["vendedor"]');
       
        //$this->middleware()->only('');
    }
    public function index(){
        if(Auth::user()->tieneRol()[0] == 'administrador'){
            $empresas= DB::table('empresa')->get();
            $categorias= DB::table('categoria')->where('estado','=',1)->get();
            $productos = DB::table('producto as p')
            ->join('empresa as e','p.idEmpresa','=','e.idEmpresa')
            ->join('categoria as c','p.idCategoria','=','c.idCategoria')
            ->select('p.*','e.nombreEmpresa','c.nombreCategoria')
            ->get();
            
           return view('vistasadmin.productos.pindex',compact('productos','categorias','empresas'));
        }
        else{
            $empresas= DB::table('empresa')->where('idUsuario','=',Auth::user()->id)->get();
            $categorias= DB::table('categoria')->where('estado','=',1)->get();
            $productos = DB::table('producto as p')
            ->join('empresa as e','p.idEmpresa','=','e.idEmpresa')
            ->join('categoria as c','p.idCategoria','=','c.idCategoria')
            ->where('e.idUsuario',Auth::user()->id)
            ->select('p.*','e.nombreEmpresa','c.nombreCategoria')
            ->get();
            
           return view('vistasadmin.productos.pindex',compact('productos','categorias','empresas'));
        }
       
    }
    public function validarporvendedor(Request $request){
       
        $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'categoria' =>['required'],
            'empresa' =>['required'],
            'precio' =>['required','numeric'],
            'marca' =>['required'],
            'imgfrontal' =>['image'],
            'imgposterior' =>['image'],
            'imgizquierda' =>['image'],
            'imgderecha' =>['image'],
            'imgsuperior' =>['image'],
            'imginferior' =>['image'],
            'peso' =>[' '],
            'stock' =>['required'],
            'unidad' =>['required'],
            'descripcion' =>['required'],
            
        ]);
        if(Auth::user()->tieneRol()[0]=='vendedor'){
            $planvendedor = Auth::user()->idPlan;
            if($planvendedor==1){
                $empresauser = DB::table('empresa')->where('idUsuario',Auth::user()->id)->first();
                $conteoderepisa = DB::table('producto')->where('idEmpresa',$empresauser->idEmpresa)->count();
                if($conteoderepisa<=3){
                    $this->store($request);
                }
                else{
                    return back()->with('info','Superaste el límite de tu plan, Que esperas? Migra ya!');
                }
                //return $conteoderepisa;
            }
           else{
                $empresauser = DB::table('empresa')->where('idUsuario',Auth::user()->id)->first();
                $conteoderepisa = DB::table('producto')->where('idEmpresa',$empresauser->idEmpresa)->count();
                if($conteoderepisa<=250){
                    $this->store($request);
                }
                else{
                    return back()->with('info','Superaste el límite de tu plan');
                }
           }
           
        }
        else {
            // Administradores
            $this->store($request);
        }
    }
    public function store(Request $request){
      $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'categoria' =>['required'],
            'empresa' =>['required'],
            'precio' =>['required','numeric'],
            'marca' =>['required'],
            'imgfrontal' =>['image'],
            'imgposterior' =>['image'],
            'imgizquierda' =>['image'],
            'imgderecha' =>['image'],
            'imgsuperior' =>['image'],
            'imginferior' =>['image'],
            'peso' =>[' '],
            'stock' =>['required'],
            'unidad' =>['required'],
            'descripcion' =>['required'],
            
        ]);
        if(Auth::user()->tieneRol()[0]=='vendedor'){
            $planvendedor = Auth::user()->idPlan;
            if($planvendedor==1){
                $empresauser = DB::table('empresa')->where('idUsuario',Auth::user()->id)->first();
                $conteoderepisa = DB::table('producto')->where('idEmpresa',$empresauser->idEmpresa)->count();
                if($conteoderepisa<=2){
                    $newproducto = new Producto();
                    $newproducto->nombreProducto = $request->nombre;
                    $newproducto->precio = $request->precio;
                    $newproducto->marca = $request->marca;
                    $newproducto->peso = $request->peso;
                    $newproducto->stock = $request->stock;
                    $newproducto->unidad = $request->unidad;
                    $newproducto->descripcion = $request->descripcion;
                    $newproducto->vistas ="";
                    $newproducto->destacado ="0";
                    $newproducto->calificacion ="";
                    if($request->file('imgfrontal')){
                        $newproducto->imagen_f = $request->file('imgfrontal')->store('public/producto');
                    }
                    elseif($request->file('imgizquierda')){
                        $newproducto->imagen_p = $request->file('imgposterior')->store('public/producto');
                    }
                    elseif($request->file('imgizquierda')){
                        $newproducto->imagen_iz = $request->file('imgizquierda')->store('public/producto');
                    }
                    elseif($request->file('imgderecha')){
                        $newproducto->imagen_d = $request->file('imgderecha')->store('public/producto');
                    }
                    elseif($request->file('imgsuperior')){
                        $newproducto->imagen_s = $request->file('imgsuperior')->store('public/producto');
                    }
                    elseif($request->file('imginferior')){
                        $newproducto->imagen_in = $request->file('imginferior')->store('public/producto');
                    }
                    
                    $newproducto->idCategoria = $request->categoria;
                    $newproducto->idEmpresa = $request->empresa;
                    $newproducto->estado = '1';
                    if($newproducto->save()){
                        return back()->with('success','Producto Creado Correctamente.');
                    }
                    else{
                        return back()->with('error','Ocurrió un error.');
                    }
                }
                else{
                    return back()->with('info','Superaste el límite de tu plan, Que esperas? Migra ya!');
                }
                //return $conteoderepisa;
            }
           else{
                $empresauser = DB::table('empresa')->where('idUsuario',Auth::user()->id)->first();
                $conteoderepisa = DB::table('producto')->where('idEmpresa',$empresauser->idEmpresa)->count();
                if($conteoderepisa<=250){
                    $newproducto = new Producto();
                    $newproducto->nombreProducto = $request->nombre;
                    $newproducto->precio = $request->precio;
                    $newproducto->marca = $request->marca;
                    $newproducto->peso = $request->peso;
                    $newproducto->stock = $request->stock;
                    $newproducto->unidad = $request->unidad;
                    $newproducto->descripcion = $request->descripcion;
                    $newproducto->vistas ="";
                    $newproducto->calificacion ="";
                    $newproducto->destacado ="0";
                    if($request->file('imgfrontal')){
                        $newproducto->imagen_f = $request->file('imgfrontal')->store('public/producto');
                    }
                    elseif($request->file('imgizquierda')){
                        $newproducto->imagen_p = $request->file('imgposterior')->store('public/producto');
                    }
                    elseif($request->file('imgizquierda')){
                        $newproducto->imagen_iz = $request->file('imgizquierda')->store('public/producto');
                    }
                    elseif($request->file('imgderecha')){
                        $newproducto->imagen_d = $request->file('imgderecha')->store('public/producto');
                    }
                    elseif($request->file('imgsuperior')){
                        $newproducto->imagen_s = $request->file('imgsuperior')->store('public/producto');
                    }
                    elseif($request->file('imginferior')){
                        $newproducto->imagen_in = $request->file('imginferior')->store('public/producto');
                    }
                    
                    $newproducto->idCategoria = $request->categoria;
                    $newproducto->idEmpresa = $request->empresa;
                    $newproducto->estado = '1';
                    if($newproducto->save()){
                        return back()->with('success','Producto Creado Correctamente.');
                    }
                    else{
                        return back()->with('error','Ocurrió un error.');
                    }
                            }
                            else{
                                return back()->with('info','Superaste el límite de tu plan');
                            }
                    }
           
        }
        else {
            
            // Administradores
            $newproducto = new Producto();
            $newproducto->nombreProducto = $request->nombre;
            $newproducto->precio = $request->precio;
            $newproducto->marca = $request->marca;
            $newproducto->peso = $request->peso;
            $newproducto->stock = $request->stock;
            $newproducto->unidad = $request->unidad;
            $newproducto->descripcion = $request->descripcion;
            $newproducto->vistas ="";
            $newproducto->calificacion ="";
            $newproducto->destacado ="0";
            if($request->file('imgfrontal')){
                $newproducto->imagen_f = $request->file('imgfrontal')->store('public/producto');
            }
            elseif($request->file('imgizquierda')){
                $newproducto->imagen_p = $request->file('imgposterior')->store('public/producto');
            }
            elseif($request->file('imgizquierda')){
                $newproducto->imagen_iz = $request->file('imgizquierda')->store('public/producto');
            }
            elseif($request->file('imgderecha')){
                $newproducto->imagen_d = $request->file('imgderecha')->store('public/producto');
            }
            elseif($request->file('imgsuperior')){
                $newproducto->imagen_s = $request->file('imgsuperior')->store('public/producto');
            }
            elseif($request->file('imginferior')){
                $newproducto->imagen_in = $request->file('imginferior')->store('public/producto');
            }
            
            $newproducto->idCategoria = $request->categoria;
            $newproducto->idEmpresa = $request->empresa;
            $newproducto->estado = '1';
            if($newproducto->save()){
                return back()->with('success','Producto Creado Correctamente.');
            }
            else{
                return redirect()->back()->with('error','Ocurrió un error.');
            }
        }
        
      //  return $request->all();
    }
    public function update(Request $request){
        //return $request->all();
        $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'estado' =>['required'],
            'categoria' =>['required'],
            'precio' =>['required','numeric','min:0.10'],
            'marca' =>['required'],
            'imgfrontal' =>['image'],
            'imgposterior' =>['image'],
            'imgizquierda' =>['image'],
            'imgderecha' =>['image'],
            'imgsuperior' =>['image'],
            'imginferior' =>['image'],
            'peso' =>['required'],
            'stock' =>['required'],
            'unidad' =>['required'],
            'descripcion' =>['required'],
            'vistas' =>[''],
            'calificacion' =>[''],
            
        ]);

        if(Auth::user()->tieneRol()[0]=='administrador' || Auth::user()->idPlan == '2'){
            $producto= Producto::findOrFail($request->id);
            $producto->nombreProducto = $request->nombre;
            $producto->estado = $request->estado;
            $producto->precio = $request->precio;
            $producto->descripcion = $request->descripcion;
            $producto->marca = $request->marca;
            $producto->idCategoria = $request->categoria;
            if($request->file('imgfrontal')){
                
                $producto->imagen_f = $request->file('imgfrontal')->store('public');
            }
            if($request->file('imgposterior')){
                
                $producto->imagen_p = $request->file('imgposterior')->store('public');
            }
            if($request->file('imgizquierda')){
                
                $producto->imagen_iz = $request->file('imgizquierda')->store('public');
            }
            if($request->file('imgderecha')){
                
                $producto->imagen_d = $request->file('imgderecha')->store('public');
            }
            if($request->file('imgsuperior')){
                
                $producto->imagen_s = $request->file('imgsuperior')->store('public');
            }
            if($request->file('imginferior')){
                
                $producto->imagen_in = $request->file('imginferior')->store('public');
            }
            $producto->peso = $request->peso;
            $producto->stock  = $request->stock;
            $producto->unidad = $request->unidad;
            $producto->vistas = $request->vistas;
            $producto->calificacion  = $request->calificacion;
            
            if($producto->update()){
                return back()->with('success','Producto Actualizado Correctamente.');
            }
            else{
                return back()->with('error','Ocurrió un error.');
            }
        }
        elseif(Auth::user()->idPlan == '1'){
            $empresa = DB::table('empresa')->where('idUsuario',Auth::user()->id)->first();
       
            $conteodeproductos = DB::table('producto')
            ->where('idEmpresa',$empresa->idEmpresa)
            ->where('estado','1')
            ->count();
            
            if($conteodeproductos <3){
                $producto= Producto::findOrFail($request->id);
                $producto->nombreProducto = $request->nombre;
                $producto->estado = $request->estado;
                $producto->precio = $request->precio;
                $producto->descripcion = $request->descripcion;
                $producto->marca = $request->marca;
                $producto->idCategoria = $request->categoria;
                if($request->file('imgfrontal')){
                    
                    $producto->imagen_f = $request->file('imgfrontal')->store('public');
                }
                if($request->file('imgposterior')){
                    
                    $producto->imagen_p = $request->file('imgposterior')->store('public');
                }
                if($request->file('imgizquierda')){
                    
                    $producto->imagen_iz = $request->file('imgizquierda')->store('public');
                }
                if($request->file('imgderecha')){
                    
                    $producto->imagen_d = $request->file('imgderecha')->store('public');
                }
                if($request->file('imgsuperior')){
                    
                    $producto->imagen_s = $request->file('imgsuperior')->store('public');
                }
                if($request->file('imginferior')){
                    
                    $producto->imagen_in = $request->file('imginferior')->store('public');
                }
                $producto->peso = $request->peso;
                $producto->stock  = $request->stock;
                $producto->unidad = $request->unidad;
                $producto->vistas = $request->vistas;
                $producto->calificacion  = $request->calificacion;
                
                if($producto->update()){
                    return back()->with('success','Producto Actualizado Correctamente.');
                }
                else{
                    return back()->with('error','Ocurrió un error.');
                }
            }
            else{
                /*$empresasdeudoras= DB::table('empresa as e')
        ->join('facturacion as f','f.idempresa','e.idEmpresa')
        ->where('f.estado','2')
        ->get();
        return json_encode($empresasdeudoras);*/
                alert()->warning('Limitado', 'Se encuentra límitado a tener sólo 3 productos activos, ve a planes y migra YA!');
                return back();
                    //return redirect()->back()->with('info','Su plan lo está limitando, cambiese YA!.');
                
            }
        }
    }
    public function destroy($id)
    {
        //return $id;
        $productos = Producto::FindOrFail($id);
        $productos->estado = '0';
        $productos->destacado = '0';
        if($productos->update()){
            return back()->with('success','Producto Desactivado Correctamente.');
        }
        else{
            return back()->with('error','Ocurrió un error.');
        }
    }
    public function destacar($id)
    {
        //return $id;
        $productos = Producto::FindOrFail($id);
        $productos->destacado = '1';
        if($productos->update()){
            return back()->with('success','Producto Destacado Correctamente.');
        }
        else{
            return back()->with('error','Ocurrió un error.');
        }
    }

}
