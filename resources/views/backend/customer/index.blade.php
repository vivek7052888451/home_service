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
                                        <thead>
                                            <tr>
                                                <th>S.NO.</th>

                                                <th>NAME</th>
                                                <th>EMAIL</th>
                                                <th>MOBILE</th>
                                                <th>STATUS</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1 </td>
                                                <td>Customer </td>
                                                <td>customer@gmail.com</td>
                                                <td>7897541836</td>
                                                
                                                <td><div class="btn-group">
                                                       <select>
                                                           <option value="">Active </option>
                                                           <option value="">Inactive </option>
                                                           
                                                       </select> 
                                                    </div></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>2 </td>
                                                <td>Admin </td>
                                                <td>Admin@gmail.com</td>
                                                <td>7897541836</td>
                                                
                                                <td><div class="btn-group">
                                                       <select>
                                                           <option value="">Active </option>
                                                           <option value="">Inactive </option>
                                                           
                                                       </select> 
                                                    </div></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>3 </td>
                                                <td>Manager </td>
                                                <td>manager@gmail.com</td>
                                                <td>7897541836</td>
                                                
                                                <td><div class="btn-group">
                                                       <select>
                                                           <option value="">Active </option>
                                                           <option value="">Inactive </option>
                                                           
                                                       </select> 
                                                    </div></td>
                                                
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
    
                    </div>
@endsection