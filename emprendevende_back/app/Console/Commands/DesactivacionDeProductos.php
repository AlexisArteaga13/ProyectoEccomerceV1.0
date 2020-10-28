<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon; 
class DesactivacionDeProductos extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'actualizacion:pagos';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Actualizamos los productos de acuerdo al plan';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // Probamos para que actualice solo las empresas
        $facturacion = DB::table('facturacion')->where('fechaPago','=',Carbon::now())
            /*->select('user_id', DB::raw('count(*) as total_posts'))
            ->groupBy('user_id)*/
            ->get();
      
        // update statistics table
        foreach($facturacion as $f)
        {
            DB::table('facturacion')
            ->where('idFACTURACIÓN', $f->idFACTURACIÓN)
            ->update(['estado' => 2]);
        }
        $empresasdeudoras= DB::table('empresa as e')->join('facturacion as f','f.idFACTURACIÓN')->where('f.estado','2')->get();
        foreach($empresasdeudoras as $e){
            DB::table('users')
            ->where('id', $e->idUsuario)
            ->update(['idPlan' => 1]);
            $productos = DB::table('producto')->where('idEmpresa',$e->idEmpresa)->get();
            foreach($productos as $p){
                DB::table('producto')
                ->where('idPRODUCTO', $e->idPRODUCTO)
                ->update(['estado' => 0]);
            }
        }
    }
}
