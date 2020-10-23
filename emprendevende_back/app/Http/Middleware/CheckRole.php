<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role1,$role2)
{
    // VERIFICACIÓN DE ADMINISTRADOR
    if($role2 == ' '){
        if(!(Auth::check() && Auth::user()->tienerol()==$role1)) {
            //! $request->user()->hasRole($role)
            return redirect('home');
        }
    }
    else{
        if(!(Auth::check() && (Auth::user()->tienerol()== $role1 || Auth::user()->tienerol()== $role2))) {
            //! $request->user()->hasRole($role)
            return redirect('home');
        }
    }
    // VERIFICACIÓN DE VENDEDOR
    return $next($request);
    
}
}
