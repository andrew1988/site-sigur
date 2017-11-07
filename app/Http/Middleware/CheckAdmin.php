<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$guard = null)
    {
          dump(Auth::user()->status);
          $a = 0;
          if($a == 1){
            if (Auth::guard($guard)->check()) {
                return redirect()->route('web-admin');
            }
          }

        return $next($request);
    }
}
