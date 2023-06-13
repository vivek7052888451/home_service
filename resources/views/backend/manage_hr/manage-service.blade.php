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
                                        
                                        <h5>EMPLOYEE LIST(<a href="{{url('admin/add-service-provider')}}">ADD SERVICE PROVIDER</a>)</h5>    
                                        <thead>
                                            <tr>
                                                <th>SR.NO</th>
                                                
                                                <th>REF NAME</th>
                                                <th>NAME </th>
                                                <th>PROVIDER TYPE  </th>
                                                <th>SERVICE NAME </th>
                                                <th>MOBILE NUMBER </th>
                                                <th>ADHAR NUMBER</th>
                                                <th>EMAIL </th>

                                                <th>ADDRESS</th>
                                                <th>USER NAME </th>
                                                <th>PASSWORD </th>
                                                <th>ADMIN STATUS </th>
                                                <th>ACTION </th>
                                                <th>BLOCK</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">
                                                    1
                                                </td> 
                                                
                                                <td> madhu</td>
                                                <td>SURESH</td>
                                                <td></td>
                                                <td>Dog Walk,fish aquarium service,car wash service , bathroom cleaning home dusting,bathroom cleaning ,Day to Day Supply</td>
                                                
                                                <td>547890785</td>
                                                <td>9078547890785</td>
                                                <td>suraj123@gmail.com  </td>
                                                <td>Budheswaer Park  </td>
                                                <td>Ashu   </td>
                                                <td>123456   </td>
                                                <td><span class="badge badge-light-success">Approved</span> </td>
                                                <td>
                                                    <a href="#"><span class="badge badge-light-success">edit</span></a>
                                                    <a href="#"><span class="badge badge-light-success">view</span></a>
                                                    <a href="#"><span class="badge badge-light-success">delete</span></a>
                                                </td>
                                                <td> <a href="#"><span class="badge badge-light-success">Block employee</span></a>
                                                    <a href="#"><span class="badge badge-light-success">Reset Rating </span></a>
                                                </td>
                                                
                                            </tr>
                                            
                                            
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
    
                    </div>
@endsection