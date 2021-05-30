<?php

namespace App\Http\Middleware;

use Closure;

class LoginCheckMiddleware
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
        if($request->session()->has('employee_id')){
            return $next($request);
        }
        else{
            return redirect('/upazilla/login');
        }
    }
}
