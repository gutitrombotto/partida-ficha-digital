<?php

namespace App\Http\Middleware;

use Closure;

class CheckAhijado
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
        
        if ( !$request->user()->es_ahijado) {
            return redirect('home');
        }

        return $next($request);
    }
}
