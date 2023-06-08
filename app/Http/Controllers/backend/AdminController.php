<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
class AdminController extends Controller
{
    public function index(){
        return view('backend.dashboard');
    }
    public  function loginform()
    {
        return view('backend.login');
    }
    public  function login(Request $request)
    {
        $credentials = [
            'email' => $request['email'],
            'password' => $request['password'],
        ];

        if (Auth::attempt($credentials)) {
          $user = Auth::user();
        if (!$user->hasRole('Admin')) {
            Auth::logout();
            return back()->with("Invalid Details");
        } 
        else
            return redirect()->route('dashboard');
    }
    else
       return back()->with("Invalid Details"); 
    }
    public  function logout()
    {
        Auth::logout();
        return redirect()->route('logout');

    }

    public function showCustomer()
    {
        $customers = User::role('Customer')->get();
        return view('backend.customer.index',compact('customers'));
    }
     public function showAssociate()
    {
        $associate = User::role('Associate')->get();
        return view('backend.associate.index',compact('associate'));
    }
    public function todaySummary()
    {
        return view('backend.today_summary');
    }
}
