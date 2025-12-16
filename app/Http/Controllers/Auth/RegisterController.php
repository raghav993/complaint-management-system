<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    /* --------------------------------------
     * SHOW SEPARATE REGISTER PAGES
     * -------------------------------------- */

    public function showUserRegisterForm()
    {
        return view('auth.register-user');
    }

    public function showAdminRegisterForm()
    {
        return view('auth.register-admin');
    }

    /* --------------------------------------
     * HANDLE REGISTER REQUESTS
     * -------------------------------------- */
    public function userRegister(Request $request)
    {
        return $this->register($request,'user.dashboard');
    }

    public function adminRegister(Request $request)
    {
        return $this->register($request,'admin.dashboard');
    }
    
    /* --------------------------------------
     * CORE REGISTER LOGIC
     * -------------------------------------- */
    protected function register(Request $request, string $redirectRoute)
    {
        $request->validate($this->messages());

        $user = User::create([
            'username'         => $request->username,
            'userpass'      => Hash::make($request->userpass),
        ]);

        Auth::login($user);

        return redirect()->route($redirectRoute);
    }

    /* --------------------------------------
     * Validation Rules
     * -------------------------------------- */
    protected function rules(string $role)
    {
        $rules = [
            // 'name'     => 'required|string|max:255',
            'username'    => 'required|max:255|unique:users,username',
            'userpass' => ['required', 'confirmed', Password::min(6)],
        ];
        return $rules;
    }

    protected function messages()
    {
        return [
            'username.unique'         => 'This username is already registered.',
            'userpass.confirmed'   => 'Password confirmation does not match.',
        ];
    }
}
