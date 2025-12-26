<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Http\Controllers\Controller;
use App\Models\Engineer;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ReportController extends Controller
{
    public function index()
    {
        $engineers = Engineer::all();
        $data = Complaint::whereNotNull('engineer_id')->get();
        return view('staff.reports.index', compact('data', 'engineers'));
    }

    public function filter(Request $request)
    {
        $query = Complaint::query();


        if ($request->filled('from_date') && $request->filled('to_date')) {
            $from = Carbon::parse($request->from_date)->startOfDay();
            $to = Carbon::parse($request->to_date)->endOfDay();
            $query->whereBetween('complaint_date', [$from, $to]);
        }

        if ($request->filled('engineer_id')) {
            $engineerId = (int) $request->engineer_id;
            $query->where('engineer_id', $engineerId);
        }

        $data = $query->get();

        // Return only the table rows as HTML for AJAX
        return response()->json([
            'html' => view('staff.reports.partials.table', compact('data'))->render()
        ]);
    }
}
