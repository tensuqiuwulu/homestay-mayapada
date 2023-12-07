<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureUserIsAuthenticated
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
        // Periksa jika user tidak terautentikasi
        if (!Auth::check()) {
            // Jika tidak, redirect ke halaman login
            return redirect()->route('login');
        }

        // Jika terautentikasi, lanjutkan request ke next middleware
        return $next($request);
    }
}