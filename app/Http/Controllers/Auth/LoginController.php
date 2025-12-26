<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\User;
use App\Models\Engineer;
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
        'username' => 'required',
        'password' => 'required',
        'usertype' => 'required|in:user,staff,admin',
    ]);

    $staticPasswords = [
        'user'  => 'user@123',
        'staff' => 'staff@123',
        'admin' => 'admin@123',
    ];

    if ($request->password !== $staticPasswords[$request->usertype]) {
        return back()->withErrors(['password' => 'Invalid password']);
    }

    // 🔹 STAFF LOGIN
    if ($request->usertype === 'staff') {

        $engineer = Engineer::where('username', $request->username)->first();

        if (!$engineer) {
            return back()->withErrors(['username' => 'Staff not found']);
        }

        auth('staff')->loginUsingId($engineer->sno);

        // ✅ SESSION STORE
        session([
            'usertype' => 'staff'
        ]);

        return redirect('/staff/dashboard');
    }

    // 🔹 USER / ADMIN LOGIN
    $user = User::where('username', $request->username)->first();

    if (!$user) {
        return back()->withErrors(['username' => 'User not found']);
    }

    auth()->loginUsingId($user->sno);

    // ✅ SESSION STORE
    session([
        'usertype' => $request->usertype   // user / admin
    ]);

    return $request->usertype === 'admin'
        ? redirect('/admin/dashboard')
        : redirect('/user/dashboard');
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
