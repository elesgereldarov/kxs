<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

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
		if(Auth::check()&& Auth::user()->role=='admin' && Auth::user()->active=='True')
		{
        return $next($request);
		}
		
		if(Auth::check()&& Auth::user()->role=='user' && Auth::user()->active=='True')
		{
        return $next($request);
		}
		else
		{
			return redirect('/admin/login')->with('message','Login olmamisiz');
		}
    }
}
