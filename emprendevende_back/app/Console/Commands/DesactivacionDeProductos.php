<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
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
            $empresa = DB::table('facturacion')
            /*->select('user_id', DB::raw('count(*) as total_posts'))
            ->groupBy('user_id)*/
            ->get();
        
        // update statistics table
        foreach($empresa as $e)
        {
            DB::table('empresa')
            ->where('idEmpresa', $e->idEmpresa)
            ->update(['estado' => 1]);
        }
    }
}
