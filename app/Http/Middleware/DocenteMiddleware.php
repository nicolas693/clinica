<?php

namespace clinica\Http\Middleware;

use Closure;
use Auth;
use clinica\Models\Docente\Docente;

class DocenteMiddleware
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
      $do=Docente::where('user_id','=',Auth::user()->id)->first();
      
      if(Auth::user()->idrol==2 && $do->activo==1){
        return $next($request);
      }
      else{
        return abort(403);
      }

    }
}
