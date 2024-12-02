<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="" data-template="vertical-menu-template">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Royalx Core | Routes</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('backend/images/favicon.png') }}" />

    <link rel="stylesheet" href="{{ asset('backend/css/boxicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/css/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/css/flag-icons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('backend/css/theme-default.css') }}" class="template-customizer-theme-css" />
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
                                    <span class="text-muted fw-light"><i class="tf-icon bx bx-chevrons-right" cursorshover="true"></i> Routes </span> 
                                </h5>
                            </div>
                            <div class="col-md-8">
                                <div class="pull-right">
                                    <button type="button" class="btn btn-secondary btn-new  v-top" data-bs-toggle="modal" data-bs-target="#AddNewRoute" cursorshover="true">
                                        <span class="tf-icons bx bx-plus" cursorshover="true"></span> Add New Route
                                    </button>
                                    <div class="btn-group  v-top">
                                        <button type="button" class="btn btn-secondary btn-icon"  data-bs-toggle="modal" data-bs-target="#searchRoute"  aria-expanded="false" cursorshover="true"><i class="bx bx-search" cursorshover="true"></i></button>
                                    </div>
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
                                                <th class="text-muted unset">ID</th>
                                                <th class="text-muted unset">LabelName</th>
                                                <th class="text-muted unset">FromBranchName</th>
                                                <th class="text-muted unset">ToBranchName</th>
                                                <th class="text-muted unset">DeliveryType</th>
                                                <th class="text-muted unset">Opened</th>
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
                    <input type="hidden" id="json-routes" value="{{ url('json/routes') }}">
                    <input type="hidden" id="json-townships" value="{{ url('json/townships') }}">
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

        <!-- Search Route Modal -->
        <div class="modal modal-top modal-md fade" id="searchRoute" tabindex="-1">
            <div class="modal-dialog">
                <form class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTopTitle">Search Route</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="search-from-branch" class="form-label">Select Branch <span class="fw-bolder text-danger" >*</span></label>
                                <select id="search-from-branch" class="select2 form-select form-select-lg" data-allow-clear="true">
                                @foreach($branches as $from)
                                <option value="{{ $from->Id }}">{{ $from->BranchNameEn.' - '.$from->BranchNameMm  }} ({{ $from->RegionCode }})</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <button type="button" class="btn btn-secondary btn-search" cursorshover="true">
                                    <span class="tf-icons bx bx-search" cursorshover="true"></span> Search
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Add Modal -->
        <div class="modal modal-top fade" id="AddNewRoute" tabindex="-1">
            <div class="modal-dialog  modal-fullscreen ">
                <form class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-secondary" id="modalTopTitle">Add New Route For (Branch - Branch) </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-4 mb-3">
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <label for="new-from-branch" class="form-label">From Branch Name <span class="fw-bolder text-danger" >*</span></label>
                                        <select id="new-from-branch" class="select2 form-select form-select-lg" data-allow-clear="true">
                                        @foreach($branches as $from)
                                        <option value="{{ $from->Id }}">{{ $from->BranchNameEn.' - '.$from->BranchNameMm  }} ({{ $from->Region }})</option>
                                        @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="new-from-region" class="form-label">To Region <span class="fw-bolder text-danger" >*</span></label>
                                        <select id="new-from-region" class="select2 form-select form-select-lg" data-allow-clear="true">
                                        @foreach($regions as $region)
                                        <option value="{{ $region->RegionCode }}">{{ $region->EnName.' - '.$region->MmName }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="new-from-region" class="form-label">Delivery Type <span class="fw-bolder text-danger" >*</span></label>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-check-label custom-option-content form-check-secondary" for="customCheckTemp'">
                                                    <input class="form-check-input delivery-type" type="checkbox" value="same-day"  id="customCheckTemp" />
                                                    <span class="custom-option-header">
                                                    <span class="h6 mb-0">Outbound Same Day</span>
                                                    </span>
                                                </label>
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-check-label custom-option-content form-check-secondary" for="customCheckTemp'">
                                                    <input class="form-check-input delivery-type" type="checkbox" value="next-day"  id="customCheckTemp" />
                                                    <span class="custom-option-header">
                                                    <span class="h6 mb-0">Outbound Next Day</span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="col-md-6 mt-4">
                                                <label class="form-check-label custom-option-content form-check-secondary" for="customCheckTemp'">
                                                    <input class="form-check-input delivery-type" type="checkbox" value="inbound"  id="customCheckTemp" />
                                                    <span class="custom-option-header">
                                                        <span class="h6 mb-0">Inbound Handover</span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 mb-3">
                                        <div class="custom-alert hide">
                                            <div class="alert alert-warning alert-dismissible mb-0" role="alert">
                                                <h6 class="alert-heading d-flex align-items-center mb-1">Be Aware!!</h6>
                                                <p class="mb-0"><span id="related-region"></span> နှင့် သက်ဆိုင်သော ရုံးများအားလုံး အတွက် လမ်းကြောင်း ပါဝင်သွား မည်ဖြစ်ပါသည်။</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8 mb-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-check form-check-primary">
                                            <input class="form-check-input" type="checkbox" value="1" id="check-all-branches">
                                            <label class="form-check-label fw-semibold" for="check-all-branches" cursorshover="true">All Selected Branches (<span id="from-label"></span> မှစာထွက်လမ်းကြောင်းများ)</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div id="new-to-branch" class="mx-2 row "></div>
                                    </div>
                                </div>            
                            </div>

                        </div>       
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-secondary btn-create">Save</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Edit Modal -->
        <div class="modal modal-top fade" id="EditTownship" tabindex="-1">
            <div class="modal-dialog">
                <form class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTopTitle">Edit Township</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="edit-mmname" class="form-label">MM Name</label>
                                <input type="text" id="edit-mmname" class="form-control" placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="edit-enname" class="form-label">EN Name</label>
                                <input type="text" id="edit-enname" class="form-control" placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-3">
                                <label for="edit-region" class="form-label">Region Code</label>
                            </div>
                            <div class="col mb-3">
                                <label for="edit-township-code" class="form-label">Township Code</label>
                                <input type="text" id="edit-township-code" class="form-control">
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-3">
                                <label for="edit-shortcode" class="form-label">ShortCode</label>
                                <input type="text" id="edit-shortcode" class="form-control">
                            </div>
                            <div class="col mb-3">
                                <label for="edit-postal-code" class="form-label">PostalCode</label>
                                <input type="text" id="edit-postal-code" class="form-control" disabled>
                            </div>
                            <div class="col mb-3">
                                <label for="dobSlideTop" class="form-label">Branch</label>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-3">
                                <label class="switch switch-primary">
                                    <input type="checkbox" class="switch-input" id="edit-active" />
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
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" id="edit-id" class="form-control">
                        <input type="hidden" id="edit-region-type" class="form-control">
                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-update">Save</button>
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
        <script src="{{ asset('backend/js/forms-tagify.js') }}"></script>
        <script src="{{ asset('backend/js/forms-typeahead.js') }}"></script> 
        <script type="text/javascript">
            $(document).ready(function(){
                var url              = $("#url").val();
                var json_routes   = $("#json-routes").val();

                var routes        = json_routes;
                var token            = $("#token").val();

                var items = [];
                 from_label = $("#new-from-branch :selected").text();
                 $("#from-label").text(from_label);


                var fetched_data = function(param){
                        $("#fetched-data").empty();
                        json_req = routes+'/'+param;
                        $.ajax({
                                url: json_req,
                                type: 'GET',
                                data: {},
                                success: function(data){
                                        if(data.total > 0){
                                                $.each(data.data, function (i, item) {
                                                        $("#fetched-data").append('<tr>'
                                                                +'<td class="text-muted">'+item.Id+'</td>'
                                                        +'<td><span class="text-secondary fw-semibold">'+item.FromBranchName+' ⇌ '+item.ToBranchName+'</span></td>'
                                                        +'<td>'+item.FromBranchName+'<span class="fw-light"> ['+item.OperationRegion+']</span></td>'
                                                       +'<td>'+item.ToBranchName+'<span class="fw-light"> ['+item.RelatedRegion+']</span></td>'
                                                        +'<td><span class="badge rounded-pill '+(item.DeliveryType=='same-day'? 'bg-info':(item.DeliveryType=='next-day'? 'bg-primary':'bg-success'))+'">'+item.DeliveryType+'</span></td>'
                                                       +'<td>'+(item.Active == 1? '<span class="badge badge-center rounded-pill bg-success"><i class="bx bx-check"></i></span>':'<span class="badge badge-center rounded-pill bg-danger"><i class="bx bx-x"></i></span>')+'</td>'
                                                        +'<td>'
                                                                +'<div class="btn-group">'
                                                                +'<button type="button" class="btn btn-icon btn-sm btn-outline-secondary rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false" cursorshover="true"><i class="bx bx-dots-vertical-rounded" cursorshover="true"></i></button>'
                                                                +'<ul class="dropdown-menu dropdown-menu-end" style="">'
                                                                    +'<li ><a class="dropdown-item text-success  load-id" href="'+url+'/admin/routes/'+item.Id+'"  cursorshover="true"><span class="tf-icons bx bx-search" cursorshover="true"></span> View Route</a></li>'
                                                                    +'<li><a class="dropdown-item text-primary  load-id" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#EditTownship" cursorshover="true" title= '+item.Id+'><span class="tf-icons bx bx-pencil" cursorshover="true"></span> Edit Route</a></li>'
                                                                    +'<li><a class="dropdown-item text-success  edit-route '+(item.Active==1? 'hide':'')+'" href="javascript:void(0);" cursorshover="true" title= '+item.Id+' alt=1><span class="tf-icons bx bx-show" cursorshover="true"></span> Open Route</a></li>'
                                                                    +'<li><a class="dropdown-item text-danger  edit-route '+(item.Active==0? 'hide':'')+'" href="javascript:void(0);" cursorshover="true" title= '+item.Id+' alt=0><span class="tf-icons bx bx-hide" cursorshover="true"></span> Close Route</a></li>'
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
                                            $(".empty-data").addClass('hide');
                                        }else{
                                            $(".loading").addClass('hide');
			                $(".results").removeClass('hide');
			                $(".empty-data").removeClass('hide');
			                $("#prev-btn").attr('disabled',true);
			                $("#next-btn").attr('disabled',true);

                                        }
                                }
                        });
                };

                var fetched_related_branches = function(){
                    region_code     = $("#new-from-region").val();
                    label = $("#new-from-region :selected").val();
                    $("#related-region").text(label);

                    $.ajax({
                            url: url+'/json/fetched-branches',
                            type: 'POST',
                            data: {
                                    'region_code' : region_code,
                                    '_token'          :token
                            },
                            success: function(data){
                                 $('#new-to-branch').empty(); 
                            
                                $.each(data, function (i, item) {
                                    //$('#new-to-branch2').append('<li value="'+item['Id']+'">'+item['BranchNameEn']+' ('+item['BranchNameMm']+')</li>' );
                                
                                    // $('#new-to-branch2').append('<div class="col-md-6 mb-1 form-check form-check-primary">'
                                    //                       +'<input class="form-check-input check-item" type="checkbox" value="'+item['Id']+' ">'
                                    //                       +'<label class="form-check-label" for="all-branches" cursorshover="true">'+item['BranchNameEn']+' '+item['BranchNameMm']+' <span class="text-muted">['+item['RegionName']+']</span></label>'
                                    //                    +'</div>');

                                    $('#new-to-branch').append('<div class="col-md-6"><div class="form-check m-1 custom-option custom-option-basic border-secondary">'
              +'<label class="form-check-label custom-option-content form-check-secondary" for="customCheckTemp'+item['Id']+'">'
                +'<input class="form-check-input check-item" type="checkbox" value="'+item['Id']+'"  id="customCheckTemp'+item['Id']+'" />'
                +'<span class="custom-option-header">'
                  +'<span class="h6 mb-0">'+item['BranchNameEn']+' <span class="text-secondary">('+item['BranchNameMm']+')</span></span>'
                +'<small class="option-text">'+item['RegionName']+'</small>'
                +'</span>'
              +'</label>'
              +'</div>'
            +'</div>');
                                    
                                });
                            }
                    });
                }

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
                                                                +'<td class="text-muted">'+item.Id+'</td>'
                                                        +'<td><span class="text-secondary fw-semibold">'+item.FromBranchName+' ⇌ '+item.ToBranchName+'</span></td>'
                                                        +'<td>'+item.FromBranchName+'<span class="fw-light"> ['+item.OperationRegion+']</span></td>'
                                                       +'<td>'+item.ToBranchName+'<span class="fw-light"> ['+item.RelatedRegion+']</span></td>'
                                                        +'<td><span class="badge rounded-pill '+(item.DeliveryType=='same-day'? 'bg-info':(item.DeliveryType=='next-day'? 'bg-primary':'bg-success'))+'">'+item.DeliveryType+'</span></td>'
                                                       +'<td>'+(item.Active == 1? '<span class="badge badge-center rounded-pill bg-success"><i class="bx bx-check"></i></span>':'<span class="badge badge-center rounded-pill bg-danger"><i class="bx bx-x"></i></span>')+'</td>'
                                                        +'<td>'
                                                                +'<div class="btn-group">'
                                                                +'<button type="button" class="btn btn-icon btn-sm btn-outline-secondary rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false" cursorshover="true"><i class="bx bx-dots-vertical-rounded" cursorshover="true"></i></button>'
                                                                +'<ul class="dropdown-menu dropdown-menu-end" style="">'
                                                                    +'<li ><a class="dropdown-item text-success  load-id" href="'+url+'/admin/routes/'+item.Id+'"  cursorshover="true"><span class="tf-icons bx bx-search" cursorshover="true"></span> View Route</a></li>'
                                                                    +'<li><a class="dropdown-item text-primary  load-id" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#EditTownship" cursorshover="true" title= '+item.Id+'><span class="tf-icons bx bx-pencil" cursorshover="true"></span> Edit Route</a></li>'
                                                                    +'<li><a class="dropdown-item text-success  edit-route '+(item.Active==1? 'hide':'')+'" href="javascript:void(0);" cursorshover="true" title= '+item.Id+' alt=1><span class="tf-icons bx bx-show" cursorshover="true"></span> Open Route</a></li>'
                                                                    +'<li><a class="dropdown-item text-danger  edit-route '+(item.Active==0? 'hide':'')+'" href="javascript:void(0);" cursorshover="true" title= '+item.Id+' alt=0><span class="tf-icons bx bx-hide" cursorshover="true"></span> Close Route</a></li>'
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
                                        $("#links").append('<button type="button" class="btn btn-primary btn-sm pagination-btn me-1 mb-1 '+(data.current_page == value.label ? 'disabled':(value.url == null ? 'disabled':''))+'" cursorshover="true" value="'+value.url+'">'+value.label+'</button>');
                                        });

                                        $(".loading").addClass('hide');
                                        $(".results").removeClass('hide');
                                }else{
                                        $(".empty-data").removeClass('hide');
                                }
                        }
                        });
                });
          

            $('#new-from-region').on("change",function search(e) {
                fetched_related_branches();
            });

             $('body').delegate("#check-all-branches","click",function () {
                label = $("#new-from-region :selected").val();
                $("#related-region").text(label);

                if($(this).is(':checked')){
                    $('#new-to-branch').attr('disabled', 'disabled');
                    $(".custom-alert ").removeClass('hide');
                    $('.check-item').prop('checked', true);

                    
                }else{
                    $('#new-to-branch').removeAttr('disabled');
                    $(".custom-alert ").addClass('hide');
                    $('.check-item').prop('checked', false);
                }

            }); 


            $('body').delegate(".load-id","click",function () {
                id = $(this).val();
                $("#item").val(id);

                $.ajax({
                    url: url+'/admin/townships/'+id,
                    type: 'GET',
                    data: {},
                    success: function(data){
                        $("#branch-label-name").text(data.EnName);
                        $("#edit-id").val(data.Id);
                        $("#edit-mmname").val(data.MmName);
                        $("#edit-enname").val(data.EnName);
                        $("#edit-region").val(data.RegionCode).change();
                        $("#edit-township-code").val(data.TownshipCode);
                        $("#edit-postal-code").val(data.PostalCode);
                        $("#edit-shortcode").val(data.ShortCode);
                        $("#edit-branch").val(data.Branch).change();
                        $("#edit-region-type").val(data.RegionType);
                        if(data.Active == 1){
                                $('#edit-active').attr('checked', true);
                        }else{
                                $('#edit-active').attr('checked', false);
                        }
                    }
                });
            });

             $('body').delegate(".btn-new","click",function () {
                var region = $("#edit-region").val();
                var township =  '00';

               $("#new-postal-code").val(region+township);
            });

             $('body').delegate(".btn-create","click",function () {
                items=[];
                 types=[];

                from_branch_id                   = $("#new-from-branch").val();
                from_region_code                    = $("#new-from-region").val();
                //to_branch_id                        = $("#new-to-branch").val();
                //to_branch_label                       = $("#new-to-branch :selected").text().split(' ')[0];;
                // if($('#all-branches').is(':checked')){
                //     all_branches = 1;
                // }else{
                //     all_branches = 0;
                // }
                
                active = 1;

                $(".check-item:checked").each(function(){
                        items.push($(this).val());
                    });

                $(".delivery-type:checked").each(function(){
                        types.push($(this).val());
                    });


                console.log(items);

                $.ajax({
                        url: url+'/admin/routes/store',
                        type: 'POST',
                        data: {
                                'from_branch_id'                        :from_branch_id,
                                'from_region_code'                                :from_region_code,
                               // 'to_branch_id'            :to_branch_id,
                               // 'to_branch_label' :to_branch_label,
                               // 'all_branches'          :all_branches,
                                'selected_branches':items,
                                'types':types,
                                'active'                                        :active,
                                '_token'                                :token
                        },
                        success: function(data){
                                if(data.success == 1){
                            $('#AddNewRoute').modal('hide');
                            $("#fetched-data").empty();

                            $("#success-message").text(data.message);
                            $("#successToast").toast("show");

                            fetched_data('all');   
                        }else{
                            $("#error-message").text(data.message);
                            $("#errorToast").toast("show");
                        }


                        }
                });
            });


