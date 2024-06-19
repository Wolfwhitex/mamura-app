<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Pastikan user yang sedang login adalah seller
        if (auth()->check() && auth()->user()->role == 'seller') {
            return $next($request);
        }

        // Redirect ke halaman login jika tidak diotorisasi
        return redirect()->route('loginseller');
    }
}
