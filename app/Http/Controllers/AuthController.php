<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm($guard)
    {
        return view('auth.login', compact('guard'));
    }

    public function login(Request $request, $guard)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth($guard)->attempt($credentials)) {
            return redirect()->intended("/{$guard}/dashboard");
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout($guard)
    {
        auth($guard)->logout();
        return redirect('/');
    }
}
