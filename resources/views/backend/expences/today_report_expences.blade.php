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
                                        
                                        <h5>TRANSACTION REPORT </h5>
                                        <div class="row">
                                            <div class="col-md-4 grid-margin stretch-card">
                                             <a href="#" class="btn btn-primary">ALL</a>   
                                             <a href="#" class="btn btn-primary" >Expences</a>   
                                             <a href="#" class="btn btn-primary">Collectables</a>   
                                            </div>
                                        </div>    
                                        <thead>
                                            <tr>
                                                <th>DATE</th>
                                                <th>ORDER NO</th>
                                                <th> CUSTOMER NAME </th>
                                                <th>REMARK </th>
                                                <th>COLLECTION </th>
                                                <th>EXPENCES  </th>
                                                <th>BALANCE </th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">
                                                    2023-06-12
                                                </td> 
                                               <td>2345</td>
                                                <td> shakuntala gupta (SUDHA)</td>
                                                <td>ELECTRICAIN SERVICE</td>
                                                <td>200</td>
                                                <td>563478563498</td>
                                                
                                                <td>200</td>
                                                                                                
                                            </tr>
                                            
                                            
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
    
                    </div>
@endsection