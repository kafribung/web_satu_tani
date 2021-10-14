<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ValidationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();
        if ($user) {
            if ($user->validation == 0) {
                return $next($request);
            } else abort('404');
        } else abort('404');
    }
}
