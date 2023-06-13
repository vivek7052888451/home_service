@extends('backend.layout.backmaster')
@section('title')
  <title>
    Dashboard
</title>
@endsection

@section('section')
   <div class="row">
                    
                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-content widget-content-area">
                                    
                                    <table id="html5-extension" class="table dt-table-hover" style="width:100%">
                                        
                                        <h5> EXPENSE HEAD LIST(<a href="{{url('admin/add-expences-head')}}">ADD EXPENSE HEAD</a>)</h5>    
                                        <thead>
                                            <tr>
                                                <th>SR.NO</th>
                                                
                                                <th>NAME </th>
                                                
                                                <th>ACTION </th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">
                                                    1
                                                </td> 
                                                
                                                <td> client expense </td>
                                                
                                                <td>
                                                    <a href="#"><span class="badge badge-light-success">edit</span></a>
                                                    
                                                    <a href="#"><span class="badge badge-light-success">delete</span></a>
                                                </td>
                                                
                                                
                                            </tr>
                                            
                                            
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
    
                    </div>
@endsection