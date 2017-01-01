<?php

namespace clinica\Http\Middleware;
use Auth;
use Closure;

class AdminMiddleware
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
        if($usuario->idrol!=1){
          return "Insuficientes Permisos"

        }
        return $next($request);
    }
}
