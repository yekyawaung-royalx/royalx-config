<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="" data-template="vertical-menu-template">
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

         <title>Royalx Core | Branches</title>
        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="{{ asset('backend/images/favicon.png') }}" />

        <link rel="stylesheet" href="{{ asset('backend/css/boxicons.css') }}" />
        <link rel="stylesheet" href="{{ asset('backend/css/fontawesome.css') }}" />
        <link rel="stylesheet" href="{{ asset('backend/css/flag-icons.css') }}" />

        <!-- Core CSS -->
        <link rel="stylesheet" href="{{ asset('backend/css/core.css') }}"/>
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
    <!-- Layout wrapper -->
        <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">
                    <!-- Menu -->
                    @include('layouts.aside')
                <!-- / Menu -->

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
                                   <span class="text-muted fw-light"><i class="tf-icon bx bx-chevrons-right" cursorshover="true"></i> Branches </span> 
                                </h5>
                            </div>
                            <div class="col-md-8">
                                <div class="pull-right">
                                    <button type="button" class="btn btn-secondary  v-top" data-bs-toggle="modal" data-bs-target="#AddNewBranch" cursorshover="true">
                                        <span class="tf-icons bx bx-plus" cursorshover="true"></span> Add New
                                    </button>
                                    <input type="text" class="form-control form-inline border-secondary" id="defaultFormControlInput" placeholder="ရုံးအမည် ရှာရန်" aria-describedby="defaultFormControlHelp">
                                    <div class="btn-group  v-top">
                                                    <button type="button" class="btn btn-secondary btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false" cursorshover="true"><i class="bx bx-slider" cursorshover="true"></i></button>
                                                    <ul class="dropdown-menu dropdown-menu-end" style="">
                                                      <li><a class="dropdown-item filtered active" href="javascript:void(0);" title="all">All Branches</a></li>
                                                      <li><a class="dropdown-item filtered" href="javascript:void(0);" title="opened">Opened Branches</a></li>
                                                      <li><a class="dropdown-item filtered" href="javascript:void(0);" title="closed">Closed Branches</a></li>
                                                    </ul>
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
                                                                <div class="spinner-grow text-secondary" role="status">
                                                                        <span class="visually-hidden">Loading...</span>
                                                                </div>
                                                                <div class="spinner-grow text-secondary" role="status">
                                                                        <span class="visually-hidden">Loading...</span>
                                                                </div>
                                                                <div class="spinner-grow text-secondary" role="status">
                                                                        <span class="visually-hidden">Loading...</span>
                                                                </div>
                                                        </div>
                                <div class="card-body results hide">
                                        <div class="table-responsive text-nowrap">
                                                <table class="table">
                                                <thead>
                                                <tr>
                                                    <th class="text-muted unset">BranchName</th>
                                                    <th class="text-muted unset">Type</th>
                                                    <th class="text-muted unset">Region</th>
                                                    <th class="text-muted unset">RegionCode</th>
                                                    <th class="text-muted unset">Opened</th>
                                                    <th class="text-muted unset">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0" id="fetched-data">
                                              
                                                </tbody>
                                                </table>
                                        </div>
                                </div>
                            </div>
                        </div>
                    
                        <input type="hidden" id="url" value="{{ url('') }}">
                        <input type="hidden" id="json-branches" value="{{ url('json/branches') }}">
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

    <!-- Add Modal -->
    <div class="modal modal-top fade" id="AddNewBranch" tabindex="-1">
        <div class="modal-dialog">
            <form class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTopTitle">Add New Branch</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="create-branch-en" class="form-label text-normal">BranchNameEn</label>
                            <input type="text" id="create-branch-en" class="form-control" placeholder="Enter Name En">
                        </div>
                        <div class="col mb-3">
                            <label for="create-branch-mm" class="form-label text-normal">BranchNameMm</label>
                            <input type="text" id="create-branch-mm" class="form-control" placeholder="Enter Name Mm">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="create-type" class="form-label text-normal">Type</label>
                            <select id="create-type" class="select2 form-select form-select-lg" data-allow-clear="true">
                                <option value="branch">Branch</option>
                                <option value="sorting">Sorting</option>
                                <option value="cod">COD</option>
                            </select>
                        </div>
                        <div class="col mb-3">
                            <label for="create-internal-code" class="form-label text-normal">InternalCode</label>
                            <input type="text" id="create-internal-code" class="form-control" placeholder="001">
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-3">
                            <label for="create-region" class="form-label text-normal">RegionCode</label>
                            <select id="create-region" class="select2 form-select form-select-lg" data-allow-clear="true">
                                @foreach($regions as $region)
                                <option value="{{ $region->PostalCode }}">({{ $region->PostalCode }}) {{ $region->MmName }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-3">
                            <label for="create-township" class="form-label text-normal">BasedTownship</label>
                            <select id="create-township" class="select2 form-select form-select-lg" data-allow-clear="true">
                                
                            </select>
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
    <div class="modal modal-top fade" id="EditBranch" tabindex="-1">
        <div class="modal-dialog">
            <form class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTopTitle">Edit Branch</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="old-enname" class="form-label">En Name</label>
                            <input type="text" id="old-enname" class="form-control" placeholder="Enter En Name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="old-mmname" class="form-label">Mm Name</label>
                            <input type="text" id="old-mmname" class="form-control" placeholder="Enter Mm Name">
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-3">
                            <label for="old-intercode" class="form-label">InternalCode</label>
                            <input type="text" id="old-intercode" class="form-control" placeholder="Enter InternalCode">
                        </div>
                        <div class="col mb-3">
                            <label for="old-region" class="form-label">RegionCode Code</label>
                            <select id="old-region" class="select2 form-select form-select-lg" data-allow-clear="true">
                                @foreach($regions as $region)
                                <option value="{{ $region->PostalCode }}">{{ $region->MmName }} ({{ $region->PostalCode }})</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-3">
                            <div class="form-check form-check-primary mt-3">
                                <input name="old_branch_type" class="form-check-input" type="radio" value="1" id="customRadioPrimary">
                                <label class="form-check-label" for="customRadioPrimary"> Branch </label>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="form-check form-check-primary mt-3">
                                <input name="old_branch_type" class="form-check-input" type="radio" value="2" id="customRadioPrimary">
                                <label class="form-check-label" for="customRadioPrimary"> Sorting </label>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="form-check form-check-primary mt-3">
                                <input name="old_branch_type" class="form-check-input" type="radio" value="3" id="customRadioPrimary">
                                <label class="form-check-label" for="customRadioPrimary"> COD </label>
                            </div>
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
        <script type="text/javascript">
        $(document).ready(function(){
                var url           = $("#url").val();
                var json_cities   = $("#json-cities").val();
                var json_branches = $("#json-branches").val();

                var cities      = json_cities;
                var branches    = json_branches;
                var token       = $("#token").val();
                //var selected_region = $("#new-region :selected").val();


                var fetched_data = function(param){
                    $("#fetched-data").empty();
                    json_req = branches+'/'+param;

                    $.ajax({
                            url: json_req,
                            type: 'GET',
                            data: {},
                            success: function(data){
                             
                            if(data.total > 0){
                            $.each(data.data, function (i, item) {
                                    $("#fetched-data").append('<tr>'
                                    +'<td><span class="text-secondary fw-semibold">'+item.BranchNameEn+' ('+item.BranchNameMm+')</span></td>'
                                    +'<td><span class="badge bg-secondary">'+item.Type+'</span></td>'
                                    +'<td>'+item.Region+'</td>'
                                    +'<td>('+item.RegionPostalCode+') '+item.RegionCode+'</td>'
                                   +'<td>'+(item.Active == 1? '<span class="badge badge-center rounded-pill bg-success"><i class="bx bx-check"></i></span>':'<span class="badge badge-center rounded-pill bg-danger"><i class="bx bx-x"></i></span>')+'</td>'
                                    +'<td>'
                                             +'<div class="btn-group">'
                                            +'<button type="button" class="btn btn-icon btn-sm btn-outline-secondary rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false" cursorshover="true"><i class="bx bx-dots-vertical-rounded" cursorshover="true"></i></button>'
                                            +'<ul class="dropdown-menu dropdown-menu-end" style="">'
                                                +'<li ><a class="dropdown-item text-success  load-id" href="'+url+'/admin/branches/'+item.Id+'" ><span class="tf-icons bx bx-search" cursorshover="true"></span> View Branch</a></li>'
                                                +'<li><a class="dropdown-item text-primary  load-id" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#EditTownship" cursorshover="true" title= '+item.Id+'><span class="tf-icons bx bx-pencil" cursorshover="true"></span> Edit Branch</a></li>'
                                                +'<li><a class="dropdown-item text-danger  load-id" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#DeleteTownship" cursorshover="true" title= '+item.Id+'><span class="tf-icons bx bx-trash" cursorshover="true"></span> Delete Branch</a></li>'
                                            +'</ul>'
                                         +'</div>'
                                    +'</td>'
                                +'</tr>');
                            });


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

                var fetched_townships = function(){
                    region_code     = $("#create-region :selected").val();
                    // label = $("#new-from-region :selected").val();
                    // $("#related-region").text(label);

                    $.ajax({
                            url: url+'/json/fetched-region-townships',
                            type: 'POST',
                            data: {
                                    'region_code' : region_code,
                                    '_token'          :token
                            },
                            success: function(data){
                                 $('#create-township').empty(); 
                            
                                $.each(data, function (i, item) {
                                    $('#create-township').append('<option value="'+item['PostalCode']+'">'+item['TownshipNameEn']+' ('+item['TownshipNameMm']+')</option>' );
                                
                                    // $('#new-to-branch2').append('<div class="col-md-6 mb-1 form-check form-check-primary">'
                                    //                       +'<input class="form-check-input check-item" type="checkbox" value="'+item['Id']+' ">'
                                    //                       +'<label class="form-check-label" for="all-branches" cursorshover="true">'+item['BranchNameEn']+' '+item['BranchNameMm']+' <span class="text-muted">['+item['RegionName']+']</span></label>'
                                    //                    +'</div>');

                                    
                                });
                            }
                    });
                }

                $('body').delegate(".pagination-btn","click",function () {
                    //clicked url json data
                    $(".loading").removeClass('hide');
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
                            $.each(data.data, function (i, item) {
                                   $("#fetched-data").append('<tr>'
                                        +'<td><span class="text-secondary fw-semibold">'+item.BranchNameEn+' ('+item.BranchNameMm+')</span></td>'
                                        +'<td><span class="badge bg-secondary">'+item.Type+'</span></td>'
                                        +'<td>'+item.Region+'</td>'
                                        +'<td>('+item.RegionPostalCode+') '+item.RegionCode+'</td>'
                                       +'<td>'+(item.Active == 1? '<span class="badge badge-center rounded-pill bg-success"><i class="bx bx-check"></i></span>':'<span class="badge badge-center rounded-pill bg-danger"><i class="bx bx-x"></i></span>')+'</td>'
                                        +'<td>'
                                                 +'<div class="btn-group">'
                                                +'<button type="button" class="btn btn-icon btn-sm btn-outline-secondary rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false" cursorshover="true"><i class="bx bx-dots-vertical-rounded" cursorshover="true"></i></button>'
                                                +'<ul class="dropdown-menu dropdown-menu-end" style="">'
                                                    +'<li ><a class="dropdown-item text-success  load-id" href="'+url+'/admin/branches/'+item.Id+'" ><span class="tf-icons bx bx-search" cursorshover="true"></span> View Branch</a></li>'
                                                    +'<li><a class="dropdown-item text-primary  load-id" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#EditTownship" cursorshover="true" title= '+item.Id+'><span class="tf-icons bx bx-pencil" cursorshover="true"></span> Edit Branch</a></li>'
                                                    +'<li><a class="dropdown-item text-danger  load-id" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#DeleteTownship" cursorshover="true" title= '+item.Id+'><span class="tf-icons bx bx-trash" cursorshover="true"></span> Delete Branch</a></li>'
                                                +'</ul>'
                                             +'</div>'
                                        +'</td>'
                                    +'</tr>');
                            });



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
                        }
                    });
            });

            $('body').delegate(".load-id","click",function () {
                id = $(this).val();
                $("#item").val(id);

                $.ajax({
                    url: url+'/admin/branches/'+id,
                    type: 'GET',
                    data: {},
                    success: function(data){
                        $("#old-enname").val(data.EnName);
                        $("#old-mmname").val(data.MmName);
                        $("#old-internalcode").val(data.InternalCode);
                        $("#old-region").val(data.RegionCode).change();

                        $('input[name=old_branch_type][value='+data.Type+']').attr('checked', true);
                        if(data.Active == 1){
                            $('#edit-active').attr('checked',true); 
                        }else{
                            $('#edit-active').attr('checked',false); 
                        }
                        
                    }
                });
            });

            $('body').delegate(".btn-update","click",function () {
                id              = $("#item").val();
                en_name         = $("#old-enname").val();
                en_name         = $("#old-enname").val();
                mm_name         = $("#old-mmname").val();
                internalcode    = $("#old-internalcode").val();
                regioncode      = $("#old-region").val();
                type            = $("input[name=old_branch_type]:checked").val();
                if($('#edit-active').is(":checked")){
                        active = 1;
                }else{
                        active = 2;
                }

                $.ajax({
                    url: url+'/admin/branches/',
                    type: 'PUT',
                    data: {
                        'Id':id,
                        'EnName':en_name,
                        'MmName':mm_name,
                        'InternalCode':internalcode,
                        'RegionCode':regioncode,
                        'Type':type,
                        'Active':type,
                        'method':'PUT',
                        '_token':token
                    },
                    success: function(data){
                    if(data.success == 1){
                            $('#EditBranch').modal('hide');
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

            $('#create-region').on("change",function search(e) {
                region_code = $(this).val();

               fetched_townships();
            });

            $('body').delegate(".btn-create","click",function () {
                // from_branch_id                   = $("#new-from-branch").val();
                // from_region_code                    = $("#new-from-region").val();
                //to_branch_id                        = $("#new-to-branch").val();
                //to_branch_label                       = $("#new-to-branch :selected").text().split(' ')[0];;
                BranchNameEn = $("#create-branch-en").val();
                BranchNameMm = $("#create-branch-mm").val();
                InternalCode = $("#create-internal-code").val();
                Type = $("#create-type").val();
                BasedTownship = $("#create-township").val();
                RegionPostalCode = $("#create-region").val();
                //RegionPostalCode
                Active = 1;




                $.ajax({
                        url: url+'/admin/branches/store',
                        type: 'POST',
                        data: {
                                'BranchNameEn'                        :BranchNameEn,
                                'BranchNameMm'                                :BranchNameMm,
                                'InternalCode':InternalCode,
                                'Type':Type,
                                'BasedTownship'                                        :BasedTownship,
                                'RegionPostalCode'                                        :RegionPostalCode,
                                '_token'                                :token
                        },
                        success: function(data){
                                if(data.success == 1){
                            $('#AddNewBranch').modal('hide');
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

            
            fetched_townships();
          
            fetched_data('all');   
        });
        </script>
</body>
</html>

