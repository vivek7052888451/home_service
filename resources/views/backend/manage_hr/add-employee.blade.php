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
                                <h5>ADD EMPLOYEE(<a href="{{url('admin/mange_employi')}}"> ADD EMPLOYEE LIST</a>)</h5>
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
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="email">Email </label>
                                                <input type="text" class="form-control" name="">
                                                
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="email">Adhar Number </label>
                                                <input type="text" class="form-control" name="">
                                                
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="email">Pan Number</label>
                                                <input type="text" class="form-control" name="">
                                                
                                            </div>
                                            
                                        </div> 
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="email">Join Date </label>
                                                        <input type="text" class="form-control" name="">
                                                
                                                   </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                <label for="email">Password </label>
                                                <input type="text" class="form-control" name="">
                                                
                                            </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                <label for="email">Image </label>
                                                <input type="file" class="form-control" name="">
                                                
                                            </div>
                                                </div>
                                            </div>
                                     
                                        
                                    </div>
                                    <div class="col-md-6">
                                        
                                            <div class="form-group">
                                                <label for="email">Address </label>
                                                <input type="text" class="form-control" name="">
                                                
                                            </div>
                                            
                                        
                                    </div>
                                    </div>
                                    <div class="row">
                                       
                                            <div class="form-group">
                                                <label for="email">About Employee </label>
                                                <input type="text" class="form-control" name="">
                                                
                                            </div>
                                           
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">Document Name-1</label>
                                                <input type="text" class="form-control" name="">
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">Image (FORMAT .jpg,.png,.jpeg)</label>
                                                <input type="file" class="form-control" name="">
                                                
                                            </div>
                                        </div>
                                         
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">Document Name-2</label>
                                                <input type="text" class="form-control" name="">
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">Image (FORMAT .jpg,.png,.jpeg)</label>
                                                <input type="file" class="form-control" name="">
                                                
                                            </div>
                                        </div>
                                         
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">Document Name-3</label>
                                                <input type="text" class="form-control" name="">
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">Image (FORMAT .jpg,.png,.jpeg)</label>
                                                <input type="file" class="form-control" name="">
                                                
                                            </div>
                                        </div>
                                         
                                    </div>
                                    <div class="form-action mt-3">
                                      <input type="submit" class="btn btn-primary" name="">  
                                    </div>
                                    
                                </div>
                            </form>
                            
                        </div>
                           
                       </div>
    
                    </div>
@endsection