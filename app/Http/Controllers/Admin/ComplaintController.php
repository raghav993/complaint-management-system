<?php

namespace App\Http\Controllers\Admin;

use App\Models\Item;
use App\Models\Engineer;
use App\Models\Complaint;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\SendComplaintAsignMail;
use Illuminate\Support\Facades\Mail;


class ComplaintController extends Controller
{
    public function index()
    {
        $complaints = Complaint::all();
        return view('admin.complaints.index', compact('complaints'));
    }

    public function create()
    {
        $items = Item::all();
        return view('users.complaints.create', compact('items'));
    }

    public function store(Request $request)
    {
        $complaint = new Complaint;
        $complaint->court_number = $request->input('court_number');
        $complaint->device_name = $request->input('device_name');
        $complaint->serial_number = $request->input('serial_number');
        $complaint->ct_number = $request->input('ct_number');
        $complaint->product_number = $request->input('product_number');
        $complaint->person_in_charge = $request->input('person_in_charge');
        $complaint->save();
        return redirect()->route('complaints.index');
    }
    public function assign(Request $request)
    {
        $request->validate([
            'complaint_id' => 'required',
            'engineer_id'  => 'required'
        ]);

        $complaint = Complaint::findOrFail($request->complaint_id);
        $engineer = Engineer::findOrFail($request->engineer_id);
        // Update complaint table
        $complaint->engineer_id = $request->engineer_id;
        $complaint->status = 'in_progress';
        $complaint->save();
        Mail::to($engineer->email)->send(new SendComplaintAsignMail(
            $engineer->name,
            $complaint->complaint_no,
            $complaint->problem,
            $complaint->person_name,
            $complaint->section->name
        ));

        return back()->with('success', 'Engineer Assigned Successfully');
    }
}
