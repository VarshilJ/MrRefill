@extends('admin.layout.admin_mainlayout')

@section("title-section")
Update State
@endsection

@section("admin-css-section")
<link rel="stylesheet" href="{{ URL::to('/') }}/assets/libs/apexcharts/dist/apexcharts.css" />
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

@section("admin-utility-updatestate")
<section class="content">
        <div class="card card-primary card-outline">
            <div class="card-header">
            <h3 class="m-0"><b><b>Update State</b> </b></h3>
            </div>
        <div class="card-body">
        @if(Session::get('status'))
                <div class="alert alert-success d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"></use></svg>
                <div>
                {{Session::get('status')}}
                </div>
                </div>
            @endif
                <form action="/admin/utility/savestate" method="post" enctype="multipart/form-data" id="addEditcategory" novalidate="novalidate">
                @csrf                       
                        <div class="card-body">

                        <input value="{{ $singlestate[0]->state_id }}" type="hidden" name="txtstateid" />
                            
                            <div class="form-group">
                                <label><b>State name</b></label>
                                <input value="{{ $singlestate[0]->state_name }}" type="text" class="form-control" id="name" placeholder="Enter the state name" name="txtstatename">
                            </div>
                            <br>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success " id="button">Update</button>
                            <a href="/admin/utility/state/view" class="btn btn-primary">Back</a>
                        </div>
                    </form>
            </div>
        </div>
</section>
@endsection