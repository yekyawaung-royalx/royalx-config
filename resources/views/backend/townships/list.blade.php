<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="" data-template="vertical-menu-template">
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

         <title>Royalx Core | Townships</title>
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
                                                                        <span class="text-muted fw-light"><i class="tf-icon bx bx-chevrons-right" cursorshover="true"></i> Townships </span> 
                                                                </h5>
                                                        </div>
                                                        <div class="col-md-8">
                                                                <div class="pull-right">
                                                                        <button type="button" class="btn btn-secondary btn-new  v-top" data-bs-toggle="modal" data-bs-target="#AddNewTownship" cursorshover="true">
                                                                                <span class="tf-icons bx bx-plus" cursorshover="true"></span> Add New
                                                                        </button>
                                                                        <input type="text" class="form-control form-inline border-secondary" id="terms" placeholder="ရှာရန်" aria-describedby="defaultFormControlHelp">
                                                                        <div class="btn-group  v-top">
                                                                                    <button type="button" class="btn btn-secondary btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false" cursorshover="true"><i class="bx bx-slider" cursorshover="true"></i></button>
                                                                                    <ul class="dropdown-menu dropdown-menu-end" style="">
                                                                                      <li><a class="dropdown-item filtered active" href="javascript:void(0);" title="all">All Townships</a></li>
                                                                                      <li><a class="dropdown-item filtered" href="javascript:void(0);" title="opened">Opened Townships</a></li>
                                                                                      <li><a class="dropdown-item filtered" href="javascript:void(0);" title="closed">Closed Townships</a></li>
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
                                                                                        <th class="text-muted unset">PostalCode</th>
                                                                                        <th class="text-muted unset">TownshipName</th>
                                                                                        <th class="text-muted unset">RegionName</th>
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
                                        <input type="hidden" id="json-regions" value="{{ url('json/regions') }}">
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

        <!-- Pagination Modal -->
        <div class="modal modal-top  fade" id="ViewTownship" tabindex="-1">
                <div class="modal-dialog">
                        <form class="modal-content">
                                <div class="modal-header">
                                        <h5 class="modal-title" id="modalTopTitle">Quick View</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <div class="me-2">
                                                <small class="text-muted d-block mb-1">TownshipNameEn</small>
                                                <span class="lbl-township-name-en"></span>
                                              </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="me-2">
                                                <small class="text-muted d-block mb-1">TownshipNameMm</small>
                                                <span class="lbl-township-name-mm"></span>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <div class="me-2">
                                                <small class="text-muted d-block mb-1">RegionEn</small>
                                                <span class="lbl-region-en"></span>
                                              </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="me-2">
                                                <small class="text-muted d-block mb-1">RegionMm</small>
                                                <span class="lbl-region-mm"></span>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="me-2">
                                                <small class="text-muted d-block mb-1">PostalCode</small>
                                                <span class="lbl-postal-code"></span>
                                              </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="me-2">
                                                <small class="text-muted d-block mb-1">RegionCode</small>
                                                <span class="lbl-region-code"></span>
                                              </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="me-2">
                                                <small class="text-muted d-block mb-1">HandleBranch</small>
                                                <span class="lbl-handle-branch"></span>
                                              </div>
                                        </div>
                                    </div>
                                        
                                </div>
                                <div class="modal-footer">
                                        <input type="hidden" id="edit-id" class="form-control">
                                        <input type="hidden" id="edit-region-type" class="form-control">
                                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                                        <a  class="btn btn-secondary btn-view">View Details</a>
                                </div>
                        </form>
                </div>
        </div>

        <!-- Add Modal -->
        <div class="modal modal-top fade" id="AddNewTownship" tabindex="-1">
                <div class="modal-dialog">
                        <form class="modal-content">
                                <div class="modal-header">
                                        <h5 class="modal-title" id="modalTopTitle">Add New Township</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        <div class="row">
                                                <div class="col mb-3">
                                                        <label for="new-name-en" class="form-label">Township Name EN <span class="fw-bolder text-danger" >*</span></label>
                                                        <input type="text" id="new-name-en" class="form-control" placeholder="Enter MM Name">
                                                </div>
                                        </div>
                                        <div class="row">
                                                <div class="col mb-3">
                                                        <label for="new-name-mm" class="form-label">Township Name MM <span class="fw-bolder text-danger" >*</span></label>
                                                        <input type="text" id="new-name-mm" class="form-control" placeholder="Enter EN Name">
                                                </div>
                                        </div>
                                        <div class="row g-2">
                                                <div class="col mb-3">
                                                        <label for="new-region" class="form-label">Region <span class="fw-bolder text-danger" >*</span></label>
                                                        <select id="new-region" class="select2 form-select form-select-lg" data-allow-clear="true">
                                                            @foreach($regions as $region)
                                                            <option value="{{ $region->RegionCode }}">{{ $region->MmName }} ({{ $region->PostalCode }})</option>
                                                            @endforeach
                                                        </select>
                                                </div>
                                                
                                        </div>
                                        <div class="row g-2">
                                                <div class="col mb-3">
                                                        <label for="new-branch" class="form-label">Branch <span class="fw-bolder text-danger" >*</span></label>
                                                        <select id="new-branch" class="select2 form-select form-select-lg" data-allow-clear="true">
                                                        
                                                        </select>
                                                </div>
                                                
                                        </div>
                                        <div class="row g-2">
                                            <div class="col mb-3">
                                                        <label for="new-township-code" class="form-label">Township Code <span class="fw-bolder text-danger" >*</span></label>
                                                        <input type="text" id="new-township-code" class="form-control" placeholder="00">
                                                </div>
                                                <div class="col mb-3">
                                                        <label for="new-region-code" class="form-label">Region Code <span class="fw-bolder text-danger" >*</span></label>
                                                        <input type="text" id="new-region-code" class="form-control" disabled>
                                                </div>
                                                <div class="col mb-3">
                                                        <label for="new-postal-code" class="form-label">Postal Code </label>
                                                        <input type="text" id="new-postal-code" class="form-control" disabled>
                                                </div>
                                                
                                        </div>
                                </div>
                                <div class="modal-footer">
                                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary btn-create">Save</button>
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
                                                        <label for="edit-name-en" class="form-label">Township Name EN <span class="fw-bolder text-danger" >*</span></label>
                                                        <input type="text" id="edit-name-en" class="form-control" placeholder="Enter MM Name">
                                                </div>
                                        </div>
                                        <div class="row">
                                                <div class="col mb-3">
                                                        <label for="edit-name-mm" class="form-label">Township Name MM <span class="fw-bolder text-danger" >*</span></label>
                                                        <input type="text" id="edit-name-mm" class="form-control" placeholder="Enter EN Name">
                                                </div>
                                        </div>
                                        <div class="row g-2">
                                                <div class="col mb-3">
                                                        <label for="edit-region" class="form-label">Region <span class="fw-bolder text-danger" >*</span></label>
                                                        <select id="edit-region" class="select2 form-select form-select-lg" data-allow-clear="true">
                                                            @foreach($regions as $region)
                                                            <option value="{{ $region->RegionCode }}">{{ $region->MmName }} ({{ $region->PostalCode }})</option>
                                                            @endforeach
                                                        </select>
                                                </div>
                                                
                                        </div>
                                        <div class="row g-2">
                                                <div class="col mb-3">
                                                        <label for="edit-branch" class="form-label">Branch <span class="fw-bolder text-danger" >*</span></label>
                                                        <select id="edit-branch" class="select2 form-select form-select-lg" data-allow-clear="true">
                                                        
                                                        </select>
                                                </div>
                                                
                                        </div>
                                        <div class="row g-2">
                                            <div class="col mb-3">
                                                        <label for="edit-township-code" class="form-label">Township Code <span class="fw-bolder text-danger" >*</span></label>
                                                        <input type="text" id="edit-township-code" class="form-control" placeholder="00">
                                                </div>
                                                <div class="col mb-3">
                                                        <label for="edit-region-code" class="form-label">Region Code <span class="fw-bolder text-danger" >*</span></label>
                                                        <input type="text" id="edit-region-code" class="form-control" disabled>
                                                </div>
                                                <div class="col mb-3">
                                                        <label for="edit-postal-code" class="form-label">Postal Code </label>
                                                        <input type="text" id="edit-postal-code" class="form-control" disabled>
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

    <!-- Delete Modal -->
    <div class="modal modal-top fade" id="DeleteTownship" tabindex="-1">
        <div class="modal-dialog">
            <form class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title" id="modalTopTitle">Delete Township</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                Are you sure delete this item <strong id="branch-label-name">XXX</strong>?
                            </div>
                        </div>
                       
                       
                </div>

                
                <div class="modal-footer">
                        <input type="hidden" id="delete-id" class="form-control">
                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger btn-delete">Delete</button>
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

    <!-- Main JS -->
    <script src="{{ asset('backend/js/main.js') }}"></script>
  

    <!-- Page JS -->
    <script src="{{ asset('backend/js/forms-selects.js') }}"></script>
        <script type="text/javascript">
        $(document).ready(function(){
                var url              = $("#url").val();
                var json_townships   = $("#json-townships").val();

                var townships        = json_townships;
                var token            = $("#token").val();
                region_code = $("#new-region :selected").val();
                $("#new-region-code").val(region_code);

                var fetched_data = function(param){
                        $("#fetched-data").empty();
                        json_req = townships+'/'+param;
                        $.ajax({
                                url: json_req,
                                type: 'GET',
                                data: {},
                                success: function(data){
                                        if(data.total > 0){
                                                $.each(data.data, function (i, item) {
                                                        $("#fetched-data").append('<tr>'
                                                               +'<td><code class="h5 text-secondary">'+item.PostalCode+'</code></td>'
                                                        +'<td><span class="fw-semibold '+(item.Active == 1? "text-secondary":"text-danger" )+'">'+item.TownshipNameEn+'<br>'+item.TownshipNameMm+'</span></td>'
                                                        +'<td><span class="text-secondary">'+item.RegionEn+'<br>'+item.RegionMm+'</span></td>'                                                        
                                                       +'<td>'+(item.Active == 1? '<span class="badge badge-center rounded-pill bg-success"><i class="bx bx-check"></i></span>':'<span class="badge badge-center rounded-pill bg-danger"><i class="bx bx-x"></i></span>')+'</td>'
                                                        +'<td>'
                                                            +'<div class="btn-group">'
                                                                +'<button type="button" class="btn btn-icon btn-sm btn-outline-secondary rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false" cursorshover="true"><i class="bx bx-dots-vertical-rounded" cursorshover="true"></i></button>'
                                                                +'<ul class="dropdown-menu dropdown-menu-end" style="">'
                                                                    +'<li ><a class="dropdown-item text-success  load-id" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#ViewTownship" cursorshover="true" title= '+item.Id+'><span class="tf-icons bx bx-search" cursorshover="true"></span> Quick View</a></li>'
                                                                    +'<li><a class="dropdown-item text-primary  load-id" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#EditTownship" cursorshover="true" title= '+item.Id+'><span class="tf-icons bx bx-pencil" cursorshover="true"></span> Edit Item</a></li>'
                                                                    +'<li><a class="dropdown-item text-danger  load-id" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#DeleteTownship" cursorshover="true" title= '+item.Id+'><span class="tf-icons bx bx-trash" cursorshover="true"></span> Delete Item</a></li>'
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
                                                $("#links").append('<button type="button" class="btn btn-primary btn-sm pagination-btn me-1 mb-1 '+(data.current_page == value.label ? 'disabled':(value.url == null ? 'disabled':''))+'" cursorshover="true" value="'+value.url+'">'+value.label+'</button>');
                                                });

                                                $(".loading").addClass('hide');
                                                $(".results").removeClass('hide');
                                        }else{
                                                $(".empty-data").removeClass('hide');
                                        }
                                }
                        });
                };

                var fetched_related_branches = function(region_code){
                    $('#new-branch').empty();
                    $('#edit-branch').empty();
                    $.ajax({
                            url: url+'/json/fetched-related-branches',
                            type: 'POST',
                            data: {
                                    'region_code' : region_code,
                                    '_token'                                :token
                            },
                            success: function(data){
                                 $('#new-branch').empty(); 
                            
                                $.each(data, function (i, item) {
                                    $('#new-branch').append('<option value="'+item['Id']+'">'+item['BranchNameEn']+' ('+item['BranchNameMm']+')</option>' );
                                    $('#edit-branch').append('<option value="'+item['Id']+'">'+item['BranchNameEn']+' ('+item['BranchNameMm']+')</option>' );
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
                                                               +'<td><code class="h5 text-secondary">'+item.PostalCode+'</code></td>'
                                                        +'<td><span class="fw-semibold '+(item.Active == 1? "text-secondary":"text-danger" )+'">'+item.TownshipNameEn+'<br>'+item.TownshipNameMm+'</span></td>'
                                                        +'<td><span class="text-secondary">'+item.RegionEn+'<br>'+item.RegionMm+'</span></td>'                                                        
                                                       +'<td>'+(item.Active == 1? '<span class="badge badge-center rounded-pill bg-success"><i class="bx bx-check"></i></span>':'<span class="badge badge-center rounded-pill bg-danger"><i class="bx bx-x"></i></span>')+'</td>'
                                                        +'<td>'
                                                            +'<div class="btn-group">'
                                                                +'<button type="button" class="btn btn-icon btn-sm btn-outline-secondary rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false" cursorshover="true"><i class="bx bx-dots-vertical-rounded" cursorshover="true"></i></button>'
                                                                +'<ul class="dropdown-menu dropdown-menu-end" style="">'
                                                                    +'<li ><a class="dropdown-item text-success  load-id" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#ViewTownship" cursorshover="true" title= '+item.Id+'><span class="tf-icons bx bx-search" cursorshover="true"></span> Quick View</a></li>'
                                                                    +'<li><a class="dropdown-item text-primary  load-id" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#EditTownship" cursorshover="true" title= '+item.Id+'><span class="tf-icons bx bx-pencil" cursorshover="true"></span> Edit Item</a></li>'
                                                                    +'<li><a class="dropdown-item text-danger  load-id" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#DeleteTownship" cursorshover="true" title= '+item.Id+'><span class="tf-icons bx bx-trash" cursorshover="true"></span> Delete Item</a></li>'
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
                
                $("#new-township-code").keyup(function(){
                    reg_code = $("#edit-region :selected").val();
                         township = $("#new-township-code").val();
                        raw =  $("#new-region :selected").text();
                          region =  raw.substr(raw.length - 3);
                         region = region.substring(0, region.length - 1);

                        $("#new-postal-code").val(region+township);
                        $("#new-region-code").val(reg_code);
                });

                $('#new-region,#edit-region').on("change",function search(e) {
                    reg_code = $(this).val();
                     township = $("#new-township-code").val();
                        raw =  $("#new-region :selected").text();
                          region =  raw.substr(raw.length - 3);
                         region = region.substring(0, region.length - 1);

                        $("#new-postal-code").val(region+township);
                        $("#new-region-code").val(reg_code);
                        fetched_related_branches(reg_code);
                    //callback region onchange
                });

                 $("#edit-township-code").keyup(function(){
                        reg_code = $("#edit-region :selected").val();
                         township = $("#edit-township-code").val();
                        raw =  $("#edit-region :selected").text();
                          region =  raw.substr(raw.length - 3);
                         region = region.substring(0, region.length - 1);

                        $("#edit-postal-code").val(region+township);
                        $("#edit-region-code").val(reg_code);
                         fetched_related_branches(reg_code);
                });
            
            $("#terms").keyup(function(){
               $(".loading").removeClass('hide');

                term = $(this).val();
                

                $.ajax({
                    url: townships+'?search='+term,
                    type: 'GET',
                    data: {},
                    success: function(data){
                        if(data.total > 0){
                                $("#fetched-data").empty();
                                $.each(data.data, function (i, item) {
                                                        $("#fetched-data").append('<tr>'
                                                               +'<td><code class="h5 text-secondary">'+item.PostalCode+'</code></td>'
                                                        +'<td><span class="fw-semibold '+(item.Active == 1? "text-secondary":"text-danger" )+'">'+item.TownshipNameEn+'<br>'+item.TownshipNameMm+'</span></td>'
                                                        +'<td><span class="text-secondary">'+item.RegionEn+'<br>'+item.RegionMm+'</span></td>'                                                        
                                                       +'<td>'+(item.Active == 1? '<span class="badge badge-center rounded-pill bg-success"><i class="bx bx-check"></i></span>':'<span class="badge badge-center rounded-pill bg-danger"><i class="bx bx-x"></i></span>')+'</td>'
                                                        +'<td>'
                                                            +'<div class="btn-group">'
                                                                +'<button type="button" class="btn btn-icon btn-sm btn-outline-secondary rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false" cursorshover="true"><i class="bx bx-dots-vertical-rounded" cursorshover="true"></i></button>'
                                                                +'<ul class="dropdown-menu dropdown-menu-end" style="">'
                                                                    +'<li ><a class="dropdown-item text-success  load-id" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#ViewTownship" cursorshover="true" title= '+item.Id+'><span class="tf-icons bx bx-search" cursorshover="true"></span> Quick View</a></li>'
                                                                    +'<li><a class="dropdown-item text-primary  load-id" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#EditTownship" cursorshover="true" title= '+item.Id+'><span class="tf-icons bx bx-pencil" cursorshover="true"></span> Edit Item</a></li>'
                                                                    +'<li><a class="dropdown-item text-danger  load-id" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#DeleteTownship" cursorshover="true" title= '+item.Id+'><span class="tf-icons bx bx-trash" cursorshover="true"></span> Delete Item</a></li>'
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
                                        $("#links").append('<button type="button" class="btn btn-primary pagination-btn me-1 mb-1 '+(data.current_page == value.label ? 'disabled':(value.url == null ? 'disabled':''))+'" cursorshover="true" value="'+value.url+'">'+value.label+'</button>');
                                });
                                $(".loading").addClass('hide');
                                $(".results").removeClass('hide');
                                $(".empty-data").addClass('hide');
                        }else{
                                $(".loading").addClass('hide');
                                $(".empty-data").removeClass('hide');
                        }
                    }
                });
            });

            $('#create-region').on("change",function search(e) {
                var region = $(this).val();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                           
                $.ajax({
                    type: 'post',
                    url: url+'/json/fetched-townships',
                    dataType:'json',
                    data: {
                        'region' :region,
                        '_token':token
                    },
                    success: function(data) {
                        $('#from-townships').empty(); 
                        $.each(data, function (i, item) {
                            $('#from-townships').append('<option value="'+item['PostalCode']+'">'+item['Name']+'('+item['PostalCode']+')</option>' );
                        });
                    },
                });       
            });

            // $('#new-region').on("change",function search(e) {
            //     var region = $(this).val();

            //     if($("#new-township-code").val().length > 0){
            //            var str =  $("#new-township-code").str();
            //            var township = str.substring(0, str.length - 1);
            //     }else{
            //              var township =  '00';
            //     }


            //    $("#new-postal-code").val(region+township);
            // });

            $('#edit-region').on("change",function search(e) {
                 reg_code = $(this).val();
                     township = $("#edit-township-code").val();
                        raw =  $("#edit-region :selected").text();
                          region =  raw.substr(raw.length - 3);
                         region = region.substring(0, region.length - 1);

                        $("#edit-postal-code").val(region+township);
                        $("#edit-region-code").val(reg_code);
            });

            $('body').delegate(".load-id","click",function () {
                id = $(this).attr('title');
                $("#item").val(id);

                $.ajax({
                    url: url+'/json/townships/view/'+id,
                    type: 'GET',
                    data: {},
                    success: function(data){
                        $(".lbl-township-name-mm").text(data.TownshipNameEn);
                        $(".lbl-township-name-en").text(data.TownshipNameMm);
                        $(".lbl-region-en").text(data.RegionEn);
                        $(".lbl-region-mm").text(data.RegionMm);
                        $(".lbl-postal-code").text(data.PostalCode);
                        $(".lbl-region-code").text(data.RegionCode);
                        $(".lbl-handle-branch").text(data.HandleBranch);

                         $("#edit-name-en").val(data.TownshipNameEn);
                        $("#edit-name-mm").val(data.TownshipNameMm);
                        $("#edit-region").val(data.RegionCode).trigger('change');
                        $("#edit-postal-code").val(data.PostalCode);
                        $("#edit-region-code").val(data.RegionCode);
                        $("#edit-township-code").val( data.PostalCode.substring(2, data.PostalCode.substr(0, 2) - 1));
                       $("#edit-branch").val();


                        // $("#branch-label-name").text(data.EnName);
                        // $("#edit-id").val(data.Id);
                        // $("#edit-mmname").val(data.MmName);
                        // $("#edit-enname").val(data.EnName);
                        // $("#edit-region").val(data.RegionCode).change();
                        // $("#edit-township-code").val(data.TownshipCode);
                        // $("#edit-postal-code").val(data.PostalCode);
                        // $("#edit-shortcode").val(data.ShortCode);
                        // $("#edit-branch").val(data.Branch).change();
                        // $("#edit-region-type").val(data.RegionType);
                        // if(data.Active == 1){
                        //         $('#edit-active').attr('checked', true);
                        // }else{
                        //         $('#edit-active').attr('checked', false);
                        // }
                    }
                });

                 $(".btn-view").prop("href", url+"/admin/townships/"+id);
            });

             $('body').delegate(".btn-new","click",function () {
                var region = $("#edit-region").val();
                var township =  '00';

               $("#new-postal-code").val(region+township);
            });

             $('body').delegate(".btn-create","click",function () {
                en_name                                                  = $("#new-name-en").val();
                mm_name                                                  = $("#new-name-mm").val();
                region                                                          = $("#new-region").val();
                postal_code                                             = $("#new-postal-code").val();
                region_code                                              = $("#new-region").val();
                branch                                                          = $("#new-branch").val();
                active = 1;

                $.ajax({
                        url: url+'/admin/townships/store',
                        type: 'POST',
                        data: {
                                'en_name'                  :en_name,
                                'mm_name'                :mm_name,
                                'postal_code'             :postal_code,
                                'handle_branch'         :branch,
                                'region_code'            :region_code,
                                'Active'                      :active,
                                '_token'                     :token
                        },
                        success: function(data){
                                if(data.success == 1){
                            $('#AddNewTownship').modal('hide');
                            $("#fetched-data").empty();

                            Swal.fire({
                                title:"Good job!",
                                text:data.message,
                                icon:"success",
                                customClass:{confirmButton:"btn btn-info"},
                                buttonsStyling:!1
                            });

                            fetched_data(); 
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

                            fetched_data(); 
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

                            fetched_data(); 
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

           



           

            fetched_data('all');   
            fetched_related_branches(region_code);
        });
        </script>
</body>
</html>

