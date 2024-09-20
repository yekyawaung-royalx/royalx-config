<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="" data-template="vertical-menu-template">
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

         <title>Royalx Core | Quaters</title>
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
                                                                        <span class="text-muted fw-light"><i class="tf-icon bx bx-chevrons-right" cursorshover="true"></i> Quaters </span> 
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
                                                                <div class="spinner-grow text-primary" role="status">
                                                                        <span class="visually-hidden">Loading...</span>
                                                                </div>
                                                                <div class="spinner-grow text-primary" role="status">
                                                                        <span class="visually-hidden">Loading...</span>
                                                                </div>
                                                                <div class="spinner-grow text-primary" role="status">
                                                                        <span class="visually-hidden">Loading...</span>
                                                                </div>
                                                        </div>
                                                        <div class="card-body results hide">
                                                                <div class="table-responsive text-nowrap">
                                                                        <table class="table">
                                                                        <thead>
                                                                                <tr>
                                                                                        <th class="text-muted unset">PostalCode</th>
                                                                                        <th class="text-muted unset">QuaterName</th>
                                                                                        <th class="text-muted unset">TownshipName</th>
                                                                                        <th class="text-muted unset">RegionName</th>
                                                                                        <th class="text-muted unset">HandledBranch</th>
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
                                        <input type="hidden" id="json-quaters" value="{{ url('json/quaters') }}">
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

        <!-- Add Modal -->
        <div class="modal modal-top fade" id="AddNewTownship" tabindex="-1">
                <div class="modal-dialog">
                        <form class="modal-content">
                                <div class="modal-header">
                                        <h5 class="modal-title" id="modalTopTitle">Add New Township</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        <div class="row g-2">
                                                <div class="col mb-3">
                                                        <label for="new-region" class="form-label text-muted">Region Name</label>
                                                        <select id="new-region" class="select2 form-select form-select-lg" data-allow-clear="true">
                                                            @foreach($regions as $region)
                                                            <option value="{{ $region->RegionCode }}">{{ $region->MmName }} ({{ $region->PostalCode }})</option>
                                                            @endforeach
                                                        </select>
                                                </div>
                                                <div class="col mb-3">
                                                        <label for="new-townships" class="form-label text-muted">Township Name</label>
                                                        <select id="new-townships" class="select2 form-select form-select-lg" data-allow-clear="true">
                                                          
                                                        </select>
                                                </div>
                                        </div>
                                        <div class="row">
                                                <div class="col mb-3">
                                                        <label for="new-mmname" class="form-label text-muted">EN Name</label>
                                                        <input type="text" id="new-mmname" class="form-control" placeholder="Enter Name">
                                                </div>
                                        </div>
                                        <div class="row">
                                                <div class="col mb-3">
                                                        <label for="new-enname" class="form-label text-muted">MM Name</label>
                                                        <input type="text" id="new-enname" class="form-control" placeholder="Enter Name">
                                                </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col mb-3">
                                                <label for="new-postal-code" class="form-label text-muted">PostalCode</label>
                                                <input type="text" id="new-postal-code" class="form-control" placeholder="00">
                                            </div>
                                        <div class="col mb-3">
                                                <label for="new-branch" class="form-label text-muted">Handle Branch</label>
                                                <select id="new-branch" class="select2 form-select form-select-lg" data-allow-clear="true">
                                            
                                                </select>
                                        </div>
                                        </div>
                                        <div class="row g-2">
                                        <div class="col mb-3">
                                                <span class="label-block mb-0 text-muted">Opened</span>
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
                                                </label>
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
        <div class="modal modal-top fade" id="QuickViewTownship" tabindex="-1">
                <div class="modal-dialog">
                        <form class="modal-content">
                                <div class="modal-header">
                                        <h5 class="modal-title" id="modalTopTitle">Quick View Township</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        
                                </div>
                                <div class="modal-footer">
                                        <input type="hidden" id="edit-id" class="form-control">
                                        <input type="hidden" id="edit-region-type" class="form-control">
                                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">View Details</button>
                                </div>
                        </form>
                </div>
        </div>    

        <!-- Edit Modal -->
        <div class="modal modal-top fade" id="EditTownship" tabindex="-1">
                <div class="modal-dialog">
                        <form class="modal-content">
                                <div class="modal-header">
                                        <h5 class="modal-title" id="modalTopTitle">Edit Quater</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        <div class="row g-2">
                                                <div class="col mb-3">
                                                        <label for="edit-region" class="form-label text-muted">Region Name</label>
                                                        <input type="text" id="edit-region" class="form-control" disabled>
                                                </div>
                                                <div class="col mb-3">
                                                        <label for="edit-township" class="form-label text-muted">Township Name</label>
                                                        <input type="text" id="edit-township" class="form-control" disabled>
                                                </div>
                                        </div>
                                        <div class="row">
                                                <div class="col mb-3">
                                                        <label for="edit-mmname" class="form-label text-muted">EN Name</label>
                                                        <input type="text" id="edit-mmname" class="form-control" placeholder="Enter Name">
                                                </div>
                                        </div>
                                        <div class="row">
                                                <div class="col mb-3">
                                                        <label for="edit-enname" class="form-label text-muted">MM Name</label>
                                                        <input type="text" id="edit-enname" class="form-control" placeholder="Enter Name">
                                                </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col mb-3">
                                                <label for="edit-postal-code" class="form-label text-muted">PostalCode</label>
                                                <input type="text" id="edit-postal-code" class="form-control" disabled>
                                            </div>
                                        <div class="col mb-3">
                                                <label for="edit-branch" class="form-label text-muted">Handle Branch</label>
                                                <select id="edit-branch" class="select2 form-select form-select-lg" data-allow-clear="true">
                                            
                                                </select>
                                        </div>
                                        </div>
                                        <div class="row g-2">
                                        <div class="col mb-3">
                                                <span class="label-block mb-0 text-muted">Opened</span>
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
                var json_quaters   = $("#json-quaters").val();

                var quaters        = json_quaters;
                var token            = $("#token").val();

                var fetched_townships = function(){
                    region = $('#new-region').val();

                    $.ajax({
                        type: 'post',
                        url: url+'/json/fetched-townships',
                        dataType:'json',
                        data: {
                            'region' :region,
                            '_token':token
                        },
                        success: function(data) {
                            $('#new-townships').empty(); 
                            $.each(data, function (i, item) {
                                $('#new-townships').append('<option value="'+item['Id']+'">'+item['TownshipNameMm']+'('+item['PostalCode']+')</option>' );
                            });

                            $("#from-township-total").text($('#new-townships option').length);

                            region_code = $('#new-region :selected').val();
                            fetched_branches(region_code);
                        },
                    }); 
                };

                 $('#new-region').on("change",function search(e) {
                     fetched_townships();

                });
                fetched_townships();


                var fetched_data = function(param){
                        $("#fetched-data").empty();
                        json_req = quaters+'/'+param;
                        $.ajax({
                                url: json_req,
                                type: 'GET',
                                data: {},
                                success: function(data){
                                        if(data.total > 0){
                                                $.each(data.data, function (i, item) {
                                                    $("#fetched-data").append('<tr>'
                                                            +'<td><code class="h5 '+(item.Active == 1? 'text-secondary':'text-danger')+' ">'+item.PostalCode+'</code></td>'
                                                            +'<td><span class="text-secondary fw-semibold">'+item.QuaterNameEn+'<br>'+item.QuaterNameMm+'</span></td>'
                                                            +'<td><span class="text-secondary">'+item.TownshipNameEn+'<br>'+item.TownshipNameMm+'</span></td>'
                                                            +'<td><span class="text-secondary">'+item.RegionEn+'<br>'+item.RegionMm+'</span></td>'                                                        
                                                            +'<td><span class="text-secondary">'+item.HandleBranch+'</span></td>'
                                                            +'<td>'
                                                            	+'<div class="btn-group">'
                        							            +'<button type="button" class="btn btn-icon btn-sm btn-outline-secondary rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false" cursorshover="true"><i class="bx bx-dots-vertical-rounded" cursorshover="true"></i></button>'
                        							            +'<ul class="dropdown-menu dropdown-menu-end" style="">'
                        							              	+'<li ><a class="dropdown-item text-success  load-id" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#QuickViewTownship" cursorshover="true" title= '+item.Id+'><span class="tf-icons bx bx-search" cursorshover="true"></span> Quick View</a></li>'
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


                var fetched_branches = function(param){
                        json_req = url+'/json/fetched-branches';
                        $.ajax({
                                url: json_req,
                                type: 'POST',
                                data: {
                                        'region_code':param,
                                        '_token':token
                                },
                                success: function(data){
                                        $('#new-branch').empty(); 
                                        $('#edit-branch').empty(); 
                                        $.each(data, function (i, item) {
                                            $('#new-branch').append('<option value="'+item['Id']+'">'+item['EnName']+'('+item['MmName']+')</option>' );
                                            $('#edit-branch').append('<option value="'+item['Id']+'">'+item['EnName']+'('+item['MmName']+')</option>' );
                                        });
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
                                                            +'<td><code class="h5 '+(item.Active == 1? 'text-secondary':'text-danger')+' ">'+item.PostalCode+'</code></td>'
                                                            +'<td><span class="text-secondary fw-semibold">'+item.QuaterNameEn+'<br>'+item.QuaterNameMm+'</span></td>'
                                                            +'<td><span class="text-secondary">'+item.TownshipNameEn+'<br>'+item.TownshipNameMm+'</span></td>'
                                                            +'<td><span class="text-secondary">'+item.RegionEn+'<br>'+item.RegionMm+'</span></td>'                                                        
                                                            +'<td><span class="text-secondary">'+item.HandleBranch+'</span></td>'
                                                            +'<td>'
                                                                +'<div class="btn-group">'
                                                                +'<button type="button" class="btn btn-icon btn-sm btn-outline-secondary rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false" cursorshover="true"><i class="bx bx-dots-vertical-rounded" cursorshover="true"></i></button>'
                                                                +'<ul class="dropdown-menu dropdown-menu-end" style="">'
                                                                    +'<li ><a class="dropdown-item text-success  load-id" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#QuickViewTownship" cursorshover="true" title= '+item.Id+'><span class="tf-icons bx bx-search" cursorshover="true"></span> Quick View</a></li>'
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
                                        +'<td class="text-muted">'+item.Id+'</td>'
                                        +'<td><span class="text-danger">'+item.MmName+'<br>'+item.EnName+'</span></td>'
                                        +'<td>'+item.Region+'</td>'
                                        +'<td><code class="h6 text-primary">'+item.TownshipCode+'</code></td>'
                                        +'<td><code class="h6 text-danger">'+item.PostalCode+'</code></td>'
                                        +'<td>'+item.Branch+'</td>'
                                        +'<td>'+(item.Active == 1? '<span class="tf-icons bx bx-check text-success" cursorshover="true"></span>':'<span class="tf-icons bx bx-x text-danger" cursorshover="true"></span>')+'</td>'
                                        +'<td>'
                                                +'<button type="button" class="btn btn-icon btn-success btn-sm me-1" data-bs-toggle="modal" data-bs-target="#EditTownship" cursorshover="true">'
                                                +'<span class="tf-icons bx bx-search" cursorshover="true"></span>'
                                            +'</button>'
                                                +'<button type="button" class="btn btn-icon btn-primary btn-sm me-1" data-bs-toggle="modal" data-bs-target="#EditTownship" cursorshover="true">'
                                                +'<span class="tf-icons bx bx-pencil" cursorshover="true"></span>'
                                            +'</button>'
                                                +'<button type="button" class="btn btn-icon btn-danger btn-sm" cursorshover="true">'
                                                    +'<span class="tf-icons bx bx-trash" cursorshover="true"></span>'
                                                +'</button>'
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
                                        $("#links").append('<button type="button" class="btn btn-danger pagination-btn me-1 mb-1 '+(data.current_page == value.label ? 'disabled':(value.url == null ? 'disabled':''))+'" cursorshover="true" value="'+value.url+'">'+value.label+'</button>');
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



            $('body').delegate(".load-id","click",function () {
                id = $(this).attr('title');

                $("#item").val(id);

                $.ajax({
                    url: url+'/admin/quaters/'+id,
                    type: 'GET',
                    data: {},
                    success: function(data){
                        $("#branch-label-name").text(data.EnName);
                        $("#edit-id").val(data.Id);
                        $("#edit-mmname").val(data.QuarterMm);
                        $("#edit-enname").val(data.QuaterEn);
                        $("#edit-region").val(data.RegionMm);
                        $("#edit-township").val(data.TownshipNameMm);
                        $("#edit-postal-code").val(data.PostalCode);
                        $("#edit-branch").val(data.Branch).change();
                        $("#edit-region-type").val(data.RegionType);
                        region_code = data.PostalCode.substring(0, 2);

                        //alert(region_code);
                        fetched_branches(region_code);

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
                mmname                                                  = $("#new-mmname").val();
                enname                                                  = $("#new-enname").val();
                region                                                          = $("#new-region").val();
                township_code                                   = $("#new-township-code").val();
                postal_code                                             = $("#new-postal-code").val();
                short_code                                              = $("#new-short-code").val();
                branch                                                          = $("#new-branch").val();
                region_type                                             = $("#new-region-type").val();
                active = 1;

                $.ajax({
                        url: url+'/admin/townships/store',
                        type: 'POST',
                        data: {
                                'MmName'                        :mmname,
                                'EnName'                                :enname,
                                'RegionCode'            :region,
                                'TownshipCode'          :township_code,
                                'ShortCode'                     :short_code,
                                'PostalCode'                    :postal_code,
                                'HandleBranch'                                :branch,
                                'RegionType'            :region_type,
                                'Active'                                        :active,
                                '_token'                                :token
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
        });
        </script>
</body>
</html>

