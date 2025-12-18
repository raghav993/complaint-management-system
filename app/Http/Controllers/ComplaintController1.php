<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Complaint;
use App\Models\Section;
use Illuminate\Http\Request;


class ComplaintController1 extends Controller
{
    public function index()
    {
        $complaints = Complaint::all();
        return view('users.complaints.index', compact('complaints'));
    }

    public function create()
    {
        $items = Item::all();
        $sections = Section::all();
        return view('users.complaints.create', compact('items', 'sections'));
    }

    public function store(Request $request)
    {
        $complaint = new Complaint;
        $complaint->item_id = $request->input('item_id');
        $complaint->sr_no = $request->input('sr_no');
        $complaint->company = $request->input('company');
        $complaint->model_no = $request->input('model_no');
        $complaint->section_id = $request->input('section_id');
        $complaint->person_name = $request->input('person_name');
        $complaint->problem = $request->input('problem');
        $complaint->save();
        return redirect()->route('complaints');
    }

    public function assignKa(Request $request)
    {
        $complaint = Complaint::find($request->complaint_id);
        $complaint->assigned_to = $request->ka_id;
        $complaint->save();
        return response()->json(['message' => 'Complaint assigned successfully']);
    }
}
