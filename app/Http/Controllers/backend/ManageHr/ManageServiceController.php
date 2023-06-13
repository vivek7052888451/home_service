<?php

namespace App\Http\Controllers\backend\ManageHr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManageServiceController extends Controller
{
    public function manageServic()
    {
        return view('backend.manage_hr.manage-service');
    }

    public function addServiceProvider()
    {
        return view('backend.manage_hr.add_service_provider');
    }
}
