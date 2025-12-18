<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Complaint;
use Illuminate\Http\Request;


class ComplaintController extends Controller
{
    public function index()
    {
        $complaints = Complaint::all();
        return view('users.complaints.index', compact('complaints'));
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
}

