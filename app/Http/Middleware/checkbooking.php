<?php

namespace App\Http\Middleware;

use Closure;
use Alert;
use Auth;

class checkbooking
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
        if(!(Auth::guard('web')->check()))
        {
            Alert::error('sorry','Please Log In First');
            return redirect()->route('front.index');
        }

        return $next($request);
    }
}
