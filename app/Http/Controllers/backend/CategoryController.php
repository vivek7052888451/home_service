<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Auth;
use Str;


class CategoryController extends Controller
{
    public function index()
    {
        $category=Category::where('status','active')->get();
        return view('backend.category.index',compact('category'));
    }

    public function create()
    {
        return view('backend.category.creat');

    }

    public function CategoryStore(Request $request)
    {
        $this->validate($request, [
          'category_name' => 'required',
          'fa_fa_icon' => 'required',
          'image' => 'required',
          
       ]);
        $data=$request->all();
            if($request->file('image')){
            $file= $request->file('image');
            $filename= rand(1000000,99999999999).$file->getClientOriginalName();
            $file-> move(public_path('backend/assets/img/'), $filename);
            $data['image']= $filename;
        }
        $data['slug'] = Str::slug($request->category_name,'-');

         $category=Category::create($data);
      if ($category) {
            return redirect('admin/category')->with('success', 'Success! User created');
        }
        else {
            return back()->with('failed', 'Failed! User not created');
        }
    }
     public function categoryEdit($id)
    {
        $category=Category::find($id);
        return view('backend.category.edit',compact('category'));

    }
    public function categoryUpdate(Request $request)
    {
        //dd($request->all());
        $category=Category::where('id',$request->id)->update([
            'category_name'=>$request->category_name,
            'fa_fa_icon'=>$request->fa_fa_icon,
            'image'=>$request->image,
        ]);
        
        

    }
    public function categoryDelete($id)
    {
        Category::find($id)->delete();
      return redirect('admin/category')->with('success', 'Your category has been Deleted.');


    }
}
