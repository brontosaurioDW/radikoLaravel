<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Session;

class Huerta
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
        if(Auth::user()->tipo != 'huerta') {
            return redirect()->route('huertas.principal');
        }
        return $next($request);
    }
}