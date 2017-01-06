<?php

namespace clinica\Http\Middleware;

use Closure;
use Auth;

class Admin
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
        $usuario=Auth::user();
        if($usuario->idrol==1){
          return $next($request);

        }else{
          return view("No tienes permisos suficientes");
        }

    }
}
