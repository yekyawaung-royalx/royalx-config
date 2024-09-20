<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="" data-template="vertical-menu-template">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Royalx Core | Package Categories</title>
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
    <link rel="stylesheet" href="{{ asset('backend/css/sweetalert2.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/css/toastr.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/css/animate.css') }}" />
    
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
                                   <span class="text-muted fw-light"><i class="tf-icon bx bx-chevrons-right" cursorshover="true"></i> Package Categories </span> 
                                </h5>
                            </div>
                            <div class="col-md-8">
                                <div class="pull-right">
                                    <button type="button" class="btn btn-secondary  v-top" data-bs-toggle="modal" data-bs-target="#AddNewPackage" cursorshover="true">
                                        <span class="tf-icons bx bx-plus" cursorshover="true"></span> Add New
                                    </button>
                                    <div class="btn-group  v-top">
                                                    <button type="button" class="btn btn-secondary btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false" cursorshover="true"><i class="bx bx-slider" cursorshover="true"></i></button>
                                                    <ul class="dropdown-menu dropdown-menu-end" style="">
                                                      <li><a class="dropdown-item filtered active" href="javascript:void(0);" title="all">All Types</a></li>
                                                      <li><a class="dropdown-item filtered" href="javascript:void(0);" title="outbound">Outbound Types</a></li>
                                                      <li><a class="dropdown-item filtered" href="javascript:void(0);" title="inbound">Inbound Types</a></li>
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
		                                    <th class="text-muted unset">EnName</th>
		                                    <th class="text-muted unset">MmName</th>
		                                    <th class="text-muted unset">TypeName</th>
		                                    <th class="text-muted unset">Shortcode</th>
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
	            	<input type="hidden" id="json-categories" value="{{ url('json/package-categories') }}">
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

    <!-- Slide from Top Modal -->
    <div class="modal modal-top fade" id="AddNewPackage" tabindex="-1">
            <div class="modal-dialog">
              <form class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalTopTitle">Add New Package Category</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col mb-3">
                      <label for="new-name-en" class="form-label">EN Name <span class="fw-bolder text-danger" >*</span></label>
                      <input type="text" id="new-name-en" class="form-control" placeholder="Enter EN Name">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col mb-3">
                      <label for="new-name-mm" class="form-label">MM Name <span class="fw-bolder text-danger" >*</span></label>
                      <input type="text" id="new-name-mm" class="form-control" placeholder="Enter MM Name">
                    </div>
                  </div>
                  <div class="row g-2">
                    <div class="col mb-3">
                      <label for="new-type" class="form-label">Type <span class="fw-bolder text-danger" >*</span></label>
                         <select id="new-type" class="select2 form-select form-select-lg" data-allow-clear="true">
                            <option value="outbound">outbound</option>
                            <option value="inbound">inbound</option>
                        </select> 
                    </div>
                    <div class="col mb-3">
                      <label for="new-shortcode" class="form-label">Shortcode (2 Chars) <span class="fw-bolder text-danger" >*</span></label>
                      <input type="text" id="new-shortcode" class="form-control">
                    </div>
                  </div>
                  <div class="row g-2">
                    <div class="col">
                      <label for="new-description" class="form-label">Description <span class="fw-bolder text-danger" >*</span></label>
                      <textarea type="text" id="new-description" rows="4" class="form-control"></textarea>
                      <div class="mt-1"><span class="fw-bolder text-danger" >*</span> is required fields.</div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-secondary btn-create denied">Save</button>
                </div>
              </form>
            </div>
          </div>
    
    <!-- Slide from Top Modal -->
    <div class="modal modal-top fade" id="EditPackage" tabindex="-1">
            <div class="modal-dialog">
              <form class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalTopTitle">Edit Package Category</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col mb-3">
                      <label for="edit-name-en" class="form-label">EN Name</label>
                      <input type="text" id="edit-name-en" class="form-control" placeholder="Enter Name">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col mb-3">
                      <label for="edit-name-mm" class="form-label">MM Name</label>
                      <input type="text" id="edit-name-mm" class="form-control" placeholder="Enter Name">
                    </div>
                  </div>
                  <div class="row g-2">
                    <div class="col mb-3">
                      <label for="edit-type" class="form-label">Type</label>
                       <select id="edit-type" class="select2 form-select form-select-lg" data-allow-clear="true">
                            <option value="outbound">outbound</option>
                            <option value="inbound">inbound</option>
                        </select> 
                    </div>
                    <div class="col mb-3">
                      <label for="edit-shortcode" class="form-label">Shortcode</label>
                      <input type="text" id="edit-shortcode" class="form-control">
                    </div>
                  </div>
                  <div class="row g-2">
                    <div class="col mb-3">
                      <label for="edit-description" class="form-label">Description</label>
                      <textarea type="text" id="edit-description" rows="4" class="form-control"></textarea>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-secondary btn-update">Update</button>
                </div>
              </form>
            </div>
          </div>

           <div class="modal modal-top fade" id="DeletePackage" tabindex="-1">
            <div class="modal-dialog">
              <form class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalTopTitle">Delete Package Category</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                            <div class="col mb-3">
                                Are you sure delete this item <strong id="delete-label">XXX</strong>?
                            </div>
                        </div>
                  </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-danger btn-delete">Delete</button>
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
          	var json_categories = $("#json-categories").val();

          	var cities    	= json_cities;
          	var categories    = json_categories;
          	var token       = $("#token").val();


          	var fetched_data = function(status){
                $("#fetched-data").empty();
                $.ajax({
                  	url: categories+'/'+status,
                  	type: 'GET',
                  	data: {},
                  	success: function(data){
                         if(data.total > 0){
                        	$.each(data.data, function (i, item) {
                           		$("#fetched-data").append('<tr>'
                                    +'<td><span class="text-secondary fw-semibold">'+item.EnName+'</span></td>'
                                    +'<td><span class="text-secondary">'+item.MmName+'</span></td>'
                                    +'<td><span class="badge '+(item.TypeName == 'outbound'? 'bg-label-primary':'bg-label-success')+'">'+item.TypeName+'</span></td>'
                                    +'<td><span class="badge bg-secondary">'+item.ShortCode+'</span></td>'
                                    +'<td>'+(item.Active == 1? '<span class="badge badge-center rounded-pill bg-success"><i class="bx bx-check"></i></span>':'<span class="badge badge-center rounded-pill bg-danger"><i class="bx bx-x"></i></span>')+'</td>'
                                    +'<td>'
                                        +'<div class="btn-group">'
                                                                +'<button type="button" class="btn btn-icon btn-sm btn-outline-secondary rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false" cursorshover="true"><i class="bx bx-dots-vertical-rounded" cursorshover="true"></i></button>'
                                                                +'<ul class="dropdown-menu dropdown-menu-end" style="">'
                                                                    +'<li ><a class="dropdown-item text-success  load-id" href="'+url+'/admin/package-categories/'+item.Id+'"><span class="tf-icons bx bx-search" cursorshover="true"></span>View Package</a></li>'
                                                                    +'<li><a class="dropdown-item text-primary  load-id" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#EditPackage" cursorshover="true" title= '+item.Id+'><span class="tf-icons bx bx-pencil" cursorshover="true"></span> Edit Package</a></li>'
                                                                    +'<li><a class="dropdown-item text-danger  load-id" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#DeletePackage" cursorshover="true" title= '+item.Id+'><span class="tf-icons bx bx-trash" cursorshover="true"></span> Delete Package</a></li>'
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
                                    +'<td><span class="text-primary">'+item.EnName+'</span></td>'
                                    +'<td><span class="text-primary">'+item.MmName+'</span></td>'
                                    +'<td>'+item.TypeName+'</td>'
                                    +'<td><span class="badge bg-primary">'+item.ShortCode+'</span></td>'
                                    +'<td>'+(item.Active == 1? '<span class="tf-icons bx bx-check text-success" cursorshover="true"></span>':'<span class="tf-icons bx bx-x text-danger" cursorshover="true"></span>')+'</td>'
                                    +'<td>'
                                        +'<button type="button" class="btn btn-icon btn-success btn-sm me-1" data-bs-toggle="modal" data-bs-target="#EditTownship" cursorshover="true">'
                                            +'<span class="tf-icons bx bx-search" cursorshover="true"></span>'
                                        +'</button>'
                                        +'<button type="button" class="btn btn-icon btn-primary btn-sm me-1 btn-edit" cursorshover="true" value="'+item.Id+'" data-bs-toggle="modal" data-bs-target="#EditPackage" cursorshover="true">'
                                            +'<span class="tf-icons bx bx-pencil" cursorshover="true"></span>'
                                        +'</button>'
                                        +'<button type="button" class="btn btn-icon btn-danger btn-sm load-id" cursorshover="true" value="'+item.Id+'" data-bs-toggle="modal" data-bs-target="#DeletePackage" cursorshover="true">'
                                            +'<span class="tf-icons bx bx-trash" cursorshover="true"></span>'
                                        +'</button>'
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
                            $("#links").append('<button type="button" class="btn btn-primary btn-sm pagination-btn me-1 mb-1 '+(data.current_page == value.label ? 'disabled':(value.url == null ? 'disabled':''))+'" cursorshover="true" value="'+value.url+'">'+value.label+'</button>');
                        });

                        $(".loading").addClass('hide');
                            $(".results").removeClass('hide');
                    }
                });
            });

            $('body').delegate(".load-id","click",function () {
               id = $(this).attr('title');
                $("#item").val(id);

                $.ajax({
                    url: url+'/api/v1/package-categories/'+id,
                    type: 'GET',
                    data: {},
                    success: function(data){

                        $("#edit-name-mm").val(data.MmName);
                        $("#edit-name-en").val(data.EnName);
                        $("#edit-shortcode").val(data.ShortCode);
                        $("#edit-type").val(data.TypeName).trigger('change');
                        $("#edit-description").val(data.Description);

                        $("#delete-label").text(data.EnName);

                        //$('input[name=old_branch_type][value='+data.Type+']').attr('checked', true);

                    }
                });
            });

            $('body').delegate(".btn-edit","click",function () {
                id = $(this).val();

                $.ajax({
                    url: url+'/api/v1/fetched-package',
                    type: 'POST',
                    data: {
                        id:id
                    },
                    success: function(data){
                        
                    }
                });
                
            });

            $('body').delegate(".btn-delete","click",function () {
                id = $("#item").val();

                 $.ajax({
                    url: url+'/admin/package-categories/delete',
                    type: 'POST',
                    data: {
                        'Id':id,
                        '_method':'DELETE',
                        '_token'            :token
                    },
                    success: function(data){
                        if(data.success == 1){
                            $('#DeletePackage').modal('hide');
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

            $('body').delegate(".btn-create","click",function () {
                cat_mmname                = $("#new-name-mm").val();
                cat_enname            = $("#new-name-en").val();
                cat_type                    = $("#new-type").val();
                cat_shortcode       = $("#new-shortcode").val();
                cat_description               = $("#new-description").val();

                $.ajax({
                    url: url+'/admin/package-categories/store',
                    type: 'POST',
                    data: {
                        'EnName'        :cat_mmname,
                        'MmName'      :cat_enname,
                        'TypeName'          :cat_type,
                        'Shortcode'        :cat_shortcode,
                        'Description'  :cat_description,
                        '_token'            :token
                    },
                    success: function(data){
                        if(data.success == 1){
                            $('#AddNewPackage').modal('hide');
                            $("#fetched-data").empty();

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
                id                = $("#item").val();;
                cat_mmname                = $("#edit-name-mm").val();
                cat_enname            = $("#edit-name-en").val();
                cat_type                    = $("#edit-type").val();
                cat_shortcode       = $("#edit-shortcode").val();
                cat_description               = $("#edit-description").val();

                $.ajax({
                    url: url+'/admin/package-categories/update',
                    type: 'PUT',
                    data: {
                        'Id'        :id,
                        'EnName'        :cat_enname,
                        'MmName'      :cat_mmname,
                        'TypeName'          :cat_type,
                        'Shortcode'        :cat_shortcode,
                        'Description'  :cat_description,
                        '_token'            :token
                    },
                    success: function(data){
                        if(data.success == 1){
                            $('#EditPackage').modal('hide');
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

            $('.form-control').on("keyup",function search(e) {
                if($(this).val().trim().length === 0) {
                    $(this).addClass('border-danger');
                }else{
                    $(this).removeClass('border-danger');
                }

                // if($("#item-no").val().trim().length > 6){
                //     $("#item-no").addClass('border-danger');
                // }

                if($("#new-name-mm").val().trim().length === 0 ||
                    $("#new-name-en").val().trim().length === 0 ||
                    $("#new-shortcode").val().trim().length === 0 ||
                    $("#new-description").val().trim().length === 0 ||
                    $("#new-shortcode").val().trim().length != 2
                ) {
                    $(".btn-create").addClass('denied');
                }else{
                    $(".btn-create").removeClass('denied');
                }
            });

            
            $('body').delegate(".filtered","click",function () {
                status = $(this).attr('title');
                $('.filtered').removeClass('active');
                $(this).addClass('active');

                 fetched_data(status);   
            });

          
            fetched_data('all');   
        });
  	</script>
</body>
</html>

