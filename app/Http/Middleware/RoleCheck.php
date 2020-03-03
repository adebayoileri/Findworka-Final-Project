<?php

namespace App\Http\Middleware;

use Closure;

class RoleCheck
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
        if (Auth()->check() == false) {
            abort(404);
        }

        
        if(auth()->user()->privilege_id == 2){
            return $next($request);
        }

        
        else{
            abort(404);
        }
    }
}
