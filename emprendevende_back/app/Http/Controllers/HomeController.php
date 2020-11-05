<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $empresas = DB::table('empresa')->where('estado',1)->get();
        $categorias = DB::table('categoria')->where('estado',1)->get();
        return view('modulostienda.inicio',compact('empresas','categorias'));
    }
    public function indexadmin()
    {
        return view('vistasadmin.modulosadmin.principal');
    }
    public function micuenta()
    {
        
        $usuario=DB::table('users')->where('id',Auth::user()->id)->first();
        $planes = DB::table('plan')->get();
        return view('vistasadmin.modulosadmin.cuenta',compact('usuario','planes'));
    }
   
}
