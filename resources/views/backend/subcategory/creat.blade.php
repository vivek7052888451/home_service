@extends('backend.layout.backmaster')
    @section('title')
  <title>
    Sub-Category
</title>
    <style>
        body{
            font-size:14px;
        }
        .vl {
            border-left: 2px dashed #dedede;
            height: 391px;
            position: absolute;
            margin: 0% 50%;
        }
    </style>
@endsection

@section('section')

<div class="container-fluid py-4">
    <div class="card">
        @if(Session::has('success'))
            <div class="alert alert-success text-center">
                {{Session::get('success')}}
            </div>
        @endif  
        
  <div class="card-body">
    <form action="{{url('admin/subcategory/store')}}" method="POST"enctype="multipart/form-data">
    @csrf
    <div class="mb-3 mt-3">
      <label for="text">Category Name:</label><br>
      <select name="category_id" class="form-control">
        <option value="">Select Category</option>
        @isset($category_id)
        @foreach($category_id as $cat)
          <option value="{{$cat->id}}">{{$cat->category_name}}</option>
          @endforeach
          @endisset
      </select>
      
    </div>
    <div class="mb-3">
      <label for="text">Subcategory Name:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter subcategory" name="subcategory_name">
    </div>
    
    <div class="mb-3">
      <label for="file">Image:</label><br>
      <input type="file" id="pwd" placeholder="" name="image"class="form-control">
    </div>
    <div class="mb-3">
      <label for="text">Description:</label><br>
      <input type="text" id="pwd" placeholder="" name="discription"class="form-control">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>
</div>
</div>
    @endsection