<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="" data-template="vertical-menu-template">
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

         <title>Royalx Core | 3PL Stations</title>
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
                                                                        <span class="text-muted fw-light"><i class="tf-icon bx bx-chevrons-right" cursorshover="true"></i> 3PL Stations</span> 
                                                                </h5>
                                                        </div>
                                                        <div class="col-md-8">
                                                                <div class="pull-right">
                                                                        <button type="button" class="btn btn-secondary btn-new  v-top" data-bs-toggle="modal" data-bs-target="#NewStation" cursorshover="true">
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
                                                                                        <th class="text-muted unset">Station Name EN/MM</th>
                                                                                        <th class="text-muted unset">Station Region</th>
                                                                                        <th class="text-muted unset">Service Type</th>
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

        <!-- New Modal -->
        <div class="modal modal-top fade" id="NewStation" tabindex="-1">
            <div class="modal-dialog">
                <form class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTopTitle">Add 3PL Station</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="station-name-en" class="form-label">Station Name En <span class="fw-bolder text-danger" >*</span></label>
                                <input type="text" id="station-name-en" class="form-control" placeholder="Aung Mingalar Bus Station" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="station-name-mm" class="form-label">Station Name Mm <span class="fw-bolder text-danger" >*</span></label>
                                <input type="text" id="station-name-mm" class="form-control" placeholder="အောင်မင်္ဂလာအဝေးပြေးကားဝင်း" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="region-code" class="form-label">Station Region Code <span class="fw-bolder text-danger" >*</span></label>
                                <select id="region-code" class="select2 form-select form-select-lg" data-allow-clear="true">
                                @foreach($regions as $region)
                                <option value="{{ $region->RegionCode }}">{{ $region->RegionCode }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="service-type" class="form-label">Service Type <span class="fw-bolder text-danger" >*</span></label>
                                <select id="service-type" class="select2 form-select form-select-lg" data-allow-clear="true">
                                    @foreach($types as $type)
                                    <option value="{{ $type->ServiceTypeEn }}">{{ $type->ServiceTypeEn }}</option>
                                    @endforeach
                                </select>
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" id="edit-id" class="form-control">
                        <input type="hidden" id="edit-region-type" class="form-control">
                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-secondary btn-save">Save</button>
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
                                                         +'<td><span class="text-secondary">'+item.StationNameEn+'<br><span class="fw-light ">'+item.StationNameMm+'</span></span></td>'
                                                         +'<td><span class="fw-semibold">'+item.StationRegionCode+'</span></td>' 
                                                        +'<td><span class="text-secondary">'+item.ServiceType+'</span></td>' 
                                                        +'<td>'
                                                            +'<div class="btn-group">'
                                                                +'<button type="button" class="btn btn-icon btn-sm btn-outline-secondary rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false" cursorshover="true"><i class="bx bx-dots-vertical-rounded" cursorshover="true"></i></button>'
                                                                +'<ul class="dropdown-menu dropdown-menu-end" style="">'
                                                                    +'<li ><a class="dropdown-item text-success" href="'+url+'/admin/3pl-services/stations/'+item.Id+'" cursorshover="true"><span class="tf-icons bx bx-search" cursorshover="true"></span> View Item</a></li>'
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
                                                         +'<td><span class="text-secondary">'+item.StationNameEn+'<br><span class="fw-light ">'+item.StationNameMm+'</span></span></td>'
                                                         +'<td><span class="fw-semibold">'+item.StationRegionCode+'</span></td>' 
                                                        +'<td><span class="text-secondary">'+item.ServiceType+'</span></td>' 
                                                        +'<td>'
                                                            +'<div class="btn-group">'
                                                                +'<button type="button" class="btn btn-icon btn-sm btn-outline-secondary rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false" cursorshover="true"><i class="bx bx-dots-vertical-rounded" cursorshover="true"></i></button>'
                                                                +'<ul class="dropdown-menu dropdown-menu-end" style="">'
                                                                    +'<li ><a class="dropdown-item text-success  load-id" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#ViewTownship" cursorshover="true" title= '+item.Id+'><span class="tf-icons bx bx-search" cursorshover="true"></span> View Item</a></li>'
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
                
                $("#new-township-code").keyup(function(){
                    reg_code = $("#edit-region :selected").val();
                         township = $("#new-township-code").val();
                        raw =  $("#new-region :selected").text();
                          region =  raw.substr(raw.length - 3);
                         region = region.substring(0, region.length - 1);

                        $("#new-postal-code").val(region+township);
                        $("#new-region-code").val(reg_code);
                });

                
                $('.btn-save').on("click",function search(e) {
                        var station_name_en = $("#station-name-en").val();
                        var station_name_mm = $("#station-name-mm").val();
                        var region_code = $("#region_code").val();
                        var service_type = $("#service-type").val();
                       
                        if($("#active").prop('checked') == true){
                            active = 1;
                        }else{ 
                            active = 0;
                        }

                        $.ajax({
                                url: url+'/admin/3pl-services/saved-station',
                                type: 'POST',
                                data: {
                                        station_name_en:station_name_en,
                                        station_name_mm:station_name_mm,
                                        region_code:region_code,
                                        service_type:service_type,
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
            
            fetched_data();   
        });
        </script>
</body>
</html>

