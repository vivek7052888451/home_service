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

                                                <th>INVOICE ID</th>
                                                <th>USER NAME</th>
                                                <th>WORKER NAME</th>
                                                <th>WORKER MIN</th>
                                                <th>COMMISSION </th>
                                                <th>WORK AMOUNT</th>
                                                <th>TOTAL AMOUNT</th>
                                                <th>PAYMENT TYPE</th>
                                                <th>STATUS</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>XZQBE3TE9JWD </td>
                                                <td>sonu</td>
                                                <td>sundar</td>
                                                <td>20</td>
                                                <td>₨15</td>
                                                <td>₨150</td>
                                                <td>₨159</td>
                                                <td class="text-center">
                                                        <span class="badge badge-light-success">CASH</span>
                                                    </td>
                                                <td class="text-center">
                                                        <span class="badge badge-light-info">PAID</span>
                                                    </td>
                                                <td>
                                                    <select>
                                                        <option>MANAGE</option>
                                                    </select>
                                                </td>
                                                
                                            </tr>
                                             <tr>
                                                <td>2</td>
                                                <td>XZQBE3TE9JWD </td>
                                                <td>sonu</td>
                                                <td>sundar</td>
                                                <td>20</td>
                                                <td>₨15</td>
                                                <td>₨150</td>
                                                <td>₨159</td>
                                               <td class="text-center">
                                                        <span class="badge badge-light-success">CASH</span>
                                                    </td>
                                                <td class="text-center">
                                                        <span class="badge badge-light-info">PAID</span>
                                                    </td>
                                                <td>
                                                    <select>
                                                        <option>MANAGE</option>
                                                    </select>
                                                </td>
                                                
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
    
                    </div>
@endsection