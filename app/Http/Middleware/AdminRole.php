<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class AdminRole
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
        if(Auth::user()->isAdmin == 1)
            return $next($request);
        else 
            return abort(404);
    }
}
