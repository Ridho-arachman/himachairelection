<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsureIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return redirect('/admin/login')->with('error', 'Silakan login terlebih dahulu.');
        }

        // Jika pengguna login tetapi bukan admin, logout dan arahkan ke login
        if (Auth::user()->role !== 'admin') {
            Auth::logout(); // Logout pengguna
            return redirect('/admin/login')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
        }

        // Jika pengguna adalah admin, teruskan request
        return $next($request);
    }
}
