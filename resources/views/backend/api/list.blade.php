<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="" data-template="vertical-menu-template">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

      <title>Royalx Core | Regions</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />

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

    <link rel="stylesheet" href="{{ asset('backend/css/tagify.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/css/typeahead.css') }}" />
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
                            <div class="col-md-6">
                                <h5 class="py-2 mb-2">
                                    <a href="{{ url('admin/dashboard') }}" class="text-secondary fw-semibold">Dashboard </a> 
                                   <span class="text-muted fw-light"><i class="tf-icon bx bx-chevrons-right" cursorshover="true"></i> Regions </span> 
                                </h5>
                            </div>
                            <div class="col-md-6">
                                
                            </div>
                        </div>

                  	<div class="row">
                            	<div class="col-md-6">
		                        <div class="card mb-4">
		                            <div class="card-body">
		                            	<label class="form-label" for="basic-default-password12" cursorshover="true">API Endpoint</label>
<div class="input-group">
	 <span class="input-group-text bg-primary text-white" id="basic-addon14">POST</span>
          <input type="text" class="form-control" value="{{ url('') }}/api/v1/auth" id="basic-url1" aria-describedby="basic-addon14">
        </div>
		                            </div>
		                        </div>
		                </div>
		                <div class="col-md-6">
		                        <div class="card mb-4">
		                            <div class="card-body">
		                                
		                            </div>
		                        </div>
		                </div>
		        </div>
                    </div>
                
                    <input type="hidden" id="url" value="{{ url('') }}">
                    <input type="hidden" id="json-regions" value="{{ url('json/regions') }}">
                    <input type="hidden" id="token" value="{{ csrf_token() }}">

                    <!-- Footer -->
                    
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

    <!-- Main JS -->
    <script src="{{ asset('backend/js/main.js') }}"></script>
  

    <!-- Page JS -->
    <script src="{{ asset('backend/js/forms-selects.js') }}"></script>
    <script src="{{ asset('backend/js/forms-tagify.js') }}"></script>
    <script src="{{ asset('backend/js/forms-typeahead.js') }}"></script> 
    <script type="text/javascript">
        $(document).ready(function(){
            var url           = $("#url").val();
            var json_regions  = $("#json-regions").val();

            var regions      = json_regions;
            var token       = $("#token").val();


            var fetched_data = function(){
                $.ajax({
                    url: regions,
                    type: 'GET',
                    data: {},
                    success: function(data){
                        $.each(data.data, function (i, item) {
                            $("#fetched-data").append('<tr>'
                                +'<td><code class="h5 text-muted">'+item.PostalCode+'</code></td>'
                                +'<td class="text-secondary fw-semibold">'+item.MmName+'<br>'+item.EnName+'</td>'
                                +'<td><span class="badge bg-secondary">'+item.RegionCode+'</span></td>'
                                +'<td><span class="badge rounded-pill bg-secondary">'+item.TotalTownships+'</span></td>'
                                +'<td>'
                                    +'<button type="button" class="btn btn-icon btn-primary btn-sm me-1" cursorshover="true">'
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
                                $("#links").append('<button type="button" class="btn btn-primary btn-sm pagination-btn me-1 mb-1 '+(data.current_page == value.label ? 'disabled':(value.url == null ? 'disabled':''))+'" cursorshover="true" value="'+value.url+'">'+value.label+'</button>');
                        });
                    }
                });
            };

            $('body').delegate(".pagination-btn","click",function () {
                //clicked url json data
                $(".data-loading").show();
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
                                +'<td><code class="h5 text-muted">'+item.PostalCode+'</code></td>'
                                +'<td class="text-primary">'+item.MmName+'<br>'+item.EnName+'</td>'
                                +'<td><span class="badge bg-primary">'+item.RegionCode+'</span></td>'
                                +'<td><span class="badge rounded-pill bg-secondary">'+item.TotalTownships+'</span></td>'
                                +'<td>'
                                    +'<button type="button" class="btn btn-icon btn-primary btn-sm me-1" cursorshover="true">'
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
                    }
                });
            });

          
            fetched_data();   
        });
    </script>
</body>
</html>

