<?php

namespace clinica\Http\Middleware;
use Auth;
use Closure;

class AlumnoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     public function handle($request, Closure $next)
     {
       $user=Auth::user();
       if(Auth::check() && $user->idrol == 3){
         return $next($request);
       }
       return "insuficientes permisos" ;
     }
}
