<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Session;

class Admin
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
		if(\Auth::user()->tipo != "admin") {
            return redirect(url('/'));
        }

		//continúa tu camino
        return $next($request);
    }
}
