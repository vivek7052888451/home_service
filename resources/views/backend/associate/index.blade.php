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
                                                <th>S.NO</th>

                                                <th>NAME</th>
                                                <th>EMAIL</th>
                                                <th>WALLET AMOUNT</th>
                                                <th>PROFILE COMPLETE</th>
                                                <th>FEATURED </th>
                                                <th>STATUS</th>
                                                <th>APPROVAL.</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1 </td>
                                                <td>Associate </td>
                                                <td>associate@gmail.com </td>
                                                <td>61</td>
                                                <td>yes</td>
                                                <td>no</td>
                                                <td>Active</td>
                                                <td class="text-center"><span class="shadow-none badge badge-primary">Approved</span></td>
                                                <td><div class="btn-group">
                                                       <select>
                                                           <option value="">MANAGE </option>
                                                           <option value="">MANAGE </option>
                                                           
                                                       </select> 
                                                    </div></td>
                                                
                                            </tr>
                                             <tr>
                                                <td>2 </td>
                                                <td>Associate </td>
                                                <td>associate@gmail.com </td>
                                                <td>61</td>
                                                <td>yes</td>
                                                <td>no</td>
                                                <td class="text-center">
                                                        <span class="badge badge-light-success">Active</span>
                                                    </td>

                                                <td class="text-center"><span class="shadow-none badge badge-primary">Approved</span></td>
                                                <td><div class="btn-group">
                                                       <select>
                                                           <option value="">MANAGE </option>
                                                           <option value="">MANAGE </option>
                                                           
                                                       </select> 
                                                    </div></td>
                                                
                                            </tr>
                                             <tr>
                                                <td>3 </td>
                                                <td>Associate </td>
                                                <td>associate@gmail.com </td>
                                                <td>61</td>
                                                <td>yes</td>
                                                <td>no</td>
                                                <td class="text-center">
                                                        <span class="badge badge-light-success">Active</span>
                                                    </td>
                                                <td class="text-center"><span class="shadow-none badge badge-primary">Approved</span></td>
                                                <td><div class="btn-group">
                                                       <select>
                                                           <option value="">MANAGE </option>
                                                           <option value="">MANAGE </option>
                                                           
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