<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, string $role)
    {
        // If not logged in → redirect to correct login page
        if (!auth()->check()) {
            return redirect()->route('login.' . $role);
        }

        // If logged in but role does not match → 403 Forbidden
        if (auth()->user()->role !== $role) {
            abort(403, 'Access Denied');
        }

        return $next($request);
    }
}
