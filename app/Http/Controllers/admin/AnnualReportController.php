<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AnnualReport;

class AnnualReportController extends Controller
{
    public function index()
    {
        return view('admin.annual-reports.annual-reports');
    }

    public function edit($id)
    {
        $report = AnnualReport::find($id);

        return view('admin.annual-reports.edit', compact('report'));
    }

    public function create()
    {
        return view('admin.annual-reports.create');
    }
}
