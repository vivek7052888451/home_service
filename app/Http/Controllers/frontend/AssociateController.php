<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use App\Models\User;
use Auth;

class AssociateController extends Controller
{
    public function login(Request $request)
    {
        $request->except('_token');
        $credentials=$request->validate([
            'email'=>'required',
            'password'=>'required'

        ]);
        
        if (Auth::attempt($credentials)) {
          $user = Auth::user();
        if (!$user->hasRole('Associate')) {
            Auth::logout();
            return back()->with("Invalid Details");
        } 
        else
            return redirect()->route('dashboard');
        }
        else
       return back()->with("Invalid Details"); 
    }
    


    public function create(Request $request)

    {
        
         $data=$request->validate([
                'email'=>'required',
                'name'=>'required',
                'phone'=>'required',
                'password'=>'required'

            ]);
        try{
               
            $data['password'] = Hash::make($request->password);
            $user = User::create($data);
            $user->assignRole('Associate');
            if ($user) {
                return back();
            }
        }catch(\Exception $e){
            dd($e->getMessage());
            abort(404);
        }
    }
    
}
