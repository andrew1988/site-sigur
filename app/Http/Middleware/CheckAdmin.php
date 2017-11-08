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
          /*dd(Auth::guard($guard)->check());
            if (Auth::guard($guard)->check()) {
              if(Auth::user()->type == 2){//if user type is 1 then it's an admin.
                return redirect()->route('web-admin');
              }else{
                return redirect()->route('home');
              }

            }*/

        return $next($request);
    }
}
