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
                                        
                                        <h5>EMPLOYEE LIST(<a href="{{url('admin/add-employee')}}">ADD EMPLOYEE</a>)</h5>    
                                        <thead>
                                            <tr>
                                                <th>SR.NO</th>
                                                <th>DESTINATION</th>
                                                <th>EMP ID </th>
                                                <th>REF NAME</th>
                                                <th>NAME </th>
                                                <th>MOBILE NUMBER </th>
                                                <th>ADHAR NUMBER</th>
                                                <th>ADDRESS</th>
                                                <th>PASSWORD </th>
                                                <th>STATUS </th>
                                                <th>ACTION </th>
                                                <th>BLOCK</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">
                                                    1
                                                </td> 
                                                <td>                                               
                                                    <a href="#">Back Office</a>
                                                    
                                                </td>
                                                <td class="text-center">
                                                        <a href="#">EMP735</a>
                                                </td>
                                                <td> durgesh</td>
                                                <td>DURGESH</td>
                                                <td>7865437890</td>
                                                <td>563478563498</td>
                                                <td>Baliya Kheda ..post Lotna , jila ..unnao\\\\Azad Nagar Alambagh :</td>
                                                <td>12345</td>
                                                <td><span class="badge badge-light-success">Approved</span> </td>
                                                <td>
                                                    <a href="#"><span class="badge badge-light-success">edit</span></a>
                                                    <a href="#"><span class="badge badge-light-success">view</span></a>
                                                    <a href="#"><span class="badge badge-light-success">delete</span></a>
                                                </td>
                                                <td> <a href="#"><span class="badge badge-light-success">Block employee</span></a></td>
                                                
                                            </tr>
                                            
                                            
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
    
                    </div>
@endsection