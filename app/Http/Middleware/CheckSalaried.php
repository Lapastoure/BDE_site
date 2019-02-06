<?php

namespace App\Http\Middleware;

use Closure;

class CheckSalaried
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
        if ($request->user()->id_usersstatus !== 3) {
            return redirect('home');
        }
        return $next($request);
    }
}