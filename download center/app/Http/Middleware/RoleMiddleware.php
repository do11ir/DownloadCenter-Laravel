<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response; // اصلاح Response
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next, string $role): \Symfony\Component\HttpFoundation\Response
    {
        if (Auth::check() && Auth::user()->role === $role) {
            return $next($request);
        }
    
        abort(403, 'عدم دسترسی');
    }
}
