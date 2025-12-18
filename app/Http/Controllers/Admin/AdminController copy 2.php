<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Section;
use App\Models\Engineer;
use App\Models\Complaint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        $users = User::all();
        $engineers = Engineer::all();
        $complaints = Complaint::all();
        $sections = Section::all();
        $totalUsers = $users->count();
        $totalEngineers = $engineers->count();
        $totalComplaints = $complaints->count();
        $totalSections = $sections->count();
        return view('admin.dashboard', compact('users', 'engineers', 'complaints', 'sections', 'totalUsers', 'totalEngineers', 'totalComplaints', 'totalSections'));
    }

    public function showProfile()
    {
        $user = Auth::user();
        return view('admin.edit-profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'avatar' => 'nullable|image|max:2048',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:6',
        ]);

        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('avatars', 'public');
            $data['avatar'] = $path;
        }

        $user->update($data);

        return redirect()->back()->with('success', 'Profile updated.');
    }

   
}
