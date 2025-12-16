<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfNotAuthenticated
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            return $next($request);
        }

        // If URL starts with /user → redirect to user login
        if ($request->is('user/*')) {
            return redirect()->route('login.user');
        }

        // If URL starts with /advocate → redirect to advocate login
        if ($request->is('advocate/*')) {
            return redirect()->route('login.advocate');
        }

        // If URL starts with /admin → redirect to admin login
        if ($request->is('admin/*')) {
            return redirect()->route('login.admin');
        }

        // Default fallback
        return redirect()->route('login.user');
    }
}
