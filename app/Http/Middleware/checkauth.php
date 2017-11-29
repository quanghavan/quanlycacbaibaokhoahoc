<?php

namespace App\Http\Middleware;

use Closure;

class checkauth
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
        if(!$request->session()->has('logged')){
            return redirect('/admin');
        }
        return $next($request);
    }
}
