<?php

namespace clinica\Http\Middleware;

use Closure;
use Auth;

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
      if(Auth::user()->idrol==2){
        return $next($request);
      }
      else{
        return abort(403);
      }

    }
}
