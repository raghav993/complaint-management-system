<?php

namespace App\Http\Controllers\Admin;

use App\Models\Engineer;
use App\Models\Complaint;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Request;

class ReportController extends Controller
{
    public function index(Request $request)
    {
       $engineers = Engineer::all();
        $data = Complaint::whereNotNull('engineer_id')->get();
        return view('admin.reports.index', compact('data', 'engineers'));
    }
   
}
