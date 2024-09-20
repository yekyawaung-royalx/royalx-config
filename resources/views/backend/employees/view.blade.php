<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="" data-template="vertical-menu-template">
<head>
      	<meta charset="utf-8" />
      	<title>Royalx Core | View Employee</title>
      	<link rel="icon" type="image/x-icon" href="{{ asset('backend/images/favicon.png') }}" />

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

        <!-- Helpers -->
        <script src="{{ asset('backend/js/helpers.js') }}"></script>
        <script src="{{ asset('backend/js/config.js') }}"></script>
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
                                                                        <a href="{{ url('admin/users') }}" class="text-secondary fw-semibold"><i class="tf-icon bx bx-chevrons-right" cursorshover="true"></i> Users </a> 
                                                                        <span class="text-muted fw-light"><i class="tf-icon bx bx-chevrons-right" cursorshover="true"></i> View Employee </span> 
                                                                </h5>
                                                        </div>
                                                </div>
            					<div class="row">
                  					<div class="col-lg-6">
								<div class="card h-100">
      									<div class="card-header d-flex align-items-center justify-content-between pb-0">
									        <div class="card-title mb-2">
									          	<h5 class="m-0 me-2">
									             		{{ $employee->EmployeeName }}
									        	</h5>
									        </div>
      									</div>
								      	<div class="card-body">
									        <ul class="p-0 m-0">
									          	<li class="d-flex my-3 pb-1">
										            	<div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
											              	<div class="me-2">
											                	<small>EmployeeId</small>
											                	<h6 class="mb-0">{{ $employee->EmployeeId }}&nbsp;</h6>
											              	</div>
										            	</div>
									          	</li>
									          	<li class="list-unstyled">
									             		<hr class="m-0">
									            	</li>
									          	<li class="d-flex my-3 pb-1">
										            	<div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
											              	<div class="me-2">
											                	<small>Position</small>
											                	<h6 class="mb-0">{{ $employee->Position }}&nbsp;</h6>
											              	</div>
										            	</div>
									          	</li>
									          	<li class="list-unstyled">
									             		<hr class="m-0">
									            	</li>
									            	<li class="d-flex my-3 pb-1">
										            	<div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
											              	<div class="me-2">
											                	<small>Department</small>
											                	<h6 class="mb-0">{{ $employee->Department }}&nbsp;</h6>
											              	</div>
										            	</div>
									          	</li>
									          	<li class="list-unstyled">
									             		<hr class="m-0">
									            	</li>
									            	<li class="d-flex my-3 pb-1">
										            	<div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
											              	<div class="me-2">
											                	<small>AssignDepartment</small>
											                	<h6 class="mb-0">{{ $employee->AssignDepartment }}&nbsp;</h6>
											              	</div>
										            	</div>
									          	</li>
									          	<li class="list-unstyled">
									             		<hr class="m-0">
									            	</li>
									            	<li class="d-flex my-3 pb-1">
										            	<div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
											              	<div class="me-2">
											                	<small>PhoneNo</small>
											                	<h6 class="mb-0">{{ $employee->PhoneNo }}&nbsp;</h6>
											              	</div>
										            	</div>
									          	</li>
									          	<li class="list-unstyled">
									             		<hr class="m-0">
									            	</li>
								          		<li class="d-flex my-3 pb-1">
										            	<div class="w-100 flex-wrap align-items-center justify-content-between gap-2">
											              	<div class="me-2">
												              	<div class="row">
												              		<div class="col-md-6">
												              			<small>Active</small>
												              		</div>
												              		<div class="col-md-6">
												              			@if($employee->Active == 1)
												                    		<span class="badge rounded-pill bg-success pull-right">Joined</span>
												                    		@else
												                    		<span class="badge rounded-pill bg-danger pull-right">Resigned</span>
												                    		@endif
												              		</div>
										              			</div>
										              		</div>
										            	</div>
          										</li>
									          	<li class="list-unstyled">
									             		<hr class="m-0">
									            	</li>
									            	<li class="d-flex my-3 pb-1">
										            	<div class="w-100 flex-wrap align-items-center justify-content-between gap-2">
											              	<div class="me-2">
											              		<div class="row">
												              		<div class="col-md-6">
												              			<small>SystemUser</small>
												              		</div>
											              			<div class="col-md-6">
											                    			<span class="badge rounded-pill bg-success pull-right label-register {{ $employee->SystemUser == 1? '':'hide' }}">Registered</span>
											                    			<span class="badge rounded-pill bg-danger pull-right  label-no-register {{ $employee->SystemUser == 1? 'hide':'' }}">No Register</span>
											              			</div>
											              		</div>
											              	</div>
										            	</div>
									          	</li>
									        </ul>
								        	<div class="row">
									        	<div class="col-md-12">
										         	<button type="button" class="btn btn-secondary mt-2 btn-save">Edit Employee</button>
										         	@if($employee->SystemUser == 0)
										         	<button type="button" class="btn btn-secondary mt-2 btn-register-modal" data-bs-toggle="modal" data-bs-target="#RegisterUser" cursorshover="true" >Register System User</button>
										        	@endif
									         	</div>
									     	</div>
								      	</div>
    								</div>
                  					</div>
            					</div>
          				</div>

					<!-- Footer -->
					<input type="hidden" id="url" value="{{ url('') }}">
					<input type="hidden" id="token" value="{{ csrf_token() }}">
					<input type="hidden" id="employee-id" value="{{ $employee->EmployeeId }}">
					<input type="hidden" id="employee-name" value="{{ $employee->EmployeeName }}">
					@include('layouts.footer')
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

  
	<!-- Add Modal -->
    	<div class="modal modal-top fade" id="RegisterUser" tabindex="-1">
	        <div class="modal-dialog">
	            	<form class="modal-content">
		                <div class="modal-header">
		                    	<h5 class="modal-title" id="modalTopTitle">Are you sure to register as a system user?</h5>
		                    	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		                </div>
		                <div class="modal-body">
                                        <label class="form-check-label" for="customRadioSecondary" cursorshover="true"> Choose user role </label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-check form-check-secondary">
                                          <input name="role" class="form-check-input" type="radio" value="manager" checked="">
                                          <label class="form-check-label" for="customRadioSecondary" cursorshover="true"> Manager </label>
                                        </div>
                                      </div>

                                      <div class="col-md-4">
       
                                        <div class="form-check form-check-secondary">
                                          <input name="role" class="form-check-input" type="radio" value="supervisor" >
                                          <label class="form-check-label"for="customRadioSecondary" cursorshover="true"> Supervisor </label>
                                        </div>
                                      </div>

                                      <div class="col-md-4">
       
                                        <div class="form-check form-check-secondary">
                                          <input name="role" class="form-check-input" type="radio" value="courier" >
                                          <label class="form-check-label"for="customRadioSecondary" cursorshover="true"> Courier </label>
                                        </div>
                                      </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                         <label class="form-check-label"for="customRadioSecondary" cursorshover="true"> Passcode </label>
                                         <div class="auth-input-wrapper d-flex align-items-center justify-content-sm-between numeral-mask-wrapper">
                                          <input type="tel" class="form-control auth-input h-px-50 text-center numeral-mask mx-1 my-2 val-1" maxlength="1" autofocus>
                                          <input type="tel" class="form-control auth-input h-px-50 text-center numeral-mask mx-1 my-2 val-2" maxlength="1">
                                          <input type="tel" class="form-control auth-input h-px-50 text-center numeral-mask mx-1 my-2 val-3" maxlength="1">
                                          <input type="tel" class="form-control auth-input h-px-50 text-center numeral-mask mx-1 my-2 val-4" maxlength="1">
                                          <input type="tel" class="form-control auth-input h-px-50 text-center numeral-mask mx-1 my-2 val-5" maxlength="1">
                                          <input type="tel" class="form-control auth-input h-px-50 text-center numeral-mask mx-1 my-2 val-6" maxlength="1">
                                        </div>
                                       <ul>
                                            <li class="rule-2 text-danger">Passcode must be number and 6 digits.</li>
                                            <li class="rule-2 text-danger">Each number must be unique.(eg.<i class="bx bx-check text-success"></i></span>461831, <i class="bx bx-x text-danger"></i></span><strong>4</strong>618<strong>4</strong>0)</li>
                                    </ul>
                                    <input type="hidden" id="passcode">
                                    </div>
                                </div>
		                </div>
		                <div class="modal-footer">
		                    	<button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
		                    	<button type="button" class="btn btn-secondary btn-register" disabled>Register</button>
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
                         <span id="success-message"></span>
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

  	<script src="{{ asset('backend/js/forms-selects.js') }}"></script>
    <script src="{{ asset('backend/js/pages-auth-two-steps.js') }}"></script>
    
  	<!-- Page JS -->
	<script type="text/javascript">
	        $(document).ready(function(){
	                var url              = $("#url").val();
	                var json_routes   = $("#json-routes").val();
	                var token            = $("#token").val();


	                $('body').delegate(".btn-register","click",function () {
	                	EmployeeId = $("#employee-id").val();
                        role = $('input[name="role"]:checked').val();
                        passcode =$("#passcode").val();
		                $.ajax({
		                        url: url+'/admin/register-system-user',
		                        type: 'POST',
		                        data: {
		                            'EmployeeId':EmployeeId,
                                    'Passcode':passcode,
                                    'Role':role,
		                                '_token' : token
		                        },
		                        success: function(data){
		                       
						if(data.success == 1){
			                            $('#RegisterUser').modal('hide');
			                            $("#fetched-data").empty();

			                            $("#success-message").text(data.message);
			                            $("#successToast").toast("show");

			                            $(".btn-register-modal").hide();
			                            $(".label-register").removeClass('hide');
			                            $(".label-no-register").addClass('hide');

			                            fetched_data(); 
			                        }else{
			                            	$("#error-message").text(data.message);
			                            	$("#errorToast").toast("show");
			                        }
		                        }
		                });
	           	 });

                    $('.auth-input').on("keyup",function search(e) {
                        var passcode = $(".val-1").val()+''+$(".val-2").val()+''+$(".val-3").val()+''+$(".val-4").val()+''+$(".val-5").val()+''+$(".val-6").val();

                        if (/^\d{6}$/.test(passcode)) {
                            let digitSet = new Set(passcode.split(''));

                            if(digitSet.size === 6){
                                 $("#passcode").val(passcode);
                                $(".btn-register").attr('disabled',false);

                                $(".rule-1").removeClass('text-danger');
                                $(".rule-2").removeClass('text-danger');
                                $(".rule-1").addClass('text-success');
                                $(".rule-2").addClass('text-success');
                            }else{
                                $(".btn-register").attr('disabled',true);

                                $(".rule-1").removeClass('text-danger');
                                $(".rule-1").addClass('text-success');
                                $(".rule-2").removeClass('text-success');
                                $(".rule-2").addClass('text-danger');
                                 console.log('password must be unique');
                            }
                            
                        }else{
                            $(".btn-register").attr('disabled',true);
                            console.log('not ok');
                        }

                        console.log(passcode);
                    });
	        });
  	</script>
</body>
</html>

