<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="" data-template="vertical-menu-template">
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

         <title>Royalx Core | 3PL Routes</title>
        <!-- Favicon -->
       <link rel="icon" type="image/x-icon" href="{{ asset('backend/images/favicon.png') }}" />

        <link rel="stylesheet" href="{{ asset('backend/css/boxicons.css') }}" />
        <link rel="stylesheet" href="{{ asset('backend/css/fontawesome.css') }}" />
        <link rel="stylesheet" href="{{ asset('backend/css/flag-icons.css') }}" />

        <!-- Core CSS -->
        <link rel="stylesheet" href="{{ asset('backend/css/core.css') }}" />
        <link rel="stylesheet" href="{{ asset('backend/css/theme-default.css') }}"/>
        <link rel="stylesheet" href="{{ asset('backend/css/demo.css') }}" />
    
        <!-- Vendors CSS -->
        <link rel="stylesheet" href="{{ asset('backend/css/perfect-scrollbar.css') }}" />
        <link rel="stylesheet" href="{{ asset('backend/css/typeahead.css') }}" /> 
        <link rel="stylesheet" href="{{ asset('backend/css/select2.css') }}" />
        <link rel="stylesheet" href="{{ asset('backend/css/toastr.css') }}" />
        <link rel="stylesheet" href="{{ asset('backend/css/animate.css') }}" />

        <link rel="stylesheet" href="{{ asset('backend/css/tagify.css') }}" />
        <link rel="stylesheet" href="{{ asset('backend/css/bootstrap-select.css') }}" />
        <link rel="stylesheet" href="{{ asset('backend/css/typeahead.css') }}" />
        <link rel="stylesheet" href="{{ asset('backend/css/animate.css') }}" />
        <link rel="stylesheet" href="{{ asset('backend/css/sweetalert2.css') }}" />
        <link rel="stylesheet" href="{{ asset('backend/css/custom.css') }}" />
        <!-- Page CSS -->
    
        <script src="{{ asset('backend/js/helpers.js') }}"></script>
        <script src="{{ asset('backend/js/config.js') }}"></script>
        <style type="text/css">
                .bottom-block{
                        border-bottom: 2px solid #ff3e1d;
                }
                .unset{
                        text-transform: unset !important;
                }
                #view-json{
                        pointer-events:none;
                }
                .scroll{
                        max-height: 600px;
                        overflow: scroll;
                }
                .form-inline{
                    display: inline !important;
                    width:140px;
                }
                .v-top{
                    vertical-align: top !important;
                }
        </style>
