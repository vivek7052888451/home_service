<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index(){
        $cate=Category::where('status','Active')->get();
        $latest=Category::where('status','Active')->latest()->get();
        return view('welcome',compact('cate','latest'));
    }
    public function allcategory(){
        return view('all_category');
    }
    public function categoryDetails(){
        return view('categories-detail');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('backend.dashboard');
    // }

}
