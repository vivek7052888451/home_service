<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Hash;
use Exception;
use Twilio\Rest\Client;


class CustomerController extends Controller
{
    public function login(Request $request)
    {
        // dd($request->all());
                $receiverNumber = "+91 7052888451";
        $message = "Send OTP To Login";
  
        try {
  
            $account_sid = getenv("TWILIO_SID");
            $auth_token = getenv("TWILIO_TOKEN");
            $twilio_number = getenv("TWILIO_FROM");
  
            $client = new Client($account_sid, $auth_token);
            $client->messages->create($receiverNumber, [
                'from' => $twilio_number, 
                'body' => $message]);
  
            dd('SMS Sent Successfully.');
  
        } catch (Exception $e) {
            dd("Error: ". $e->getMessage());
        }

       //  $request->except('_token');
       //  $credentials=$request->validate([
       //      'email'=>'required',
       //      'password'=>'required'

       //  ]);
        
       //  if (Auth::attempt($credentials)) {
       //    $user = Auth::user();
       //  if (!$user->hasRole('Customer')) {
       //      Auth::logout();
       //      return back()->with("Invalid Details");
       //  } 
       //  else
       //      return redirect()->route('dashboard');
       //  }
       //  else
       // return back()->with("Invalid Details"); 
    }
    


    public function create(Request $request)
    {
        try{
                $data=$request->validate([
                'email'=>'required',
                'name'=>'required',
                'phone'=>'required',
                'password'=>'required'

            ]);
            $data['password'] = Hash::make($request->password);
            $user = User::create($data);
            $user->assignRole('Customer');
            if ($user) {
                return back();
            }
        }catch(\Exception $e){
            dd($e->getMessage());
            abort(404);
        }
        
           
    }
}
