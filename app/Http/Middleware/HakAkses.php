<?php

namespace App\Http\Middleware;

use Closure;

use Auth;

class HakAkses
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if (auth()->check() && !auth()->user()->hasRole($role)) {
            return redirect('hakakses');
            }
        return $next($request);
    }
}
