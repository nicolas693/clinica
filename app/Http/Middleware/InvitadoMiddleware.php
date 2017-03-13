<?php

namespace clinica\Http\Middleware;
use Auth;
use Closure;



class InvitadoMiddleware
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


       if(Auth::user()->idrol==4){
         return $next($request);
       }
       else{

         return abort(403);
       }
     }
}
