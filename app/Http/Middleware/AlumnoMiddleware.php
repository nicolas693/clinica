<?php

namespace clinica\Http\Middleware;
use Auth;
use Closure;
use clinica\Models\Alumnos\Alumnos;


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
       $alu=Alumnos::where('user_id','=',Auth::user()->id)->first();
       
       if(Auth::user()->idrol==3 && $alu->activo==1){
         return $next($request);
       }
       else{

         return abort(403);
       }
     }
}
