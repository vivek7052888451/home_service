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
    <div class="card">
        <!-- @if(Session::has('success'))
            <div class="alert alert-success text-center">
                {{Session::get('success')}}
            </div>
        @endif -->  
 
  <div class="card-body">
    <form action="{{url('admin/category/store')}}" method="POST"enctype="multipart/form-data">
        @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Category Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"name="category_name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Fa Fa Icon</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"name="fa_fa_icon">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Image</label>
    <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"name="image">
    
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div>
</div>
<script>
        $(document).ready(function() {
            toastr.options.timeOut = 10000;
            @if (Session::has('error'))
                toastr.error('{{ Session::get('error') }}');
            @elseif(Session::has('success'))
                toastr.success('{{ Session::get('success') }}');
            @endif
        });

    </script>
    @endsection