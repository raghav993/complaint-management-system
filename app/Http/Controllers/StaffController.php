<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StaffController extends Controller
{
    public function dashboard()
    {
        return view('staff.dashboard');
    }

    public function index()
    {
        $staff = User::paginate(15);
        return view('admin.staff.index', compact('staff'));
    }

    public function create()
    {
        return view('staff.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:staff,email',
            'password' => 'required|min:6|confirmed',
            'roles' => 'array',
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);


        return redirect()->route('staffs.index')->with('success', 'User created.');
    }

    public function showProfile (User $user)
    {
        return view('staff.profile', compact('user'));
    }

    public function edit(User $user)
    {
        return view('staff.edit_profile', compact('user'));
    }
    public function editProfile($id)
    {
        $user = User::findOrFail($id);
        return view('staff.edit-profile', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:staff,email,' . $user->id,
            'password' => 'nullable|min:6|confirmed',
            'roles' => 'array',
        ]);

        $user->name = $data['name'];
        $user->email = $data['email'];
        if (!empty($data['password'])) {
            $user->password = Hash::make($data['password']);
        }
        $user->save();

        return redirect()->route('staff.index')->with('success', 'User updated.');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('staff.index')->with('success', 'User deleted.');
    }

    public function profile()
    {
        $user = auth()->user();
        return view('staff.profile', compact('user'));
    }
}
