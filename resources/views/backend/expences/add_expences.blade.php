@extends('backend.layout.backmaster')
@section('title')
  <title>
    Dashboard
</title>
@endsection

@section('section')
   <div class="row" >
                    
                       <div class="col-12 table-responsive">
                        <div class="card-body">
                            <form>
                                <h5>ADD EMPLOYEE(<a href="{{url('admin/today-report-expences')}}"> ADD EMPLOYEE LIST</a>)</h5>
                                <div class="form-body" >
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="email">  Department Name </label>
                                                <select class="form-control">
                                                    <option>IT</option>
                                                    <option>OFFICE</option>
                                                </select>
                                                
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="email">Destination Name</label>
                                                <select class="form-control">
                                                    <option>First select department name</option>
                                                    
                                                </select>
                                                
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="email">Ref Name </label>
                                                <input type="text" class="form-control" name="">
                                                
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="email"> Name</label>
                                                <input type="text" class="form-control" name="">
                                                
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                       <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="email">Mobile Number</label>
                                                <input type="text" class="form-control" name="">
                                                
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">Email </label>
                                                <textarea class="form-control" rows="6"></textarea>
                                                
                                            </div>
                                            
                                        </div>
                                        
                                         
                                    </div>
                                     </div>
                            </form>
                            
                        </div>
                           
                       </div>
    
                    </div>
@endsection