$('body').delegate(".btn-search","click",function () {
             $(".loading").removeClass('hide');
                        $(".results").addClass('hide');

                        $("#fetched-data").empty();
                        $("#links").empty();
                search_branch                   = $("#search-from-branch").val();

                $.ajax({
                        url: url+'/admin/search/routes/'+search_branch,
                        type: 'GET',
                        data: {},
                        success: function(data){
                            $(".loading").addClass('hide');
                            $(".results").removeClass('hide');
                             if(data.total > 0){
                                                $.each(data.data, function (i, item) {
                                                    $("#fetched-data").append('<tr>'
                                                                +'<td class="text-muted">'+item.Id+'</td>'
                                                        +'<td><span class="text-secondary fw-semibold">'+item.FromBranchName+' ⇌ '+item.ToBranchName+'</span></td>'
                                                        +'<td>'+item.FromBranchName+'<span class="fw-light"> ['+item.OperationRegion+']</span></td>'
                                                       +'<td>'+item.ToBranchName+'<span class="fw-light"> ['+item.RelatedRegion+']</span></td>'
                                                        +'<td><span class="badge rounded-pill '+(item.DeliveryType=='same-day'? 'bg-info':(item.DeliveryType=='next-day'? 'bg-primary':'bg-success'))+'">'+item.DeliveryType+'</span></td>'
                                                       +'<td>'+(item.Active == 1? '<span class="badge badge-center rounded-pill bg-success"><i class="bx bx-check"></i></span>':'<span class="badge badge-center rounded-pill bg-danger"><i class="bx bx-x"></i></span>')+'</td>'
                                                        +'<td>'
                                                                +'<div class="btn-group">'
                                                                +'<button type="button" class="btn btn-icon btn-sm btn-outline-secondary rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false" cursorshover="true"><i class="bx bx-dots-vertical-rounded" cursorshover="true"></i></button>'
                                                                +'<ul class="dropdown-menu dropdown-menu-end" style="">'
                                                                    +'<li ><a class="dropdown-item text-success  load-id" href="'+url+'/admin/routes/'+item.Id+'"  cursorshover="true"><span class="tf-icons bx bx-search" cursorshover="true"></span> View Route</a></li>'
                                                                    +'<li><a class="dropdown-item text-primary  load-id" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#EditTownship" cursorshover="true" title= '+item.Id+'><span class="tf-icons bx bx-pencil" cursorshover="true"></span> Edit Route</a></li>'
                                                                    +'<li><a class="dropdown-item text-success  edit-route '+(item.Active==1? 'hide':'')+'" href="javascript:void(0);" cursorshover="true" title= '+item.Id+' alt=1><span class="tf-icons bx bx-show" cursorshover="true"></span> Open Route</a></li>'
                                                                    +'<li><a class="dropdown-item text-danger  edit-route '+(item.Active==0? 'hide':'')+'" href="javascript:void(0);" cursorshover="true" title= '+item.Id+' alt=0><span class="tf-icons bx bx-hide" cursorshover="true"></span> Close Route</a></li>'
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
                                                 $(".empty-data").addClass('hide');
                                        }else{
                                                $(".empty-data").removeClass('hide');
                                        }

                            $('#searchRoute').modal('hide');
                        }
                });
            });

            $('body').delegate(".btn-update","click",function () {
                id                                                                              = $("#edit-id").val();
                mmname                                                  = $("#edit-mmname").val();
                enname                                                  = $("#edit-enname").val();
                region                                                          = $("#edit-region").val();
                township_code                                   = $("#edit-township-code").val();
                postal_code                                             = $("#edit-postal-code").val();
                short_code                                              = $("#edit-short-code").val();
                branch                                                          = $("#edit-branch").val();
                region_type                                             = $("#edit-region-type").val();

                if($('#edit-active').is(":checked")){
                        active = 1;
                }else{
                        active = 2;
                }


                $.ajax({
                        url: url+'/admin/townships',
                        type: 'POST',
                        data: {
                                'Id'                                            :id,
                                'MmName'                        :mmname,
                                'EnName'                                :enname,
                                'RegionCode'            :region,
                                'TownshipCode'          :township_code,
                                'ShortCode'                     :short_code,
                                'PostalCode'                    :postal_code,
                                'Branch'                                :branch,
                                'RegionType'            :region_type,
                                'Active'                                        :active,
                                '_method'                       : 'PUT',
                                '_token'                                :token
                        },
                        success: function(data){
                                if(data.success == 1){
                            $('#EditTownship').modal('hide');
                            $("#fetched-data").empty();

                            Swal.fire({
                                title:"Good job!",
                                text:data.message,
                                icon:"success",
                                customClass:{confirmButton:"btn btn-info"},
                                buttonsStyling:!1
                            });

                            fetched_data('all');   
                        }else{
                            Swal.fire({
                                title:"Sorry!",
                                text:data.message,
                                icon:"warning",
                                customClass:{confirmButton:"btn btn-info"},
                                buttonsStyling:!1
                            });
                        }
                        }
                });
            });

            $('body').delegate(".btn-delete","click",function () {
                id      = $("#item").val();

                $.ajax({
                        url: url+'/admin/townships/delete',
                        type: 'POST',
                        data: {
                                'Id'                                            :id,
                                '_method'                       : 'DELETE',
                                '_token'                                :token
                        },
                        success: function(data){
                                if(data.success == 1){
                            $('#DeleteTownship').modal('hide');
                            $("#fetched-data").empty();

                            Swal.fire({
                                title:"Good job!",
                                text:data.message,
                                icon:"success",
                                customClass:{confirmButton:"btn btn-info"},
                                buttonsStyling:!1
                            });

                           fetched_data('all');   
                        }else{
                            Swal.fire({
                                title:"Sorry!",
                                text:data.message,
                                icon:"warning",
                                customClass:{confirmButton:"btn btn-info"},
                                buttonsStyling:!1
                            });
                        }
                        }
                });
            });

            

            $('body').delegate(".filtered","click",function () {
                var status = $(this).attr('title');
                $(".filtered").removeClass('active');
                $(this).addClass('active');
                fetched_data(status);   
                
            });

            $('body').delegate(".edit-route","click",function () {
                id = $(this).attr('title');
                active = $(this).attr('alt');

                $.ajax({
                        url: url+'/admin/routes/change',
                        type: 'POST',
                        data: {
                                'Id'                                            :id,
                                'active': active,
                                '_token'                                :token
                        },
                        success: function(data){
                            if(active==1){
                                $("#success-message").text('Route has been opened.');
                            }else{
                                $("#success-message").text('Route has been closed.');
                            }
                            
                            $("#successToast").toast("show");
                           fetched_data('all');   
                        }
                });
            }); 

            fetched_data('all');   
            fetched_related_branches();
        });
        </script>
</body>
</html>

