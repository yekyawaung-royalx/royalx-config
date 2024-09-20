<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="" data-template="vertical-menu-template">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Royalx Core | InnovixHR Data</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('backend/images/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('backend/css/boxicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/css/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/css/flag-icons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/core.css') }}"  />
    <link rel="stylesheet" href="{{ asset('backend/css/theme-default.css') }}"  />
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
                                   <span class="text-muted fw-light"><i class="tf-icon bx bx-chevrons-right" cursorshover="true"></i> InnovixHR Data </span> 
                                </h5>
                            </div>
                            <div class="col-md-8">
                                <div class="pull-right">
                                    <button type="button" class="btn btn-secondary  v-top" data-bs-toggle="modal" data-bs-target="#SyncModal" cursorshover="true">
                                        <span class="tf-icons bx bx-download" cursorshover="true"></span> &nbsp;Download Data
                                    </button>
                                    <input type="text" class="form-control form-inline border-secondary" id="terms" placeholder="ရှာရန်" aria-describedby="defaultFormControlHelp">
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
                                <h6>Please wait patiently</h6>
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
                                            <th class="text-muted unset">CreatedAt</th>
                                            <th class="text-muted unset">EmployeeID</th>
                                            <th class="text-muted unset">EmployeeName</th>
                                            <th class="text-muted unset">Position</th>
                                            <th class="text-muted unset">LastDayOfWork</th>
                                            <th class="text-muted unset">Checked</th>
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
                    <input type="hidden" id="json-employees" value="{{ url('json/innovix-hr') }}">
                    <input type="hidden" id="json-townships" value="{{ url('json/townships/all') }}">
                    <input type="hidden" id="token" value="{{ csrf_token() }}">
                    <input type="hidden" type="" id="item" value="">

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

    <!-- Download Data Modal -->
    <div class="modal modal-top modal-lg fade" id="SyncModal" tabindex="-1">
	    <div class="modal-dialog">
	        <form class="modal-content">
		        <div class="modal-header">
		            <h5 class="modal-title" id="modalTopTitle">Are you sure to download data from Innovix HR?</h5>
		            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		        </div>
		        <div class="modal-body">
		            Employee data download from Innovix HR data into InnovixData table.
		        </div>
		        <div class="modal-footer">
		        	<button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
		            <button type="button" class="btn btn-secondary btn-download">Download</button>
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
	        var url              		= $("#url").val();
	        var json_employees       	= $("#json-employees").val();
	        var token            		= $("#token").val();

	        var fetched_data = function(){
	            $("#fetched-data").empty();

		        $.ajax({
		            url: json_employees,
		            type: 'GET',
		            data: {},
		            success: function(data){
						$(".results").removeClass('hide');
		                if(data.total > 0){
				            $.each(data.data, function (i, item) {
				                $("#fetched-data").append('<tr>'
				                    +'<td><code class="h6 text-secondary fw-semibold">'+item.CreatedAt+'</code></td>'
				                    +'<td>'+item.EmployeeId+'</td>'
				                    +'<td>'+item.EmployeeName+'</td>'
				                    +'<td>'+item.Position+'</td>'
				                    +'<td>'+item.LastDayOfWork+'</td>'
				                    +'<td>'+(item.Checked == 1? '<span class="badge badge-center rounded-pill bg-success"><i class="bx bx-check"></i></span>':'<span class="badge badge-center rounded-pill bg-danger"><i class="bx bx-x"></i></span>')+'</td>'
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
				                    +'<td><code class="h6 text-secondary fw-semibold">'+item.CreatedAt+'</code></td>'
				                    +'<td>'+item.EmployeeId+'</td>'
				                    +'<td>'+item.EmployeeName+'</td>'
				                    +'<td>'+item.Position+'</td>'
				                    +'<td>'+item.LastDayOfWork+'</td>'
				                    +'<td>'+(item.Checked == 1? '<span class="badge badge-center rounded-pill bg-success"><i class="bx bx-check"></i></span>':'<span class="badge badge-center rounded-pill bg-danger"><i class="bx bx-x"></i></span>')+'</td>'
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

	            
	            $("#terms").keyup(function(){
	               	$(".loading").removeClass('hide');
		            term = $(this).val();
		            $("#fetched-data").empty();

		                if(term.length != 0){
			                $.ajax({
			                    url: url+'/search/innovix-hr/'+term,
			                    type: 'GET',
			                    data: {},
			                    success: function(data){
			                        if(data.total > 0){
				                        $.each(data.data, function (i, item) {
				                            $("#fetched-data").append('<tr>'
					                            +'<td><code class="h6 text-secondary fw-semibold">'+item.CreatedAt+'</code></td>'
					                            +'<td>'+item.EmployeeId+'</td>'
					                            +'<td>'+item.EmployeeName+'</td>'
					                            +'<td>'+item.Position+'</td>'
					                            +'<td>'+item.LastDayOfWork+'</td>'
					                            +'<td>'+(item.Checked == 1? '<span class="badge badge-center rounded-pill bg-success"><i class="bx bx-check"></i></span>':'<span class="badge badge-center rounded-pill bg-danger"><i class="bx bx-x"></i></span>')+'</td>'
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
				                        $(".results").removeClass('hide');
				                        $(".empty-data").removeClass('hide');
				                        $("#prev-btn").attr('disabled',true);
				                        $("#next-btn").attr('disabled',true);
				                    }
			                    }
			            });
			    }else{
			        fetched_data();   
			    }
	        });

	        $('body').delegate(".btn-download","click",function () {
		        $(".btn-download").attr('disabled',true);
		        $('#SyncModal').modal('hide');
		        $(".loading").removeClass('hide');
		        $(".results").addClass('hide');

		        $.ajax({
		            url: url+'/admin/synced/innovix-hr',
		            type: 'GET',
		            data: {},
		            success: function(data){
		                $("#success-message").text(data.message);
		                $("#successToast").toast("show");
		                if(data.success == 1){
		                    fetched_data();
		                                
		                    $(".btn-download").attr('disabled',false);
		                }
		                $(".loading").addClass('hide');
	                }
	            });
	        });     	

	        fetched_data();   
	    });
    </script>
</body>
</html>

