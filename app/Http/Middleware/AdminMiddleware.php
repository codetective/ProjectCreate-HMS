<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
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
        if (Auth::user()->role == 'superadmin' || Auth::user()->role == 'admin') {
            return $next($request);
        } else {
            return redirect('/dashboard')->withErrors(['status' => 'Unauthorized action']);
        }

        return $next($request);
    }
}
