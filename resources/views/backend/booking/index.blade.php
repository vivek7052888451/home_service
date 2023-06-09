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
                                                <th>SR.NO</th>

                                                <th>USER NAME</th>
                                                <th>WORKER NAME</th>
                                                <th>CATEGORY</th>
                                                <th>TIME</th>
                                                <th> STATUS</th>
                                                <th>ACTION</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <tr>
                                                <td>1</td>
                                                <td>VIVEK</td>
                                                <td>SONI</td>
                                                <td>AC REPAIR</td>
                                                <td>2011/04/25</td>
                                                <td class="text-center">
                                                        <span class="badge badge-light-success">COMPLEATE</span>
                                                    </td>
                                                <td class="text-center">
                                                        <div class="action-btns">
                                                            
                                                            <a href="javascript:void(0);" class="action-btn btn-delete bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Delete">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                            </a>
                                                        </div>
                                                    </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>NITISH</td>
                                                <td>SONI</td>
                                                <td>AC REPAIR</td>
                                                <td>2011/04/25</td>
                                                <td class="text-center">
                                                        <span class="badge badge-light-success">COMPLEATE</span>
                                                    </td>
                                                <td class="text-center">
                                                        <div class="action-btns">
                                                            
                                                            <a href="javascript:void(0);" class="action-btn btn-delete bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Delete">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                            </a>
                                                        </div>
                                                    </td>                                                
                                            </tr>
                                            
                                             
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
    
                    </div>
@endsection