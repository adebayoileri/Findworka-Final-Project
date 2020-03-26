<?php

namespace App\Http\Middleware;

use Closure;

class isSuspended
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
        if(auth()->user()->suspend == 1){
            return redirect('/suspend');
        }
        return $next($request);
    }
}
