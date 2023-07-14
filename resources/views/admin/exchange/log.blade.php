@extends('admin.layout.admin_mainlayout')

@section("title-section")
Log
@endsection

@section("admin-css-section")
<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/assets/extra-libs/datatables.net-bs4/css/responsive.dataTables.min.css" />
    <!-- Custom CSS -->
    <link href="{{ URL::to('/') }}/dist/css/style.min.css" rel="stylesheet" />
    <link href="{{ URL::to('/') }}/dist/css/custom.css" rel="stylesheet" />
    <link href="{{ URL::to('/') }}/dist/css/bootstrap.min.css" rel="stylesheet" />
    @endsection

@section("admin-jq-section")
<script src="{{ URL::to('/') }}/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ URL::to('/') }}/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- apps -->
    <script src="{{ URL::to('/') }}/dist/js/app.min.js"></script>
    <script src="{{ URL::to('/') }}/dist/js/app.init.js"></script>
    <script src="{{ URL::to('/') }}/dist/js/app-style-switcher.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ URL::to('/') }}/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="{{ URL::to('/') }}/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="{{ URL::to('/') }}/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="{{ URL::to('/') }}/dist/js/feather.min.js"></script>
    <script src="{{ URL::to('/') }}/dist/js/custom.min.js"></script>
    <!--This page plugins -->
    <script src="{{ URL::to('/') }}/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/extra-libs/datatables.net-bs4/js/dataTables.responsive.min.js"></script>
    <script src="{{ URL::to('/') }}/dist/js/pages/datatable/datatable-basic.init.js"></script>
@endsection

@section("admin-exchange-log")
<div class="container-fluid">
           <div class="row page-titles">
             <div class="col-md-5 col-12 align-self-center">
               <h3 class="text-themecolor mb-0">Log </h3>
             </div>
           </div>
           <!-- -------------------------------------------------------------- -->
           <!-- Start Page Content -->
           <!-- -------------------------------------------------------------- -->
           <!-- basic table -->
           <div class="row">
             <div class="col-12">
               <div class="card">
                 <div class="border-bottom title-part-padding">
                 <form action="/admin/shop/brand" method="get"> 
                    <div class="row">
                      <div class="col-10"> 
                        <h4 class="card-title mb-0">Log </h4>
                      </div>
                      <div class="col-2">
                        <!-- <button class="btn btn-success" type="submit" name="addbtn">Add Brand</button> -->
                      </div>
                      
                    </div>
                  </form>
                 </div>
                 <div class="card-body">
                  
                   <div class="table-responsive">
                     <table id="zero_config" class="table table-striped table-bordered">
                       <thead align="center">
                         <tr>
                           <th># </th>
                           <th>Request Id </th>
                           <th>Log Status</th>
                           <th>Date & Time</th>
                           <th>Action </th>
                         </tr>
                       </thead>
                       <tbody align="center">

                         @foreach($data as $row)
                         <tr>
                           <td>{{ $loop->index + 1 }} </td>
                           <td>{{ $row->request_id }} </td>
                           <td>{{ $row->log_status }} </td>
                           <td>{{ $row->log_date_time }} </td>
                           <td>
                           <a href="/admin/exchange/log/details/{{ $row->log_id }}" class="btn btn-success btn-xs btnshow" title="view"><i class="fa fa-eye"></i></a>
                           </td>
                         </tr>
                         @endforeach
                        
                       </tbody>
                       <tfoot align="center">
                         <tr>
                           <th># </th>
                           <th>Request Id </th>
                           <th>Log Status</th>
                           <th>Date & Time</th>
                           <th>Action </th>
                         </tr>
                       </tfoot>
                     </table>
                   </div>
                 </div>
               </div>
             </div>
           </div>
@endsection