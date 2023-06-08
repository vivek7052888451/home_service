@extends('backend.layout.backmaster')
@section('title')
    <title> Helper For Your Service| Category</title>
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
      <div class="row">
        <div class="col-12">
                @if(Session::has('success'))
            <div class="alert alert-success text-center">
                {{Session::get('success')}}
            </div>
        @endif    
     
  <form action="{{url('admin/category/update')}}" method="POST"enctype="multipart/form-data">
    
    {{ method_field('PUT') }}
    @csrf
      <input type="hidden" class="form-control" id="pwd" value="{{$category->id}}" name="id">

    <div class="mb-3 mt-3">
      <label for="text">Category Name:</label>
      <input type="text" class="form-control" id="category_name" value="{{$category->category_name}}" placeholder="Enter category" name="category_name">
    </div>
    <div class="mb-3">
      <label for="text">Fa Fa Icon Name:</label>
      <input type="text" class="form-control" id="pwd" value="{{$category->fa_fa_icon}}" placeholder="Enter fa fa icon" name="fa_fa_icon">
    </div>
    <div class="mb-3">
      <label for="file">Image:</label><br>
      <input type="file" id="pwd" placeholder="" value="" name="image">
    </div>
    <button type="submit" class="btn btn-primary">update</button>
  </form>


        </div>
      </div>
      
    </div>
    @endsection