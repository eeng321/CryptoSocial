<?php

namespace App\Http\Middleware;

use Closure;

class SetUserData
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
        $userData = auth()->user();
        view()->share('userData',$userData);
        return $next($request);
    }
}
