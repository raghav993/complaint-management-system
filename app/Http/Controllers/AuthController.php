<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use App\Models\Engineer;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
{
    $request->validate([
        'username' => 'required',
        'password' => 'required',
        'usertype' => 'required|in:user,staff,admin',
    ]);

    // Static passwords
    $staticPasswords = [
        'user'  => 'user@123',
        'staff' => 'staff@123',
        'admin' => 'admin@123',
    ];

    // Static password check
    if ($request->password !== $staticPasswords[$request->usertype]) {
        return back()->withErrors(['password' => 'Invalid password']);
    }

    // 🔹 STAFF LOGIN
    if ($request->usertype === 'staff') {

        $engineer = Engineer::where('username', $request->username)->first();

        if (!$engineer) {
            return back()->withErrors(['username' => 'Staff not found']);
        }

        // ✅ PASSWORD BYPASS LOGIN
        auth('staff')->loginUsingId($engineer->id);

        return redirect('/staff/dashboard');
    }

    // 🔹 USER / ADMIN LOGIN
    $user = User::where('username', $request->username)
        ->first();

    if (!$user) {
        return back()->withErrors(['username' => 'User not found']);
    }

    // ✅ PASSWORD BYPASS LOGIN
    auth()->loginUsingId($user->sno);

    return $request->usertype === 'admin'
        ? redirect('/admin/dashboard')
        : redirect('/user/dashboard');
}


    public function logout($type = 'web')
    {
        auth($type)->logout();
        return redirect('/');
    }
}
