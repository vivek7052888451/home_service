<?php

namespace App\Http\Controllers\backend\expences;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddExpencesController extends Controller
{
    public function addExpences()
    {
        return view('backend.expences.add_expences');
    }
    public function todayReportExpences()
    {
        return view('backend.expences.today_report_expences');
    }

    public function addManageHeadExp()
    {
        return view('backend.expences.add_manage_head_exp');
    }
    public function addExpencesHead()
    {
        return view('backend.expences.addexpences_head');
    }
}
