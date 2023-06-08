@extends('backend.layout.backmaster')
@section('title')
  <title>
    Dashboard
</title>
@endsection

@section('section')

<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-2  pb-1">
                <h6 class="text-white text-capitalize ps-3">ORDER DETAILS</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <div class="row">
                    <div class="col-1 border-radius-lg pt-4 pb-3">
                         
                    </div>
                     
                    
                </div>
               <h5 style="margin-left:20px;">Today Summary</h5>
                <table class="table align-items-center mb-0 table-striped"id="table_id">
                  <thead>
                    <tr>
                      
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Total Services</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Monthly Service</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Additional Service </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Completed Servic</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cancelled Service</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Free Service</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Transfered Service</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Continued Service </th>
                      
                      
                      
                    </tr>
                  </thead>
                  <tbody>
                    
                    <tr style="background-color:#f5b042;color:black;">
                        
                      <td class="align-middle text-center text-sm">
                        <span class="">69</span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="">57</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="">12</span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="">47 </span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="">  6</span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="">39   </span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="">6   </span>
                      </td>
                      
                      
                      <td class="align-middle text-center text-sm">
                        <span class="">6   </span>
                      </td>
                    </tr>
                    
                   
                  </tbody>
                </table>
                <h5 style="margin-left:20px;">Cash Summary</h5>
                <table class="table align-items-center mb-0 table-striped"id="table_id">
                  <thead>
                    <tr>
                      
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Monthly Service Payments</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Add. Service Payments </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Todays Expenses </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Todays cash</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Todays online</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Total in Cash</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Total in Bank</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Net Balance </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"> </th>
                      
                      
                      
                    </tr>
                  </thead>
                  <tbody>
                    
                    <tr style="background-color:#f5b042;color:black;">
                        
                      <td class="align-middle text-center text-sm">
                        <span class="">69</span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="">57</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="">12</span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="">47 </span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="">  6</span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="">39   </span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="">6   </span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <a href="">Export</a><br>
                        <a href="">Services</a><br>
                        <a href="">Report</a><br>
                      </td>
                      
                      
                      
                    </tr>
                    
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    @endsection