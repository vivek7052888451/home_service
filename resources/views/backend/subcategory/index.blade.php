@extends('backend.layout.backmaster')
@section('title')
  <title>
    Dashboard
</title>
@endsection

@section('section')
<div class="row layout-top-spacing">

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="widget widget-six">
                                
                            <a class="btn btn-secondary _effect--ripple waves-effect waves-light" href="{{url('admin/subcategory/create')}}">SUB-CATEGORY</a>
                                
                            </div>
                        </div>
                        
                        
                    </div>
   <div class="row">
                    
                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-content widget-content-area">
                                    <table id="html5-extension" class="table dt-table-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>SR.NO</th>

                                                <th>DATE</th>
                                                <th>SERVICE NAME</th>
                                                <th>SLUG</th>
                                                <th>LAST DATE</th>
                                                <th>DESCRIPTION </th>
                                                <th>IMAGE</th>
                                                <th>ADMIN APPROVED</th>
                                                <th>ACTION</th>
                                                <th>BLOCK</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            @forelse($sub_category as $KEY=> $subcategry)
                                            <tr>
                                                <td> {{$KEY+1}}</td>
                                                <td>{{$subcategry->created_at}} </td>
                                                <td>{{$subcategry->category_name}}</td>
                                                <td>{{$subcategry->slug}}</td>
                                                <td>{{$subcategry->updated_at}}</td>
                                                <td>{{$subcategry->discription}}</td>
                                                <td>{{$subcategry->image}}</td>
                                                <td class="text-center">
                                                        <span class="badge badge-light-success">Approved</span>
                                                    </td>
                                                <td class="text-center">
                                                        <div class="action-btns">
                                                            <a href="javascript:void(0);" class="action-btn btn-view bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="" data-bs-original-title="View">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                                            </a>
                                                            <a href="javascript:void(0);" class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Edit">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                            </a>
                                                            <a href="javascript:void(0);" class="action-btn btn-delete bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Delete">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    
                                                
                                                <td class="text-center">
                                                        <span class="badge badge-light-danger">BLOCK SERVICE</span>
                                                    </td>
                                                    
                                                
                                            </tr>
                                            @empty
                                            <span>not fount</span>
                                            @endforelse
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
    
                    </div>
@endsection