<?php

namespace App\Http\Middleware;

use Closure;
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
=======
>>>>>>> 3c2effb7fd22038472317c07b47d3a693bc25846

class AdminLoginMiddleWare
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
<<<<<<< HEAD
        if (Auth::guest()) {
            return redirect()->guest('login');
        }
        if(Auth::check()){
            return $next($request);
        }else{
            return redirect('login');
        }
=======
        return $next($request);
>>>>>>> 3c2effb7fd22038472317c07b47d3a693bc25846
    }
}
