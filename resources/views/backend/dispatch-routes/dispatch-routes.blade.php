<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="" data-template="vertical-menu-template">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Royalx Core | Dispatch Routes</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('backend/images/favicon.png') }}">

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
        .denied{
        	opacity: 0.5;
        	pointer-events: none;
        }
    </style>
</head>
<body>
  	<!-- Layout wrapper -->
	<div class="layout-wrapper layout-content-navbar  ">
  		<div class="layout-container">
			@include('layouts.aside')

		    <div class="layout-page">
				<!-- Navbar -->
			  	@include('layouts.navbar')
				<!-- / Navbar -->
		      	
		      	<div class="content-wrapper">
			        <div class="container-xxl flex-grow-1 container-p-y">
						<h4 class="py-1 mb-2">
				  			<span class="text-muted fw-light">Dispatch Rules /</span> Dispatch Rules
						</h4>

						<div class="row block-section-1">
							<div class="col-12">
							  	<div class="accordion mb-3" id="accordionExample">
								    <div class="card accordion-item active">
								        <h2 class="accordion-header" id="headingOne">
								          	<button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#accordionOne" aria-expanded="true" aria-controls="accordionOne">
								            	<span class="fw-bolder text-primary">Filtered Routes</span>
								          	</button>
								        </h2>

								        <div id="accordionOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
								          	<div class="accordion-body">
								    			<h6 class="card-title">
								    				<span class="text-muted">Search Route #</span>
									    			<span id="lbl-delivery-type">1</span><span id="lbl-waybill-type">1</span><span id="lbl-from-township">XXXX</span><span id="lbl-to-township">XXXX</span>
									    		</h6>
									            <div class="row">
									                <div class="col-3">
									                  	<div class="mb-4">
										                    <label for="from-regions" class="form-label">From Region</label>
										                    <select id="from-regions" class="select2 form-select form-select-lg" data-allow-clear="true">
										                      
										                    </select>
									                  	</div>
									                </div>
									                <div class="col-3">
									                  	<div class="mb-4">
									                    	<label for="from-townships" class="form-label">From Township</label>
									                    	<select id="from-townships" class="select2 form-select form-select-lg" data-allow-clear="true">
									                      
									                    	</select>
									                  	</div>
									                </div>
									                <div class="col-3">
									                  	<div class="mb-4">
									                  	<label for="to-regions" class="form-label">To Region</label>
										                  	<select id="to-regions" class="select2 form-select form-select-lg" data-allow-clear="true">
										                      
										                    </select>
										                </div>
									                </div>
									                <div class="col-3">
									                  	<div class="mb-4">
									                  	<label for="to-townships" class="form-label">To Township</label>
										                  	<select id="to-townships" class="select2 form-select form-select-lg" data-allow-clear="true">
									                      
									                    	</select>
										                </div>
									                </div>
									            </div>

									            <div class="row">
									            	<div class="col-3">
										                <label for="delivery-type" class="form-label">Delivery Type</label>
											            <select id="delivery-type" class="select2 form-select form-select-lg" data-allow-clear="true">
											                <option value="1">NextDay</option>
											                <option value="2">SameDay</option>
											            </select>
										            </div>
										            <div class="col-3">
										                <label for="waybill-type" class="form-label">Waybill Type</label>
											            <select id="waybill-type" class="select2 form-select form-select-lg" data-allow-clear="true">
											                <option value="1">Outbound</option>
											                <option value="2">Rejected</option>
											                <option value="3">Transferred</option>
											            </select>
										            </div>
										            <div class="col-3 mb-4">
										                <button type="button" class="btn btn-primary mt-4 btn-search" cursorshover="true">
												            <span class="tf-icons bx bx-search"></span> Search Routes
												        </button>
										            </div>
									            </div>
								          	</div>
								        </div>
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
								<div class="row">
						            <div class="col-md-4">
						                        	
						            </div>
						            <div class="col-md-8">
					                    <div class="pull-right pagination">
					                        <input type="text" class="form-control form-inline border-primary" id="terms" placeholder="ရှာရန်" aria-describedby="defaultFormControlHelp">&nbsp;
					                        <div class="btn-group v-top" role="group" aria-label="Basic example">
					                            <button type="button" class="btn btn-primary pagination-btn" id="prev-btn" cursorshover="true"><i class="tf-icon bx bx-chevrons-left"></i></button>
					                            <button type="button" class="btn btn-outline-primary current-page" data-bs-toggle="modal" data-bs-target="#modalTop">0</button>
					                            <button type="button" class="btn btn-primary pagination-btn" id="next-btn"><i class="tf-icon bx bx-chevrons-right"></i></button>
					                            <button type="button" class="btn btn-outline-primary">Records: <span id="to-records">0</span>&nbsp;of&nbsp; <span id="total-records">0</span></button>
					                        </div>
					                    </div>
						            </div>
						        </div>
								<div class="table-responsive text-nowrap">
									<table class="table">
										<thead>
											<tr>
												<th class="text-muted unset">DispatchRuleID</th>
												<th class="text-muted unset">DispatchRuleName</th>
												<th class="text-muted unset">FromTownship</th>
												<th class="text-muted unset">ToTownship</th>
												<th class="text-muted unset">Actions</th>
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
		          	<!-- / Content -->
	          
		          	<input type="hidden" id="url" value="{{ url('') }}">
					<input type="hidden" id="json-routes" value="{{ url('json/dispatch-routes') }}">
					<input type="hidden" id="json-regions" value="{{ url('json/regions/all') }}">
					<input type="hidden" id="token" value="{{ csrf_token() }}">
					<input type="hidden" id="item" value="">

					<!-- Footer -->
					<footer class="content-footer footer bg-footer-theme">
						<div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
							<div class="mb-2 mb-md-0">
							    © <script> document.write(new Date().getFullYear()) </script>
							    , made with ❤️ by <a href="https://themeselection.com" target="_blank" class="footer-link fw-medium">ThemeSelection</a>
							</div>
						</div>
					</footer>
					<!-- / Footer -->
	          		<div class="content-backdrop fade"></div>
	        	</div>
	      	</div>
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

	<!-- Modal -->
    <div class="modal modal-top fade" id="generateModal" tabindex="-1">
        <div class="modal-dialog">
            <form class="modal-content">
                <div class="modal-header">
                  	<h5 class="modal-title text-muted" id="modalTopTitle">Generate Route Details For #
                        <span class="text-danger from-branch-label">XXX</span>
                        <span>
                            (<span class="from-region">XXX</span> ⇋ <span class="to-region">XXX</span>)
                        </span>
                        
                    </h5>
                  	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  	<div class="row">
			          	<div class="col-md-12 mb-2">
			          		<div class="list-group">
					            <label class="list-group-item border-primary" cursorshover="true">
					              <input class="form-check-input" type="checkbox" id="to-branch-name" value="" checked cursorshover="true">
						      <span class="text-primary fw-bolder">1.Direct Route</span>
						      <p class="mb-0  fs-18">
							<i class="bx bx-map text-primary"></i><span class="from-branch-label text-primary">XXX</span>
							<span>⇋</span>
							<i class="bx bx-map text-success"></i><span class="to-branch-label text-success">XXX</span>
						      </p>
					              <p class="badge bg-label-primary text-left mb-0 py-2 w-100">*တိုက်ရိုက်လမ်းကြောင်းဖြင့် ပို့မည်။</p>
					            </label>
					        </div>
			          	</div>
          				<div class="col-md-12 mb-2 difference-region">
				            <div class="list-group">
					            <label class="list-group-item border-primary" cursorshover="true">
					              <input class="form-check-input ygn-sorting" type="checkbox" id="ygn-sorting" value="11" cursorshover="true">
						     <span class="text-primary fw-bolder">2.YGN-SORTING Route</span> 
						      <p class="mb-0  fs-18">
							<i class="bx bx-map text-primary"></i><span class="from-branch-label  text-primary">XXX</span>
							<span>⇋</span>
							<i class="bx bx-map text-primary"></i><span class="text-primary">YGN-SORTING</span>
							<span>⇋</span>
							<i class="bx bx-map text-success"></i><span class="to-branch-label  text-success">XXX</span>
						      </p>
                              <p class="badge bg-label-primary text-left mb-0 py-2 w-100">*YGN-SORTING မှတဆင့် ပို့မည်။</p>
					            </label>
					        </div>
          				</div>
          				<div class="col-md-12 mb-2 difference-region">
				            <div class="list-group">
					            <label class="list-group-item border-primary" cursorshover="true">
					              <input class="form-check-input  mdy-sorting" type="checkbox" id="mdy-sorting" value="14" cursorshover="true">
						      <span class="text-primary fw-bolder">3.MDY-SORTING Route </span> 
						      <p class="mb-0  fs-18">
							<i class="bx bx-map text-primary"></i><span class="from-branch-label  text-primary">XXX</span>
							<span>⇋</span>
							<i class="bx bx-map text-primary"></i><span class="text-primary">MDY-SORTING</span>
							<span>⇋</span>
					              <i class="bx bx-map text-success"></i><span class="to-branch-label text-success">XXX</span>
						      </p>
					              <p class="badge bg-label-primary text-left mb-0 py-2 w-100">*MDY-SORTING မှတဆင့် ပို့မည်။</p>
					            </label>
					        </div>
          				</div>
			          	<div class="col-md-12 mb-2 difference-region lower-block">
						<div class="list-group">
							<label class="list-group-item border-warning" cursorshover="true">
							  <input class="form-check-input" type="checkbox" id="both-sorting-lower" value="lower" cursorshover="true" disabled>
							  <span class="text-primary fw-bolder">4.Both SORTING Route </span> 
							  <p class="mb-0  fs-18">
							  <i class="bx bx-map text-primary"></i><span class="from-branch-label text-primary">XXX</span>
								<span>⇋</span>
								<span class=""> 
									<i class="bx bx-map text-primary"></i><span class="text-primary">YGN-SORTING</span>
									<span>⇋</span>
									<i class="bx bx-map text-primary"></i><span class="text-primary">MDY-SORTING</span>
									<span>⇋</span>
									<i class="bx bx-map text-success"></i><span class="to-branch-label text-success">XXX</span>
							      </span>
							  </p>
								<p class="badge bg-label-primary text-left mb-0 py-2 w-100">*SORTING နှစ်ခုလုံး အသုံးပြုပြီး ပို့မည်။</p>
							</label>
						    </div>
			          	</div>
					  <div class="col-md-12 mb-2  difference-region upper-block ">
						<div class="list-group">
							<label class="list-group-item border-warning" cursorshover="true">
							  <input class="form-check-input" type="checkbox" id="both-sorting-upper" value="upper" cursorshover="true" disabled>
							  <span class="text-primary fw-bolder">4.Both SORTING Route </span> 
							  <p class="mb-0  fs-18">
							  <i class="bx bx-map text-primary"></i><span class="from-branch-label text-primary">XXX</span>
								<span>⇋</span>
								<span class=""> 
									<i class="bx bx-map text-primary"></i><span class="text-primary">MDY-SORTING</span>
									<span>⇋</span>
									<i class="bx bx-map text-primary"></i><span class="text-primary">YGN-SORTING</span>
									<span>⇋</span>
									<i class="bx bx-map text-success"></i><span class="to-branch-label text-success">XXX</span>
							      </span>
							  </p>
								<p class="badge bg-label-primary text-left mb-0 py-2 w-100">*SORTING နှစ်ခုလုံး အသုံးပြုပြီး ပို့မည်။</p>
							</label>
						    </div>
					      </div>
        			</div>
                </div>
                <div class="modal-footer">
                  	<button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                  	<button type="button" class="btn btn-primary btn-generate">Save</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal modal-top fade" id="editModal" tabindex="-1">
        <div class="modal-dialog">
            <form class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-muted" id="modalTopTitle">Edit Route Details For #
                        <span class="text-danger from-branch-label">XXX</span>
                        <span>
                            (<span class="from-region">XXX</span> ⇋ <span class="to-region">XXX</span>)
                        </span>
                        
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <div class="list-group">
                                <label class="list-group-item border-primary" cursorshover="true">
                                  <input class="form-check-input" type="checkbox" id="to-branch-name" value="" checked cursorshover="true">
                              <span class="text-primary fw-bolder">1.Direct Route</span>
                              <p class="mb-0  fs-18">
                            <i class="bx bx-map text-primary"></i><span class="from-branch-label text-primary">XXX</span>
                            <span>⇋</span>
                            <i class="bx bx-map text-success"></i><span class="to-branch-label text-success">XXX</span>
                              </p>
                                  <p class="badge bg-label-primary text-left mb-0 py-2 w-100">*တိုက်ရိုက်လမ်းကြောင်းဖြင့် ပို့မည်။</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-12 mb-2 difference-region">
                            <div class="list-group">
                                <label class="list-group-item border-primary" cursorshover="true">
                                  <input class="form-check-input ygn-sorting" type="checkbox" id="ygn-sorting" value="11" cursorshover="true">
                             <span class="text-primary fw-bolder">2.YGN-SORTING Route</span> 
                              <p class="mb-0  fs-18">
                            <i class="bx bx-map text-primary"></i><span class="from-branch-label  text-primary">XXX</span>
                            <span>⇋</span>
                            <i class="bx bx-map text-primary"></i><span class="text-primary">YGN-SORTING</span>
                            <span>⇋</span>
                            <i class="bx bx-map text-success"></i><span class="to-branch-label  text-success">XXX</span>
                              </p>
                              <p class="badge bg-label-primary text-left mb-0 py-2 w-100">*YGN-SORTING မှတဆင့် ပို့မည်။</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-12 mb-2 difference-region">
                            <div class="list-group">
                                <label class="list-group-item border-primary" cursorshover="true">
                                  <input class="form-check-input  mdy-sorting" type="checkbox" id="mdy-sorting" value="14" cursorshover="true">
                              <span class="text-primary fw-bolder">3.MDY-SORTING Route </span> 
                              <p class="mb-0  fs-18">
                            <i class="bx bx-map text-primary"></i><span class="from-branch-label  text-primary">XXX</span>
                            <span>⇋</span>
                            <i class="bx bx-map text-primary"></i><span class="text-primary">MDY-SORTING</span>
                            <span>⇋</span>
                                  <i class="bx bx-map text-success"></i><span class="to-branch-label text-success">XXX</span>
                              </p>
                                  <p class="badge bg-label-primary text-left mb-0 py-2 w-100">*MDY-SORTING မှတဆင့် ပို့မည်။</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-12 mb-2 difference-region lower-block">
                        <div class="list-group">
                            <label class="list-group-item border-warning" cursorshover="true">
                              <input class="form-check-input" type="checkbox" id="both-sorting-lower" value="lower" cursorshover="true" disabled>
                              <span class="text-primary fw-bolder">4.Both SORTING Route </span> 
                              <p class="mb-0  fs-18">
                              <i class="bx bx-map text-primary"></i><span class="from-branch-label text-primary">XXX</span>
                                <span>⇋</span>
                                <span class=""> 
                                    <i class="bx bx-map text-primary"></i><span class="text-primary">YGN-SORTING</span>
                                    <span>⇋</span>
                                    <i class="bx bx-map text-primary"></i><span class="text-primary">MDY-SORTING</span>
                                    <span>⇋</span>
                                    <i class="bx bx-map text-success"></i><span class="to-branch-label text-success">XXX</span>
                                  </span>
                              </p>
                                <p class="badge bg-label-primary text-left mb-0 py-2 w-100">*SORTING နှစ်ခုလုံး အသုံးပြုပြီး ပို့မည်။</p>
                            </label>
                            </div>
                        </div>
                      <div class="col-md-12 mb-2  difference-region upper-block ">
                        <div class="list-group">
                            <label class="list-group-item border-warning" cursorshover="true">
                              <input class="form-check-input" type="checkbox" id="both-sorting-upper" value="upper" cursorshover="true" disabled>
                              <span class="text-primary fw-bolder">4.Both SORTING Route </span> 
                              <p class="mb-0  fs-18">
                              <i class="bx bx-map text-primary"></i><span class="from-branch-label text-primary">XXX</span>
                                <span>⇋</span>
                                <span class=""> 
                                    <i class="bx bx-map text-primary"></i><span class="text-primary">MDY-SORTING</span>
                                    <span>⇋</span>
                                    <i class="bx bx-map text-primary"></i><span class="text-primary">YGN-SORTING</span>
                                    <span>⇋</span>
                                    <i class="bx bx-map text-success"></i><span class="to-branch-label text-success">XXX</span>
                                  </span>
                              </p>
                                <p class="badge bg-label-primary text-left mb-0 py-2 w-100">*SORTING နှစ်ခုလုံး အသုံးပြုပြီး ပို့မည်။</p>
                            </label>
                            </div>
                          </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-generate">Save</button>
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
	<script src="{{ asset('backend/js/forms-tagify.js') }}"></script>
	<script src="{{ asset('backend/js/forms-typeahead.js') }}"></script> 
	<script type="text/javascript">
		$(document).ready(function(){
	      	var url        		= $("#url").val();
	      	var json_routes 	= $("#json-routes").val();
	      	var json_regions 	= $("#json-regions").val();

	      	var routes   	= json_routes;
	      	var regions   	= json_regions;
	      	var token      	= $("#token").val();
	      	var region_type = '';
		var region_block = '';

	      	let rules = [];

	      	var fetched_data = function(){
                $.ajax({
	                url: routes,
	                type: 'GET',
	                data: {},
	                success: function(data){
	                    if(data.total > 0){
	                    	$.each(data.data, function( key, item ) {
		                    	$("#fetched-data").append('<tr>'
		                        +'<td class="text-primary"><a href="'+url+'/admin/routes/'+item.DispatchRuleID+'" class="fw-bolder list-item-'+item.DispatchRuleID+' '+(item.GeneratedRoutes == 1? '':'denied')+'">'+item.DispatchRuleID+'</a></td>'
		                        +'<td>'+item.DispatchRuleName+'</td>'
		                        +'<td>'+item.FromTownshipName+'</td>'
		                        +'<td>'+item.ToTownshipName+'</td>'
		                        +'<td>'
		                        	+'<button type="button" class="btn btn-icon btn-info btn-sm me-1 load-id" data-bs-toggle="modal" data-bs-target="#copyModal" cursorshover="true"  value='+item.DispatchRuleID+'>'
		                                +'<span class="tf-icons bx bx-copy" cursorshover="true"></span>'
		                            +'</button>'
		                        	+'<button type="button" class="btn btn-icon '+(item.GeneratedRoutes == 1? 'disabled btn-warning':'btn-success')+' btn-sm me-1 load-id generate-item-'+item.DispatchRuleID+'" data-bs-toggle="modal" data-bs-target="#generateModal" cursorshover="true"  value='+item.DispatchRuleID+'>'
		                                +'<span class="tf-icons bx bx-sitemap" cursorshover="true"></span>'
		                            +'</button>'
		                            +'<a href="" class="btn btn-icon btn-primary btn-sm me-1 load-id" cursorshover="true" data-bs-toggle="modal" data-bs-target="#editModal">'
		                                +'<span class="tf-icons bx bx-pencil" cursorshover="true"></span>'
		                            +'</a>'
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

	                        $(".loading").addClass('hide');
	                        $(".results").removeClass('hide');
	                	}else{
	                		$(".loading").addClass('hide');
	                		$(".results").removeClass('hide');
	                		$(".pagination").addClass('hide');
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
                        	$.each(data.data, function( key, item ) {
                                $("#fetched-data").append('<tr>'
                                +'<td class="text-primary"><a href="'+url+'/admin/routes/'+item.DispatchRuleID+'" class="fw-bolder list-item-'+item.DispatchRuleID+' '+(item.GeneratedRoutes == 1? '':'denied')+'">'+item.DispatchRuleID+'</a></td>'
                                +'<td>'+item.DispatchRuleName+'</td>'
                                +'<td>'+item.FromTownshipName+'</td>'
                                +'<td>'+item.ToTownshipName+'</td>'
                                +'<td>'
                                    +'<button type="button" class="btn btn-icon btn-info btn-sm me-1 load-id" data-bs-toggle="modal" data-bs-target="#copyModal" cursorshover="true"  value='+item.DispatchRuleID+'>'
                                        +'<span class="tf-icons bx bx-copy" cursorshover="true"></span>'
                                    +'</button>'
                                    +'<button type="button" class="btn btn-icon '+(item.GeneratedRoutes == 1? 'disabled btn-warning':'btn-success')+' btn-sm me-1 load-id generate-item-'+item.DispatchRuleID+'" data-bs-toggle="modal" data-bs-target="#generateModal" cursorshover="true"  value='+item.DispatchRuleID+'>'
                                        +'<span class="tf-icons bx bx-sitemap" cursorshover="true"></span>'
                                    +'</button>'
                                    +'<a href="" class="btn btn-icon btn-primary btn-sm me-1" cursorshover="true">'
                                        +'<span class="tf-icons bx bx-pencil" cursorshover="true"></span>'
                                    +'</a>'
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

                        	$(".loading").addClass('hide');
                        	$(".results").removeClass('hide');
                      	}else{
                        	$(".empty-data").removeClass('hide');
                      	}
                    }
                });
            });

            $('body').delegate(".load-id","click",function () {
            	var id = $(this).val();

                
                
            	$('#from-branch-name').prop('checked', true);
                $('#ygn-sorting').prop('checked', false);
                $('#mdy-sorting').prop('checked', false);
                $('#both-sorting-upper').prop('checked', false);
		          $('#both-sorting-lower').prop('checked', false);

            	$.ajax({
	                url: url+'/admin/dispatch-routes/'+id,
	                type: 'GET',
	                data: {},
	                success: function(data){
                        if(data.FromRegionCode == data.ToRegionCode){
                            $('.difference-region').addClass('hide');
                        }
                
	                	$(".from-branch-label").text(data.FromBranchName);
	                	$(".to-branch-label").text(data.ToBranchName);
	                	$("#to-branch-name").val(data.ToBranchName);
	                	$("#item").val(id);
				$(".lbl-both-label").text(data.ToRegion);
				region_block = data.ToRegion;

                $('.from-region').text(data.FromRegion);
                $('.to-region').text(data.ToRegion);
				
	                	if(data.RegionType == 'UPPER'){
	                		region_type = 'UPPER';
					
	                		//$(".upper").removeClass('hide');
	                		//$(".lower").addClass('hide');
					if(region_type == data.ToRegion){
						//$(".upper-block").removeClass('hide');
						//$(".lower-block").addClass('hide');
					}else{
						
					}
	                	}else{
					
	                		region_type = 'LOWER';
                            		//$(".lower-reg").removeClass('hide');
	                		//$(".lower").removeClass('hide');
	                		//$(".upper").addClass('hide');
					if(region_type == data.ToRegion){
						
						//$(".upper-block").removeClass('hide');
						//$(".lower-block").addClass('hide');
					}else{
						
					}
					
	                	}
	                }
	            });
            });

            $('body').delegate(".btn-generate","click",function () {
            	var id = $("#item").val();

            	if($('#to-branch-name').is(":checked")){
				  	to_branch = $('#to-branch-name').val();
				}else{
					to_branch = 0;
				}

            	if($('#ygn-sorting').is(":checked")){
				  	ygn_sorting = 1;
				}else{
					ygn_sorting = 0;
				}

				if($('#mdy-sorting').is(":checked")){
				  	mdy_sorting = 1;
				}else{
					mdy_sorting = 0;
				}

				if($('#both-sorting-lower').is(":checked")){
				  	both_sorting_lower = 1;
				}else{
					both_sorting_lower = 0;
				}

                if($('#both-sorting-upper').is(":checked")){
                    both_sorting_upper = 1;
                }else{
                    both_sorting_upper = 0;
                }

            	$.ajax({
	                url: url+'/admin/dispatch-routes/generate',
	                type: 'POST',
	                data: {
	                	'RuldId':id,
	                	'ToBranch':to_branch,
	                	'YgnSorting':ygn_sorting,
	                	'MdySorting':mdy_sorting,
	                	'BothSortingLower':both_sorting_lower,
                        'BothSortingUpper':both_sorting_upper,
	                	'OriginRegionType':region_type,
	                	'_token':token
	                },
	                success: function(data){
	                	if(data.success == 1){
                            $('#generateModal').modal('hide');
                            Swal.fire({
                                title:"Good job!",
                                text:data.message,
                                icon:"success",
                                customClass:{confirmButton:"btn btn-info"},
                                buttonsStyling:!1
                            });
                            $(".generate-item-"+id).addClass('disabled btn-warning');
                            $(".list-item-"+id).removeClass('denied');
                        }else{
                            Swal.fire({
                                title:"Sorry!",
                                text:data.message,
                                icon:"warning",
                                customClass:{confirmButton:"btn btn-info"},
                                buttonsStyling:!1
                            });
                        };
                        $('#from-branch-name').prop('checked', true);
                        $('#ygn-sorting').prop('checked', false);
                        $('#mdy-sorting').prop('checked', false);
                        $('#both-sorting').prop('checked', false);
	                }
	            });
            });

            var fetched_regions = function(){
                $.ajax({
	                url: regions,
	                type: 'GET',
	                data: {},
	                success: function(data){
	                    $.each(data, function (i, item) {
			                $('#from-regions').append('<option value="'+item['PostalCode']+'">'+item['MmName']+'('+item['PostalCode']+')</option>' );
			                $('#to-regions').append('<option value="'+item['PostalCode']+'">'+item['MmName']+'('+item['PostalCode']+')</option>' );
			            });            

			            fetched_townships();
	                }
	            });
            };

	      	var fetched_townships = function(){
	      		region = $('#from-regions').val();

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
			             	$('#from-townships').append('<option value="'+item['PostalCode']+'">'+item['MmName']+'('+item['PostalCode']+')</option>' );
			             	$('#to-townships').append('<option value="'+item['PostalCode']+'">'+item['MmName']+'('+item['PostalCode']+')</option>' );

			             	$("#lbl-from-township").text($('#from-townships').val());
			             	$("#lbl-to-township").text($('#to-townships').val());
			          	});
		            },
		        }); 
            };

            $('#from-regions').on("change",function search(e) {

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
			             	$('#from-townships').append('<option value="'+item['PostalCode']+'">'+item['MmName']+'('+item['PostalCode']+')</option>' );

			             	$("#lbl-from-township").text($('#from-townships').val());
			          	});
		            },
		        });       
		    });

		    $('#to-regions').on("change",function search(e) {

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
		                $('#to-townships').empty(); 
		                $.each(data, function (i, item) {
			             	$('#to-townships').append('<option value="'+item['PostalCode']+'">'+item['MmName']+'('+item['PostalCode']+')</option>' );

			             	$("#lbl-to-township").text($('#to-townships').val());
			          	});
		            },
		        });       
		    });

		    $('#from-townships').on("change",function search(e) {
		    	$("#lbl-to-township").text($('#from-townships').val());
		    });

		    $('#to-townships').on("change",function search(e) {
		    	$("#lbl-to-township").text($('#to-townships').val());
		    });

		    $('body').delegate(".btn-search","click",function () {
		    	$("#fetched-data").empty();
		    	from_region 	= $("#from-regions").val();
		    	to_region 		= $("#to-regions").val();
		    	from_township = $("#from-townships").val();
		    	to_township 	= $("#to-townships").val();
		    	delivery_type 	= $("#delivery-type").val();
		    	waybill_type 	= $("#waybill-type").val();

		    	$.ajax({
		            type: 'post',
		            url: url+'/json/search-routes',
		            dataType:'json',
		            data: {
		                'FromRegion' 	:from_region,
		                'ToRegion' 		:to_region,
		                'FromTownship' 	:from_township,
		                'ToTownship' 	:to_township,
		                'DeliveryType' 	:delivery_type,
		                'WaybillType' 	:waybill_type,
		                '_token'  		:token
		            },
		            success: function(data) {
		            	if(data.length > 0){
			                $.each(data, function( key, item ) {
				                $("#fetched-data").append('<tr>'
				                        +'<td class="text-primary"><span class="fw-bolder">'+item.DispatchRuleID+'</span></td>'
				                        +'<td>'+item.DispatchRuleName+'</td>'
				                        +'<td>'+item.DispatchRuleID+'</td>'
				                        +'<td>'+item.FromTownshipName+'</td>'
				                        +'<td>'+item.ToTownshipName+'</td>'
				                        +'<td>'
				                        	+'<button type="button" class="btn btn-icon btn-success btn-sm me-1 load-id" data-bs-toggle="modal" data-bs-target="#generateModal" cursorshover="true" '+(item.GeneratedRoutes == 1? 'disabled':'')+'  value='+item.DispatchRuleID+'>'
				                                +'<span class="tf-icons bx bx-sitemap" cursorshover="true"></span>'
				                            +'</button>'
				                            +'<a href="" class="btn btn-icon btn-primary btn-sm me-1" cursorshover="true">'
				                                +'<span class="tf-icons bx bx-pencil" cursorshover="true"></span>'
				                            +'</a>'
				                            +'<button type="button" class="btn btn-icon btn-danger btn-sm" cursorshover="true">'
				                                +'<span class="tf-icons bx bx-trash" cursorshover="true"></span>'
				                            +'</button>'
				                        +'</td>'
				                +'</tr>');
				            });
			            }
		            }
		        });
		    	
		    });

		    $('.ygn-sorting,.mdy-sorting').on("change",function search(e) {
		    	if($('#ygn-sorting').is(":checked") && $('#mdy-sorting').is(":checked")){
					if(region_type == region_block){
						$('#both-sorting-upper').prop('checked', true);
						$('#both-sorting-lower').prop('checked', true);
					}else{
						if(region_block == 'LOWER'){
							$('#both-sorting-upper').prop('checked', true);
						}else{
							$('#both-sorting-lower').prop('checked', true);
						}
					}
				}else{
					$('#both-sorting-upper').prop('checked', false);
					$('#both-sorting-lower').prop('checked', false);
				}
		    });

            fetched_data();
            fetched_regions();
            
        });
	</script>
</body>
</html>
