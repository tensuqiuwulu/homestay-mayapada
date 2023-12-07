<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $locale = $request->segment(1); // Ambil bahasa dari segment pertama URL
        if (in_array($locale, ['en', 'id'])) {
            app()->setLocale($locale); // Set bahasa aplikasi
        } else {
            app()->setLocale(config('app.locale')); // Jika bahasa tidak valid, gunakan bahasa default
        }

        return $next($request);
    }
}
