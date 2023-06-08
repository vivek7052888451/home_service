<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use Str;
use DB;
use Brian2694\Toastr\Facades\Toastr;



class SubcategoryController extends Controller
{
    public function index()
    {
        //$sub_category=Subcategory::where('status','active')->get();
        $sub_category=DB::table('categories')
                ->join('subcategories', 'categories.id', '=', 'subcategories.category_id')->select('subcategories.*','categories.category_name')->get();


        return view('backend.subcategory.index',compact('sub_category'));
    }
    public function create()
    {
        $category_id=Category::select('id','category_name')->get();
        
        return view('backend.subcategory.creat',compact('category_id'));
    }
    public function subcategoryStore(Request $request)
    {
        $this->validate($request, [
          'category_id' => 'required',
          'subcategory_name' => 'required',
          'image' => 'required',
          'discription'=>'required',
       ]);
        $data=$request->all();
            if($request->file('image')){
            $file= $request->file('image');
            $filename= rand(1000000,99999999999).$file->getClientOriginalName();
            $file-> move(public_path('backend/assets/img/'), $filename);
            $data['image']= $filename;
        }
        $data['slug'] = Str::slug($request->subcategory_name,'-');

         Subcategory::create($data);
      return redirect('admin/subcategory')->with('success', 'Your category has been submitted.');

    }
    public function subcategoryEdit($id)
    {
        
        $subcategory=Subcategory::join('categories', 'categories.id', '=', 'subcategories.category_id')->select('subcategories.*','categories.category_name')->find($id);
        
        return view('backend.subcategory.edit',compact('subcategory'));

    }

    public function subcategoryUpdate(Request $request)
    {
        
        $category=Subcategory::where('id',$request->id)->update([
            'category_id'=>$request->category_id,
            'subcategory_name'=>$request->subcategory_name,
            'discription'=>$request->discription,
            'image'=>$request->image,
        ]);
        
        

    }

    public function subcategoryDelete($id)
    {
        Subcategory::find($id)->delete();
      return redirect('admin/subcategory')->with('success', 'Your category has been Deleted.');


    }
}
