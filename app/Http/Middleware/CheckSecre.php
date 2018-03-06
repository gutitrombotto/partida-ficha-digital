<?php

namespace App\Http\Middleware;

use Closure;

class CheckSecre
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
        if ( !$request->user()->has_role('secretariado')) {
            return redirect('home');
        }

        return $next($request);
    }
}
