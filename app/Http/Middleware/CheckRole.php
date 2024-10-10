<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
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
        $user = Auth::user();

        // Cek apakah user terautentikasi
        if (!$user) {
            return redirect('/'); // Redirect ke halaman utama jika tidak terautentikasi
        }

        // Cek jika user bukan admin
        if ($user->role !== 'admin') {
            return redirect('/'); // Redirect ke halaman utama jika bukan admin
        }

        return $next($request);
    }
}
