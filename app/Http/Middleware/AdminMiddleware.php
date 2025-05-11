<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Izinkan akses ke halaman login dan registrasi
        if ($request->routeIs('filament.admin.auth.*')) {
            return $next($request);
        }

        if (Auth::check() && Auth::user()->role == 'admin') {
            return $next($request);
        }
        
        Auth::logout();
        return redirect()->route('filament.admin.auth.login')->with('error', 'Anda tidak diizinkan mengakses halaman ini. Hanya admin yang dapat login.');
    }
}