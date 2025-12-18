<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Complaint;
use Symfony\Component\HttpFoundation\Request;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        $from_date  = $request->from_date;
        $to_date    = $request->to_date;

        $data = Complaint::all();
        return view('admin.reports.index', compact('data'));
    }
   
}
