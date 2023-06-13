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
                                        
                                            <div class="row">
                                                <div class="col-1 border-radius-lg pt-4 pb-3"></div>
                                                <div class="col-3 border-radius-lg pt-4 pb-3">
                                                  <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                                                   <div class="input-group input-group-outline">
                                                    <label class="form-label"></label> 
                                                    <input type="text" name="" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">  
                                                   </div>   
                                                  </div>  
                                                </div>
                                                <div class="col-1 border-radius-lg ">
                                                  <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                                                      <div class="input-group input-group-outline">
                                                        <div class="">
                                                            <a href="#" type="button" class="btn bg-danger mt-4 w-100">Search</a>
                                                        </div>  
                                                      </div>
                                                  </div>

                                                </div>
                                                <div class="col-2 border-radius-lg ms-3">
                                                  <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                                                    <div class="input-group input-group-outline">
                                                      <div class="">
                                                        <a href="#" type="button" class="btn bg-info mt-4 w-100">ALL SHOW</a>  
                                                      </div>  
                                                    </div>  
                                                  </div>  
                                                </div>
                                                <div class="col-1 border-radius-lg pt-4 pb-3"></div>
                                                  <div class="col-3 border-radius-lg ">
                                                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                                                        <div class="input-group input-group-outline">
                                                         <div class="">
                                                          <a href="{{url('admin/todaySummary')}}" type="button" class="btn bg-success mt-4 w-100">TODAY SUMMARY'S </a>   
                                                         </div>   
                                                        </div>
                                                        
                                                    </div>  
                                                  </div>  
                                                
                                            </div>
                                        <thead>
                                            <tr>
                                                <th>STATUS</th>
                                                <th>ACTION</th>
                                                <th>ORDER NO</th>
                                                <th>SERVICE TYPE</th>
                                                <th>CUSTOMER ID</th>
                                                <th>CUSTOMER NAME</th>
                                                <th>TYPE</th>
                                                <th>BOOK TIME</th>
                                                <th>BOOK DATE</th>
                                                <th>SERVICE NAME</th>
                                                <th>SERVICE DETAILS</th>
                                                <th>SUPERVISIOR</th>
                                                <th>SERVICE PROVIDER</th>
                                                <th>VEHICLE USED</th>
                                                <th>BILLING AMOUNT</th>
                                                <th>PAID AMOUNT</th>
                                                <th>BALANCE AMOUNT</th>
                                                <th>PAYMENT METHOD</th>
                                                <th>BACK OFFICE REMARK</th>
                                                <th>ADMIN REMARK</th>
                                                <th>PROVIDER RATING</th>
                                                <th>SUPER ADMIN REMARK</th>
                                                <th>SERVICE PROVIDER REMARK</th>
                                                <th>ORDER STATUS</th>
                                                <th>CANCEL REASION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="background-color: yellow;color:black;" class="odd">
                                                <td class="text-center">
                                                        <span class="badge badge-light-info">Check</span>
                                                </td> 
                                                <td>                                               
                                                    <div class="btn-group">
                                                       <select style="background-color:#f5b042;">
                                                           <option value="">Cancel </option>
                                                           <option value="">Transfer </option>
                                                           <option value="">Hold </option>
                                                           <option value="">Complete </option>
                                                           <option value="">Edit </option>
                                                           <option value="">Delete </option>
                                                       </select> 
                                                    </div>
                                                    
                                                </td>
                                                <td class="text-center">
                                                        <span class="badge badge-light-info">#3456543</span>
                                                </td>
                                                <td>Paid Service</td>
                                                <td>HHS00007</td>
                                                <td>Radhe</td>
                                                <td>Booking</td>
                                                <td>12:30</td>
                                                <td>23/04/18</td>
                                                <td>Bathroom Cleaning</td>
                                                <td>SuperVisor</td>
                                                <td>Sev Provider</td>
                                                <td>Choose Vehicle</td>
                                                <td>Amount</td>
                                                <td>N/A</td>
                                                <td>N/A</td>
                                                <td>N/A</td>
                                                <td>N/A</td>
                                                <td>N/A</td>
                                                <td>Providers Feedback</td>
                                                <td>Remark</td>
                                                <td>N/A</td>
                                                <td class="text-center">
                                                        <span class="badge badge-light-info">Pending</span>
                                                </td>
                                                <td>N/A</td>
                                                <td>N/A</td>
                                               
                                            </tr>
                                            <tr style="background-color:#f5b042;color:black;" class="even">
                                                <td class="text-center">
                                                        <span class="badge badge-light-info">CheckIn</span>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                       <select style="background-color:#f5b042;">
                                                           <option value="">Cancel </option>
                                                           <option value="">Transfer </option>
                                                           <option value="">Hold </option>
                                                           <option value="">Complete </option>
                                                           <option value="">Edit </option>
                                                           <option value="">Delete </option>
                                                       </select> 
                                                    </div>
                                                    
                                                </td>
                                                <td class="text-center">
                                                        <span class="badge badge-light-info">#3456543</span>
                                                </td>
                                                <td>Paid Service</td>
                                                <td>HHS00007</td>
                                                <td>Radhe</td>
                                                <td>Booking</td>
                                                <td>12:30</td>
                                                <td>23/04/18</td>
                                                <td>Bathroom Cleaning</td>
                                                <td>SuperVisor</td>
                                                <td>Sev Provider</td>
                                                <td>Choose Vehicle</td>
                                                <td>Amount</td>
                                                <td>N/A</td>
                                                <td>N/A</td>
                                                <td>N/A</td>
                                                <td>N/A</td>
                                                <td>N/A</td>
                                                <td>Providers Feedback</td>
                                                <td>Remark</td>
                                                <td>N/A</td>
                                                <td class="text-center">
                                                        <span class="badge badge-light-info">Pending</span>
                                                </td>

                                                <td>N/A</td>
                                                <td>N/A</td>
                                               
                                            </tr>
                                            
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
    
                    </div>
@endsection