</head>
<body>
        <div class="layout-wrapper layout-content-navbar  ">
                <div class="layout-container">
                        @include('layouts.aside')
                        <!-- Layout container -->
                        <div class="layout-page">
                                <!-- Navbar -->
                                @include('layouts.navbar')
                                <!-- / Navbar -->
                                <div class="content-wrapper">
                                        <div class="container-xxl flex-grow-1 container-p-y">
                                                <div class="row">
                                                        <div class="col-md-4">
                                                                <h5 class="py-2 mb-2">
                                                                        <a href="{{ url('admin/dashboard') }}" class="text-secondary fw-semibold">Dashboard </a> 
                                                                        <span class="text-muted fw-light"><i class="tf-icon bx bx-chevrons-right" cursorshover="true"></i> 3PL Routes</span> 
                                                                </h5>
                                                        </div>
                                                        <div class="col-md-8">
                                                                <div class="pull-right">
                                                                        <button type="button" class="btn btn-secondary btn-new  v-top" data-bs-toggle="modal" data-bs-target="#NewRoute" cursorshover="true">
                                                                                <span class="tf-icons bx bx-plus" cursorshover="true"></span> Add New
                                                                        </button>
                                                                        <div class="btn-group v-top" role="group" aria-label="Basic example">
                                                                                <button type="button" class="btn btn-secondary pagination-btn" id="prev-btn" cursorshover="true"><i class="tf-icon bx bx-chevrons-left"></i></button>
                                                                                <button type="button" class="btn btn-outline-secondary current-page" data-bs-toggle="modal" data-bs-target="#modalTop">0</button>
                                                                                <button type="button" class="btn btn-secondary pagination-btn" id="next-btn"><i class="tf-icon bx bx-chevrons-right"></i></button>
                                                                                <button type="button" class="btn btn-outline-secondary">Records: <span id="to-records">0</span>&nbsp;of&nbsp; <span id="total-records">0</span></button>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="card mb-4">
                                                        <div class="card-body loading text-center">
                                                                <div class="spinner-grow text-danger" role="status">
                                                                        <span class="visually-hidden">Loading...</span>
                                                                </div>
                                                                <div class="spinner-grow text-danger" role="status">
                                                                        <span class="visually-hidden">Loading...</span>
                                                                </div>
                                                                <div class="spinner-grow text-danger" role="status">
                                                                        <span class="visually-hidden">Loading...</span>
                                                                </div>
                                                        </div>
                                                        <div class="card-body results hide">
                                                                <div class="table-responsive text-nowrap">
                                                                        <table class="table">
                                                                        <thead>
                                                                                <tr>
                                                                                        <th class="text-muted unset">From Branch Name</th>
                                                                                        <th class="text-muted unset">To Branch Name</th>
                                                                                        <th class="text-muted unset">Express Name</th>
                                                                                        <th class="text-muted unset">Default</th>
                                                                                        <th class="text-muted unset">SLA</th>
                                                                                        <th class="text-muted unset">Active</th>
                                                                                        <th class="text-muted unset">Action</th>
                                                                                </tr>
                                                                        </thead>
                                                                        <tbody class="table-border-bottom-0" id="fetched-data">
                                                                        </tbody>
                                                                        </table>
                                                                        <div class="my-3 empty-data hide">
                                                                                <div class="alert alert-warning" role="alert">
                                                                                        No data available.
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                            
                                        <input type="hidden" id="url" value="{{ url('') }}">
                                        <input type="hidden" id="json-service-types" value="{{ $json }}">
                                        <input type="hidden" id="token" value="{{ csrf_token() }}">
                                        <input type="hidden" id="item" value="">

                                        <!-- Footer -->
                                    @include('layouts.footer')
                                        <!-- / Footer -->
                                        <div class="content-backdrop fade"></div>
                                </div>
                        </div>
                        <!-- / Layout page -->
                </div>

                <!-- Overlay -->
                <div class="layout-overlay layout-menu-toggle"></div>
                <!-- Drag Target Area To SlideIn Menu On Small Screens -->
                <div class="drag-target"></div>
        </div>
        <!-- / Layout wrapper -->


        <!-- Pagination Modal -->
        <div class="modal modal-top modal-lg fade" id="modalTop" tabindex="-1">
                <div class="modal-dialog">
                        <form class="modal-content">
                                <div class="modal-header">
                                        <h5 class="modal-title" id="modalTopTitle">Choose Page</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        <div class="row">
                                                <div class="col mb-3">
                                                        <div id="links"></div>
                                                </div>
                                        </div>
                                </div>
                        </form>
                </div>
        </div>

        <div class="bs-toast toast toast-placement-ex toast-top-right fade bg-secondary" id="successToast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="5000">
            <div class="toast-header">
                <i class="bx bx-bell me-2"></i>
                <div class="me-auto fw-medium">Success</div>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close" cursorshover="true"></button>
            </div>
            <div class="toast-body">
                <span id="success-message">...</span>
            </div>
        </div>

        <div class="bs-toast toast toast-placement-ex toast-top-right fade  bg-danger" id="errorToast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="5000">
            <div class="toast-header">
                <i class="bx bx-bell me-2"></i>
                <div class="me-auto fw-medium">Error</div>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close" cursorshover="true"></button>
            </div>
            <div class="toast-body">
                <span id="error-message"></span>
            </div>
        </div>

        <!-- New Modal -->
        <div class="modal modal-top fade" id="NewRoute" tabindex="-1">
            <div class="modal-dialog">
                <form class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTopTitle">Add 3PL Route</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="from-branch" class="form-label">From Branch <span class="fw-bolder text-danger" >*</span></label>
                                <select id="from-branch" class="select2 form-select form-select-lg" data-allow-clear="true">
                                @foreach($branches as $from)
                                <option value="{{ $from->BranchNameEn }}">{{ $from->BranchNameEn.' - '.$from->BranchNameMm  }} ({{ $from->RegionCode }})</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="to-branch" class="form-label">To Branch <span class="fw-bolder text-danger" >*</span></label>
                                <select id="to-branch" class="select2 form-select form-select-lg" data-allow-clear="true">
                                @foreach($branches as $from)
                                <option value="{{ $from->BranchNameEn }}">{{ $from->BranchNameEn.' - '.$from->BranchNameMm  }} ({{ $from->RegionCode }})</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="express" class="form-label">Express <span class="fw-bolder text-danger" >*</span></label>
                                <select id="express" class="select2 form-select form-select-lg" data-allow-clear="true">
                                @foreach($expresses as $express)
                                <option value="{{ $express->ExpressNameEn.','.$express->ExpressNameMm }}">{{ $express->ExpressNameEn.' - '.$express->ExpressNameMm  }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="station" class="form-label">Station <span class="fw-bolder text-danger" >*</span></label>
                                <select id="station" class="select2 form-select form-select-lg" data-allow-clear="true">
                                @foreach($stations as $station)
                                <option value="{{ $station->StationNameEn.','.$station->StationNameMm }}">{{ $station->StationNameEn }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-3">
                                <div class="row">
                                        <div class="col-md-4">
                                                <label for="region" class="form-label">Region Code</label>
                                                <select id="region" class="select2 form-select form-select-lg" data-allow-clear="true">
                                                @foreach($regions as $region)
                                                <option value="{{ $region->RegionCode }}">{{ $region->RegionCode }}</option>
                                                @endforeach
                                                </select>
                                        </div>
                                        <div class="col-md-4">
                                                <label for="type" class="form-label">Service Type</label>
                                                <select id="type" class="select2 form-select form-select-lg" data-allow-clear="true">
                                                @foreach($types as $type)
                                                <option value="{{ $type->ServiceTypeEn }}">{{ $type->ServiceTypeEn }}</option>
                                                @endforeach
                                                </select>
                                        </div>
                                        <div class="col-md-4">
                                                <label for="sla" class="form-label">SLA (Hour)</label>
                                                <input type="text" id="sla" class="form-control" value="24" >
                                        </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="row g-2">
                            <div class="col mb-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="switch switch-secondary">
                                            <input type="checkbox" class="switch-input" id="active" checked />
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on">
                                                    <i class="bx bx-check"></i>
                                                </span>
                                                <span class="switch-off">
                                                    <i class="bx bx-x"></i>
                                                </span>
                                            </span>
                                            <span class="switch-label">Active</span>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="switch switch-secondary">
                                            <input type="checkbox" class="switch-input" id="default" />
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on">
                                                    <i class="bx bx-check"></i>
                                                </span>
                                                <span class="switch-off">
                                                    <i class="bx bx-x"></i>
                                                </span>
                                            </span>
                                            <span class="switch-label">Default</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-secondary btn-save">Save</button>
                    </div>
                </form>
            </div>
        </div> 

        <!-- Edit Modal -->
        <div class="modal modal-top fade" id="EditRoute" tabindex="-1">
            <div class="modal-dialog">
                <form class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTopTitle">Edit 3PL Route</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="edit-from-branch" class="form-label">From Branch <span class="fw-bolder text-danger" >*</span></label>
                                <select id="edit-from-branch" class="select2 form-select form-select-lg" data-allow-clear="true">
                                @foreach($branches as $from)
                                <option value="{{ $from->BranchNameEn }}">{{ $from->BranchNameEn.' - '.$from->BranchNameMm  }} ({{ $from->RegionCode }})</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="edit-to-branch" class="form-label">To Branch <span class="fw-bolder text-danger" >*</span></label>
                                <select id="edit-to-branch" class="select2 form-select form-select-lg" data-allow-clear="true">
                                @foreach($branches as $from)
                                <option value="{{ $from->BranchNameEn }}">{{ $from->BranchNameEn.' - '.$from->BranchNameMm  }} ({{ $from->RegionCode }})</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="edit-express" class="form-label">Express <span class="fw-bolder text-danger" >*</span></label>
                                <select id="edit-express" class="select2 form-select form-select-lg" data-allow-clear="true">
                                @foreach($expresses as $express)
                                <option value="{{ $express->ExpressNameEn.','.$express->ExpressNameMm }}">{{ $express->ExpressNameEn.' - '.$express->ExpressNameMm  }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="edit-station" class="form-label">Station <span class="fw-bolder text-danger" >*</span></label>
                                <select id="edit-station" class="select2 form-select form-select-lg" data-allow-clear="true">
                                @foreach($stations as $station)
                                <option value="{{ $station->StationNameEn.','.$station->StationNameMm }}">{{ $station->StationNameEn }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-3">
                                <div class="row">
                                        <div class="col-md-4">
                                                <label for="edit-region" class="form-label">Region Code</label>
                                                <select id="edit-region" class="select2 form-select form-select-lg" data-allow-clear="true">
                                                @foreach($regions as $region)
                                                <option value="{{ $region->RegionCode }}">{{ $region->RegionCode }}</option>
                                                @endforeach
                                                </select>
                                        </div>
                                        <div class="col-md-4">
                                                <label for="edit-type" class="form-label">Service Type</label>
                                                <select id="edit-type" class="select2 form-select form-select-lg" data-allow-clear="true">
                                                @foreach($types as $type)
                                                <option value="{{ $type->ServiceTypeEn }}">{{ $type->ServiceTypeEn }}</option>
                                                @endforeach
                                                </select>
                                        </div>
                                        <div class="col-md-4">
                                                <label for="edit-sla" class="form-label">SLA (Hour)</label>
                                                <input type="text" id="edit-sla" class="form-control" value="24" >
                                        </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="row g-2">
                            <div class="col mb-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="switch switch-secondary">
                                            <input type="checkbox" class="switch-input" id="edit-active" checked />
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on">
                                                    <i class="bx bx-check"></i>
                                                </span>
                                                <span class="switch-off">
                                                    <i class="bx bx-x"></i>
                                                </span>
                                            </span>
                                            <span class="switch-label">Active</span>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="switch switch-secondary">
                                            <input type="checkbox" class="switch-input" id="edit-default" />
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on">
                                                    <i class="bx bx-check"></i>
                                                </span>
                                                <span class="switch-off">
                                                    <i class="bx bx-x"></i>
                                                </span>
                                            </span>
                                            <span class="switch-label">Default</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" id="edit-id" class="form-control">
                        <input type="hidden" id="edit-region-type" class="form-control">
                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-secondary btn-update">Save</button>
                    </div>
                </form>
            </div>
        </div> 
 
  
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
  
    <script src="{{ asset('backend/js/jquery.js') }}"></script>
    <script src="{{ asset('backend/js/popper.js') }}"></script>
    <script src="{{ asset('backend/js/bootstrap.js') }}"></script>
    <script src="{{ asset('backend/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('backend/js/hammer.js') }}"></script>
    <script src="{{ asset('backend/js/i18n.js') }}"></script>
    <script src="{{ asset('backend/js/typeahead.js') }}"></script>
    <script src="{{ asset('backend/js/menu.js') }}"></script>
  
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('backend/js/select2.js') }}"></script>
    <script src="{{ asset('backend/js/tagify.js') }}"></script>
    <script src="{{ asset('backend/js/bootstrap-select.js') }}"></script>
    <script src="{{ asset('backend/js/typeahead.js') }}"></script>
    <script src="{{ asset('backend/js/bloodhound.js') }}"></script>
    <script src="{{ asset('backend/js/sweetalert2.js') }}"></script>
    <script src="{{ asset('backend/js/extended-ui-sweetalert2.js') }}"></script>
    <script src="{{ asset('backend/js/ui-toasts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('backend/js/main.js') }}"></script>
  

    <!-- Page JS -->
    <script src="{{ asset('backend/js/forms-selects.js') }}"></script>
        <script type="text/javascript">
        $(document).ready(function(){
                var url              = $("#url").val();
                var json   = $("#json-service-types").val();

                var token            = $("#token").val();

                var fetched_data = function(){
                        $("#fetched-data").empty();
                        $.ajax({
                                url: url+'/'+json,
                                type: 'GET',
                                data: {},
                                success: function(data){
                                        if(data.total > 0){
                                                $.each(data.data, function (i, item) {
                                                    $("#fetched-data").append('<tr>'
                                                        +'<td><span class="fw-semibold">'+item.FromBranchName+'</span></td>'
                                                        +'<td><span class="fw-semibold">'+item.ToBranchName+'</span></td>'
                                                        +'<td><span class="text-secondary">'+item.ExpressNameMm+'<br>'+item.ExpressNameEn+'</span></td>'
                                                        +'<td>'+(item.Default == 1? '<span class="badge badge-center rounded-pill bg-success"><i class="bx bx-check"></i></span>':'<span class="badge badge-center rounded-pill bg-danger"><i class="bx bx-x"></i></span>')+'</td>'
                                                        +'<td><span class="fw-light">'+item.SLA+' Hours</span></td>'                                                    
                                                        +'<td>'+(item.Active == 1? '<span class="badge badge-center rounded-pill bg-success"><i class="bx bx-check"></i></span>':'<span class="badge badge-center rounded-pill bg-danger"><i class="bx bx-x"></i></span>')+'</td>'
                                                        +'<td>'
                                                            +'<div class="btn-group">'
                                                                +'<button type="button" class="btn btn-icon btn-sm btn-outline-secondary rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false" cursorshover="true"><i class="bx bx-dots-vertical-rounded" cursorshover="true"></i></button>'
                                                                +'<ul class="dropdown-menu dropdown-menu-end" style="">'
                                                                   +'<li><a class="dropdown-item text-success" href="'+url+'/admin/3pl-services/routes/'+item.Id+'" cursorshover="true" ><span class="tf-icons bx bx-search" cursorshover="true"></span> View Item</a></li>'
                                                                    +'<li><a class="dropdown-item text-primary  load-id" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#EditRoute" cursorshover="true" title= '+item.Id+'><span class="tf-icons bx bx-pencil" cursorshover="true"></span> Edit Item</a></li>'
                                                                    +'<li><a class="dropdown-item text-muted  load-id disabled" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#DeleteExpress" cursorshover="true" title= '+item.Id+'><span class="tf-icons bx bx-trash" cursorshover="true"></span> Delete Item</a></li>'
                                                                +'</ul>'
                                                             +'</div>'
                                                        +'</td>'
                                                +'</tr>');
                                                });

                                                $(".data-loading").hide();

                                                $("#to-records").text(data.to);
                                                $("#total-records").text(data.total);
                                                $(".current-page").text(data.current_page);
                                                        
                                                if(data.prev_page_url === null){
                                                $("#prev-btn").attr('disabled',true);
                                                }else{
                                                $("#prev-btn").attr('disabled',false);
                                                }
                                                if(data.next_page_url === null){
                                                $("#next-btn").attr('disabled',true);
                                                }else{
                                                $("#next-btn").attr('disabled',false);
                                                }
                                                $("#prev-btn").val(data.prev_page_url);
                                                $("#next-btn").val(data.next_page_url);

                                                $.each(data.links, function( key, value ) {
                                                $("#links").append('<button type="button" class="btn btn-secondary btn-sm pagination-btn me-1 mb-1 '+(data.current_page == value.label ? 'disabled':(value.url == null ? 'disabled':''))+'" cursorshover="true" value="'+value.url+'">'+value.label+'</button>');
                                                });

                                                $(".loading").addClass('hide');
                                                $(".results").removeClass('hide');
                                        }else{
                                                $(".empty-data").removeClass('hide');
                                        }
                                }
                        });
                };


                $('body').delegate(".pagination-btn","click",function () {
                        //clicked url json data
                        $(".loading").removeClass('hide');
                        $(".results").addClass('hide');

                        $("#fetched-data").empty();
                        $("#links").empty();

                        var clicked_url = $(this).val();
                        
                        $(this).siblings().removeClass('active')
                        $(this).addClass('active');
                        $.ajax({
                        url: clicked_url,
                        type: 'GET',
                        data: {},
                        success: function(data){
                                if(data.total > 0){
                                        $.each(data.data, function (i, item) {
                                                    $("#fetched-data").append('<tr>'
                                                        +'<td><span class="fw-semibold">'+item.FromBranchName+'</span></td>'
                                                        +'<td><span class="fw-semibold">'+item.ToBranchName+'</span></td>'
                                                        +'<td><span class="text-secondary">'+item.ExpressNameMm+'<br>'+item.ExpressNameEn+'</span></td>'
                                                        +'<td>'+(item.Default == 1? '<span class="badge badge-center rounded-pill bg-success"><i class="bx bx-check"></i></span>':'<span class="badge badge-center rounded-pill bg-danger"><i class="bx bx-x"></i></span>')+'</td>'
                                                        +'<td><span class="fw-light">'+item.SLA+' Hours</span></td>'                                                    
                                                        +'<td>'+(item.Active == 1? '<span class="badge badge-center rounded-pill bg-success"><i class="bx bx-check"></i></span>':'<span class="badge badge-center rounded-pill bg-danger"><i class="bx bx-x"></i></span>')+'</td>'
                                                        +'<td>'
                                                            +'<div class="btn-group">'
                                                                +'<button type="button" class="btn btn-icon btn-sm btn-outline-secondary rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false" cursorshover="true"><i class="bx bx-dots-vertical-rounded" cursorshover="true"></i></button>'
                                                                +'<ul class="dropdown-menu dropdown-menu-end" style="">'
                                                                   +'<li><a class="dropdown-item text-success" href="'+url+'/admin/3pl-services/routes/'+item.Id+'" cursorshover="true" ><span class="tf-icons bx bx-search" cursorshover="true"></span> View Item</a></li>'
                                                                    +'<li><a class="dropdown-item text-primary  load-id" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#EditRoute" cursorshover="true" title= '+item.Id+'><span class="tf-icons bx bx-pencil" cursorshover="true"></span> Edit Item</a></li>'
                                                                    +'<li><a class="dropdown-item text-muted  load-id disabled" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#DeleteExpress" cursorshover="true" title= '+item.Id+'><span class="tf-icons bx bx-trash" cursorshover="true"></span> Delete Item</a></li>'
                                                                +'</ul>'
                                                             +'</div>'
                                                        +'</td>'
                                                +'</tr>');
                                                });

                                        $(".data-loading").hide();
                                        

                                        $("#to-records").text(data.to);
                                        $(".current-page").text(data.current_page);

                                        if(data.prev_page_url === null){
                                        $("#prev-btn").attr('disabled',true);
                                        }else{
                                        $("#prev-btn").attr('disabled',false);
                                        }
                                        if(data.next_page_url === null){
                                        $("#next-btn").attr('disabled',true);
                                        }else{
                                        $("#next-btn").attr('disabled',false);
                                        }
                                        $("#prev-btn").val(data.prev_page_url);
                                        $("#next-btn").val(data.next_page_url);

                                        $.each(data.links, function( key, value ) {
                                        $("#links").append('<button type="button" class="btn btn-secondary btn-sm pagination-btn me-1 mb-1 '+(data.current_page == value.label ? 'disabled':(value.url == null ? 'disabled':''))+'" cursorshover="true" value="'+value.url+'">'+value.label+'</button>');
                                        });

                                        $(".loading").addClass('hide');
                                        $(".results").removeClass('hide');
                                }else{
                                        $(".empty-data").removeClass('hide');
                                }
                        }
                        });
                });
                


                $('body').delegate(".load-id","click",function () {
                        id = $(this).attr('title');

                        $("#edit-id").val(id);
                        
                        $("#edit-from-branch").append('<option>loading...</option>');
                        $("#edit-to-branch").val('loading...');
                        // $("#edit-express").prop('disabled',true);
                        // $("#edit-station").prop('disabled',true);
                        // $("#edit-region").prop('disabled',true);
                        // $("#edit-type").prop('disabled',true);
                        // $("#edit-sla").prop('disabled',true);
                        
                        if($("#edit-active").prop('checked') == true){
                            active = 1;
                        }else{ 
                            active = 0;
                        }

                        if($("#edit-default").prop('checked') == true){
                            default_route = 1;
                        }else{ 
                            default_route = 0;
                        }

                        $('#NewRoute').modal('hide');

                        $.ajax({
                                url: url+'/admin/3pl-services/fetched-route',
                                type: 'POST',
                                data: {
                                        id:id,
                                        _token:token
                                },
                                success: function(data){
                                        $("#edit-from-branch").val(data.FromBranchName).change();
                                        $("#edit-to-branch").val(data.ToBranchName).change();
                                        $("#edit-express").val(data.ExpressNameEn+','+data.ExpressNameMm).change();
                                        $("#edit-station").val(data.StationNameEn+','+data.StationNameMm).change();
                                        $("#edit-region").val(data.StationRegionCode).change();
                                        $("#edit-type").val(data.ServiceType).change();
                                        $("#edit-sla").val(data.SLA);

                                        if(data.Active == 1){
                                                $("#edit-active").prop('checked', true);
                                        }else{
                                                $("#edit-active").prop('checked', false);
                                        }

                                        if(data.Default == 1){
                                                $("#edit-default").prop('checked', true);
                                        }else{
                                                $("#edit-default").prop('checked', false);
                                        }

                                        $("#item").val(data.Id);

                                        $("#edit-enname").prop('disabled',false);
                                        $("#edit-mmname").prop('disabled',false);
                                }
                        });
                });

                $('body').delegate(".btn-save","click",function () {
                        var from_branch = $("#from-branch").val();
                        var to_branch = $("#to-branch").val();
                        var express = $("#express").val();
                        var station = $("#station").val();
                        var region = $("#region").val();
                        var type = $("#type").val();
                        var sla = $("#sla").val();
                        if($("#active").prop('checked') == true){
                            active = 1;
                        }else{ 
                            active = 0;
                        }

                        if($("#default").prop('checked') == true){
                            default_route = 1;
                        }else{ 
                            default_route = 0;
                        }

                        $('#NewRoute').modal('hide');

                        $.ajax({
                                url: url+'/admin/3pl-services/saved-route',
                                type: 'POST',
                                data: {
                                        from_branch:from_branch,
                                        to_branch:to_branch,
                                        express:express,
                                        station:station,
                                        region:region,
                                        type:type,
                                        sla:sla,
                                        default_route:default_route,
                                        active:active,
                                        _method:'POST',
                                        _token:token
                                },
                                success: function(data){
                                        if(data.success == 1){
                                                $("#success-message").text(data.message);
                                                $("#successToast").toast("show");

                                                fetched_data();   
                                        }else{
                                                $("#error-message").text(data.message);
                                                $("#errorToast").toast("show");
                                        }
                                }
                        });
                });

                $('body').delegate(".btn-update","click",function () {
                    var id = $("#edit-id").val();
                        var from_branch = $("#edit-from-branch").val();
                        var to_branch = $("#edit-to-branch").val();
                        var express = $("#edit-express").val();
                        var station = $("#edit-station").val();
                        var region = $("#edit-region").val();
                        var type = $("#edit-type").val();
                        var sla = $("#edit-sla").val();
                        if($("#edit-active").prop('checked') == true){
                            active = 1;
                        }else{ 
                            active = 0;
                        }

                        if($("#edit-default").prop('checked') == true){
                            default_route = 1;
                        }else{ 
                            default_route = 0;
                        }

                        $('#EditRoute').modal('hide');

                        $.ajax({
                                url: url+'/admin/3pl-services/updated-route',
                                type: 'POST',
                                data: {
                                    id:id,
                                    from_branch:from_branch,
                                    to_branch:to_branch,
                                    express:express,
                                    station:station,
                                    region:region,
                                    type:type,
                                    sla:sla,
                                    default_route:default_route,
                                    active:active,
                                    _method:'PUT',
                                    _token:token
                                },
                                success: function(data){
                                    if(data.success == 1){
                                        $("#success-message").text(data.message);
                                        $("#successToast").toast("show");

                                        fetched_data();   
                                    }else{
                                        $("#error-message").text(data.message);
                                        $("#errorToast").toast("show");
                                    }
                                }
                        });
                });
                 
            
            fetched_data();   
        });
        </script>
</body>
</html>

