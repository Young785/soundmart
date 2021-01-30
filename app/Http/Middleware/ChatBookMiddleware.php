<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\ChatBookMiddleware as Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class ChatBookMiddleware 
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
        $session = Auth::user();
        if ($session == null) {
            return redirect("/page/login");
        }else{
            return $next($request);
        }
    }
}
