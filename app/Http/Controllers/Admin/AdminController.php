<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Section;
use App\Models\Engineer;
use App\Models\Complaint;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        $todayComplaints = Complaint::whereDate('complaint_date', Carbon::today())->get();
        $totalTodayComplaints = $todayComplaints->count();

        $resolvedComplaints = Complaint::where('status', 'completed')->get();
        // dd($resolvedComplaints);
        $totalResolvedComplaints = $resolvedComplaints->count();
        $todayAssigned = Complaint::where('status', 'in_progress')->get();
        $inProgressComplaints = $todayAssigned->count();
        $pending = Complaint::where('status', 'open')->get();
        $pendingComplaints = $pending->count();
        $closed = Complaint::where('status', 'completed')->get();
        $closedComplaints = $pending->count();

        $todayResolved =Complaint::whereDate('completed_at', Carbon::today())->where('status', 'completed')->get();
        $todayTotalResolved = $todayResolved->count();
    //    $departmentStatus;
        return view('admin.dashboard', compact('users', 'engineers', 'complaints', 'sections',
         'totalUsers', 'totalEngineers', 'totalComplaints', 'totalSections', 
         'totalTodayComplaints', 'totalResolvedComplaints', 'resolvedComplaints', 'todayComplaints',
         'todayAssigned', 'inProgressComplaints', 'todayResolved', 'todayTotalResolved',
          'pending', 'pendingComplaints', 'closed', 'closedComplaints'));
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
    public function sections()
    {
        $sections = Section::paginate(10);
        return view('admin.sections', compact('sections'));
    }

    public function software()
    {
        $engineers = Engineer::where('section', 'software')->paginate(10);
        return view('admin.software', compact('engineers'));
    }

    public function hardware()
    {
        $engineers = Engineer::where('section', 'hardware')->paginate(10);
        return view('admin.hardware', compact('engineers'));
    }

    public function bySection($section)
    {
        return Engineer::where('section', $section)->get();
    }
}
