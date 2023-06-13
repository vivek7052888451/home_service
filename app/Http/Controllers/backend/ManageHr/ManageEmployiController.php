<?php

namespace App\Http\Controllers\backend\ManageHr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManageEmployiController extends Controller
{
    public function mangeEmployi()
    {
        return view ('backend.manage_hr.manage_employi');
    }

     public function addEmployee()
     {
        return view ('backend.manage_hr.add-employee');
    }
}
