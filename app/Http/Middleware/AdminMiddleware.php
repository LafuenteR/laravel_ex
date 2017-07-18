<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
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
        if($request->user()->role != 'admin')
        {
            // return "Sorry you are not allowede here";
            return back();
        }
        else{
            // return redirect('/home');
            return $next($request);
        }
        // return $next($request);
    }
}
