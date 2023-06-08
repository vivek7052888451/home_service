@extends('backend.layout.backmaster')
@section('title')
    <title> Helper For Your Service| Edit Sub-Category</title>
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
  <div class="card-header">
    New Sub-Category
  </div>

  <div class="card-body">
    <form action="{{url('admin/subcategory/update')}}" method="POST"enctype="multipart/form-data">
{{ method_field('PUT') }}
    @csrf
          <input type="hidden" class="form-control" value="{{$subcategory->id}}" name="id">

    <div class="mb-3 mt-3">
      <label for="text">Category Name:</label><br>
      <select name="category_id" class="form-control">
          <option value="{{$subcategory->category_id}}">{{$subcategory->category_name}}</option>    
      </select>
      
    </div>
    <div class="mb-3">
      <label for="text">Subcategory Name:</label>
      <input type="text" class="form-control"  placeholder="Enter subcategory" name="subcategory_name" value="{{$subcategory->subcategory_name}}">
    </div>
    
    <div class="mb-3">
      <label for="file">Image:</label><br>
      <input type="file"placeholder="" value="" name="image"class="form-control">
    </div>
    <div class="mb-3">
      <label for="text">Description:</label><br>
      <input type="text" placeholder="" value="{{$subcategory->discription}}" name="discription"class="form-control">
    </div>
     
    <button type="submit" class="btn btn-primary">update</button>
  </form>
  </div>
</div>
</div>
    @endsection