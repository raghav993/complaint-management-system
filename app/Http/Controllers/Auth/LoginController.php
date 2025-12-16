<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /* ------------------------------
     * SHOW SEPARATE LOGIN FORMS
     * ------------------------------ */
    public function showUserLoginForm()
    {
        return view('auth.login-user');
    }

    public function showAdminLoginForm()
    {
        return view('auth.login-admin');
    }

    /* ------------------------------
     * PROCESS LOGIN REQUESTS
     * ------------------------------ */

    public function userLogin(Request $request)
    {
        $request->validate([
            'username'    => 'required',
            'password' => 'required'
        ]);

        // filtering by role
        $credentials = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->route('user.dashboard');
        }

        return back()->withErrors(['error' => 'Invalid credentials']);
    }

    public function adminLogin(Request $request)
    {
        $request->validate([
            'username'    => 'required',
            'password' => 'required'
        ]);

        // filtering by role
        $credentials = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['error' => 'Invalid credentials']);
    }

    protected function authenticate(Request $request, string $role, string $redirect)
    {
        $request->validate([
            'username'    => 'required',
            'password' => 'required'
        ]);

        // filtering by role
        $credentials = [
            'username' => $request->username,
            'password' => $request->password,
            'role' => $role,
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->route($redirect);
        }

        throw ValidationException::withMessages([
            'username' => ["Invalid credentials or incorrect role."]
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/');
    }
}
