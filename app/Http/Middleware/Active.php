<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Session;

class Active
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
        if(!Auth::user()->active)
        {            
            Auth::logout();
            Session::flash('info', 'Tu usuario ha sido bloqueado');
            return redirect()->back();
        }
        return $next($request);
    }
}
